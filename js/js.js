
function lo(x) {
	location.replace(x)
	// location.href= ""
}
function op(x, y, url) {
	$(x).fadeIn()
	if (y)
		$(y).fadeIn()
	if (y && url)
		$(y).load(url)

	$("#cover").fadeIn()
}
function cl(x) {
	$(x).fadeOut();
}



function resetForm() {
	//針對特定類型的input標籤進行資料清空的動作
	$("input[type='text'],input[type='password'],input[type='number'],input[type='radio']").val("");
}

//  ============= back to top
document.addEventListener('DOMContentLoaded', () => {
	const backToTop = document.getElementById('back-to-top');

	window.addEventListener('scroll', () => {
		const scrollTop = window.scrollY || document.documentElement.scrollTop;
		const windowHeight = document.documentElement.scrollHeight - document.documentElement
			.clientHeight;
		const scrollPercent = (scrollTop / windowHeight) * 100;

		if (scrollPercent > 10) {
			backToTop.style.opacity = '1'; // 設為完全不透明
			backToTop.style.visibility = 'visible'; // 顯示按鈕
			backToTop.style.transform = 'translateY(0)'; // 回到原始位置
		} else {
			backToTop.style.opacity = '0'; // 設為完全透明
			backToTop.style.visibility = 'hidden'; // 隱藏按鈕
			backToTop.style.transform = 'translateY(50px)'; // 下移回初始位置
		}
	});
});

// ====================select2 (圖示)




function login() {
	let user = {
		acc: $("#acc").val(),
		pw: $("#pw").val(),
	}
	// console.log(user);

	// 正則表達式：只允許字母和數字，至少8個字符
	// let pwRegex = /^[A-Za-z\d]{8,}$/;
	// 正則表達式：只允許字母和數字
	let pwRegex = /^[A-Za-z\d]+$/;
	// 檢查欄位是否為空
	if (user.acc == '' || user.pw == '') {
		Swal.fire({
			icon: 'error',
			title: '登入失敗',
			text: '帳號或密碼不可空白',
			confirmButtonText: '確定'
		});
		resetForm();
		return; // 終止函數執行
	}

	// 檢查密碼格式
	if (!pwRegex.test(user.pw)) {
		Swal.fire({
			icon: 'error',
			title: '登入失敗',
			text: '密碼格式僅允許字母和數字',
			confirmButtonText: '確定'
		});
		resetForm();
		return; // 終止函數執行
	}

	$.get("./api/chk_acc.php", {
		acc: user.acc
	}, (res) => {
		if (parseInt(res) == 0) {
			// console.log("chk acc => ", res)
			Swal.fire({
				icon: 'error',
				title: '登入失敗',
				text: '查無帳號，請重新輸入！',
				confirmButtonText: '確定'
			});

			resetForm()
		} else {
			$.post("./api/chk_pw.php", user, (res) => {
				if (parseInt(res) == 1) {
					Swal.fire({
						icon: 'success',
						title: '登入成功',
						text: '歡迎回來！',
						confirmButtonText: '確定'
					}).then(() => {
						location.href = 'admin.php';
					});
				} else {
					Swal.fire({
						icon: 'error',
						title: '登入失敗',
						text: '密碼錯誤，請重新輸入！',
						confirmButtonText: '確定'
					});
					resetForm();
				}
			});
		}
	})
}

function reg() {

	let user = {
		acc: $("#reg_acc").val(),
		pw: $("#reg_pw").val(),
		pw2: $("#reg_pw2").val(),
	}
	let pwRegex = /^[A-Za-z\d]+$/;
	if (user.acc == '' || user.pw == '' || user.pw2 == '') {
		Swal.fire({
			icon: 'error',
			title: '註冊失敗',
			text: '欄位不可空白',
			confirmButtonText: '確定'
		});
		resetForm()
	} else if (user.pw != user.pw2) {
		Swal.fire({
			icon: 'error',
			title: '註冊失敗',
			text: '密碼不一致',
			confirmButtonText: '確定'
		});
		resetForm()
	} else if (!pwRegex.test(user.pw)) {
		// 檢查密碼是否符合正則表達式
		Swal.fire({
			icon: 'error',
			title: '註冊失敗',
			text: '密碼僅允許字母和數字',
			confirmButtonText: '確定'
		});
		resetForm();
	} else {
		$.get('./api/chk_acc.php', { acc: user.acc }, function (res) {
			if (res > 0) {
				console.log(res);

				Swal.fire({
					icon: 'error',
					title: '註冊失敗',
					text: '帳號重複',
					confirmButtonText: '確定'
				});
				resetForm()
			} else {
				$.post('./api/reg.php', user, function (res) {
					if (res > 0) {
						Swal.fire({
							icon: 'success',
							title: '註冊成功',
							text: '將回到首頁',
							confirmButtonText: '確定'
						}).then(() => {
							location.href = 'index.php';
						});
					}
				})
			}
		})
	}
}


$(document).on("keydown", "#acc, #pw", function (event) {
	if (event.key === "Enter") {
		event.preventDefault(); // 防止表單自動提交
		login();
	}
});

// login
function showLogin() {
	// 顯示登入表單，隱藏註冊表單
	document.getElementById('loginForm').style.display = 'block';
	document.getElementById('registerForm').style.display = 'none';

	// 切換按鈕樣式
	document.querySelector('button[onclick="showLogin()"]').className = 'login_btn btn btn-primary active';
	document.querySelector('button[onclick="showRegister()"]').className = 'login_btn btn btn-outline-primary';
}

function showRegister() {
	// 顯示註冊表單，隱藏登入表單
	document.getElementById('loginForm').style.display = 'none';
	document.getElementById('registerForm').style.display = 'block';

	// 切換按鈕樣式
	document.querySelector('button[onclick="showLogin()"]').className = 'login_btn btn btn-outline-primary';
	document.querySelector('button[onclick="showRegister()"]').className = 'login_btn btn btn-primary active';
}