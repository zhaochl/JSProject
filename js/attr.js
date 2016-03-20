
/**
<tr>
	<td onclick="window.location.href='{:U('FaSystem/orderDetail','order_id='.$vo['order_id'])}'" order_id="{$vo.order_id}">{$vo.order_id}</td>
	<td onclick="window.location.href='{:U('FaSystem/orderDetail','order_id='.$vo['order_id'])}'">{$vo.product_name}</td>
	<td onclick="window.location.href='{:U('FaSystem/orderDetail','order_id='.$vo['order_id'])}'">{$vo.customer_name}</td>
	<td onclick="window.location.href='{:U('FaSystem/orderDetail','order_id='.$vo['order_id'])}'"><if condition="$vo.real_amount eq 0">{$vo.order_amount}<else/>{$vo.real_amount}</if></td>
	<td onclick="window.location.href='{:U('FaSystem/orderDetail','order_id='.$vo['order_id'])}'">{$vo.pre_pay_time|date='Y-m-d',###}</td>
</tr>
 */
$("#myselfOrderList .close-icon").on("click",function(){
	if ( window.confirm("确认要取消这条订单么？") ) {
		
		var o = $(this);
		var oid = o.closest("tr").children("td:first").text();
		//console.log(oid);
		//var oid2 = o.closest("tr").children("td:first").attr("order_id");
		console.log(oid2);
		//$.get("/index.php?m=fa_system&a=deletetask&oid="+oid,function(){
			//o.closest("tr").fadeOut();
		//});
		o.closest("tr").fadeOut();
	}
});


<input type="hidden" name="type" id="search" value="10">
<input type="hidden" name="time" value="0">
<input type="text" name="name" class="search-input" x-webkit-speech="">
<input type="text" class="text" name="username" datatype="*1-16" errormsg="用户名不超过16个字节" nullmsg="用户名不能为空">
<input type="submit" value="提交" class="btn"><input type="hidden" value="53501" id="editbtn_user_id">
<input type="hidden" value="22827" id="editbtn_article_id">
<input type="hidden" value="Topic" id="editbtn_article_module"><input type="hidden" name="app_name" value="">
<input type="hidden" name="author_id" value="53501"><input type="hidden" name="title" value="volist多层嵌套的序号问题">
<input type="hidden" value="44" name="model_id">
<input type="hidden" value="22827" name="record_id">
<input type="hidden" value="0" name="review_id"><input type="submit" class="cmt-btn" value="评论&nbsp;[&nbsp;Ctrl+Enter&nbsp;]">
<input type="hidden" id="collect_model_id" value="44"><input type="hidden" id="collect_record_id" value="22827">
<input type="hidden" id="collect_title" value="volist多层嵌套的序号问题"><input type="hidden" id="su_model_id" value="44">
$('input[name=type]').attr('id')


dom对象转js
