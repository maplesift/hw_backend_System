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