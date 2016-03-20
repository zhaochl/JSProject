/*
//点击选中效果，兄弟结点不选中，点击项目-选中
<dl class="dlist clearfix">
	<dt class="f-fl">投资领域：</dt>
	<dd class="f-fl"><a href="#">全部</a></dd>
	<dd class="f-fl on"><a href="#">工商企业</a></dd>
	<dd class="f-fl"><a href="#">金融市场</a></dd>
	<dd class="f-fl"><a href="#">基础设施</a></dd>
	<dd class="f-fl"><a href="#">房地产</a></dd>
	<dd class="f-fl"><a href="#">工矿企业</a></dd>
	<dd class="f-fl"><a href="#">其他</a></dd>
</dl>
*/

$(".dlist .f-fl").on("click",function(){
	var f = $(this);
	f.siblings().removeClass("on");
	f.addClass("on");
});
