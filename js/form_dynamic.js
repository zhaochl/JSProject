/**
 * @2014.6.4
 * <div id=addtag></div>
 * <div class='oak-tag-input'></div>
 * 在$(this)相邻的兄弟节点之间寻找oak-tag-input节点,focus
 */
$('#addtag').click(function(){
	$(this).siblings(".oak-tag-input").focus();
});

$("#form1").submit(function(){
	var f = $(this);
	var j = {};
	$(".oak-tag-added").each(function(i){
		j[i] = $(this).text();
	});
	var h = $("<input>")
			.attr({
				"type" : "hidden",
				"name" : "tag_json",
				"value" : JSON.stringify(j)
			})
			.appendTo(f);
});

$('#delete').click(function(){
	if(confirm('确认删除吗？')){
		$("#form1").attr('action', '{:U("R_order_status_money/delete")}');
		$("#form1").submit();
	}
});