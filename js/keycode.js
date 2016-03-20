$(document).ready(function(){
	$("#username").focus();
});
$("#username").keydown(function(){
	if (event.keyCode==13) {  //回车键的键值为13
		$("#password").focus();
	}
});
$("#password").keydown(function(){
	if (event.keyCode==13) {
		$("#form1").submit();
	}
});