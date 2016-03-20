$("input[name='email']").focus(
	function() {
		if ($("input[name='email']+span.error").size() == 0
				&& $("input[name='email']+span.success").size() == 0) {
			$(this).after(
					"<span class='hint'>Please enter your email.</span>");
		}
	}
);
$("input[name='email']").blur(function() {
	$("input[name='email']+span").remove();
	if (!$(this).val().match(/^\w{3,}@\w+(\.\w+)+$/)) { // 正则表达式判断email格式是否正确
		$(this).after("<span class='error'>Invalid email format.</span>");
	} else {
		$(this).after("<span class='success'>Passed.</span>");
	}
});