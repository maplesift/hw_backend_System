
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

function login() {
	let user = {
		acc: $("#acc").val(),
		pw: $("#pw").val(),
	}
	// console.log(user);

	$.get("./api/chk_acc.php", {
		acc: user.acc
	}, (res) => {
		if (parseInt(res) == 0) {
			// console.log("chk acc => ", res)
			alert("查無帳號");
			// resetForm()
		} else {
			$.post("./api/chk_pw.php", user, (res) => {
				// console.log("login => ", res)
				if (parseInt(res) == 1) {
					if (user.acc == 'admin') {
						location.href = 'admin.php';
					} else {
						location.href = 'index.php';
					}
				} else {
					alert("密碼錯誤");
					// resetForm();
				}
			})
		}
	})

}
function resetForm() {
	$("#acc").val("");
	$("#pw").val("");
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
$(document).ready(function () {
	$('#schools').select2({
		templateResult: formatOption,
		templateSelection: formatOption
	});

	function formatOption(option) {
		if (!option.id) {
			return option.text;
		}
		var img = $(option.element).data('image');
		return $('<span><img src="' + img + '" width="25px" height="25px"/> ' + option.text + '</span>');
	}
});

$(".ssaa li").hover(
	function () {
		$("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
		$("#altt").show()
	}
)
$(".ssaa li").mouseout(
	function () {
		$("#altt").hide()
	}
)

function login() {
	let user = {
		acc: $("#acc").val(),
		pw: $("#pw").val(),
	}
	// console.log(user);

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

function resetForm() {
	$("#acc").val("");
	$("#pw").val("");
}

$(document).on("keydown", "#acc, #pw", function (event) {
	if (event.key === "Enter") {
		event.preventDefault(); // 防止表單自動提交
		login();
	}
});