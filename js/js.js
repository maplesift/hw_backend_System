// JavaScript Document
$(document).ready(function (e) {
	$(".mainmu").mouseover(
		function () {
			// $(this)為.mainmu  .mainmu 的.mw
			$(this).children(".mw").stop().show()
		}
	)
	$(".mainmu").mouseout(
		function () {
			$(this).children(".mw").hide()
		}
	)
});

function lo(x) {
	location.replace(x)
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


// $(document).ready(function() {
// 	$('#schools').select2({
// 		templateResult: formatOption,
// 		templateSelection: formatOption
// 	});

// 	function formatOption(option) {
// 		if (!option.id) {
// 			return option.text;
// 		}
// 		var img = $(option.element).data('image');
// 		return $('<span><img src="' + img + '" width="25px" height="25px"/> ' + option.text + '</span>');
// 	}
// });