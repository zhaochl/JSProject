$(".delete_btn").click(function(){
	$id = $(this).attr('rel');
	window.location.href="{:U('AdSystem/deleteProduct','product_id=')}"+$id;
});

//获取当前网址的信息
//var url=document.URL;//location.href
var url=location.href;//location.href