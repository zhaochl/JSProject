function AddTag(content){
	if ( content != "" ) {
		var r = true;
		$(".oak-tag-added").each(function(){
			if ( $(this).text() == content ) r=false;
		});
		if (r) {
			var t = $("<span></span>")
			.text( content )
			.addClass("oak-tag-added");
			var c = $("<i></i>")
					.addClass("oak-tag-close")
					.addClass("icon-remove")
					.bind("click",function(){
						$(this).parent(".oak-tag-added").remove();
						$(".oak-tag-holder").trigger("tagclose",[$(this).parent(".oak-tag-added").text()]);
					})
					.appendTo(t);
			$(".oak-tag-holder").append(t);
		}else {
			window.alert("请不要重复添加相同标签！");
		}
		$(".oak-tag-holder").trigger("tagadd");
		return r;
	}
}


//异步添加标签触发器
$(".oak-tag-holder").on("tagadd",function(){
	var url = "{:U('FaSystem/editCustomer')}";
	var j = {};
	$(".oak-tag-added").each(function(i){
		var tname = 'tag'+i;
		j[tname] = $(this).text();
	});
	
	$.post(url,{
		customer_id : $("#customer_id").val(),
		phone : $("#phone").val(),
		email : $("#email").val(),
		city : $("#city").val(),
		qq : $("#qq").val(),
		weixin : $("#weixin").val(),
		description: $("#description").val(),
		tag_json : JSON.stringify(j)
	},function(){});
});

addTag()->渲染页面, 触发 tagadd函数-》执行on函数