$(document).ready(function(){
	var receiveData = "{\"uid\":\"1031\",\"tb\":\"Customer\",\"did\":\"14868\",\"op\":\"U\",\"data\":{\"customer_name\":\"\u6a0a\u96ea\u95fb\",\"phone\":\"18604267636\",\"email\":\"\",\"qq\":\"\",\"weixin\":\"\",\"description\":\"\",\"customer_id\":\"14868\",\"update_time\":1419477736},\"fr\":\"b\",\"dto\":\"c\",\"nv\":6542,\"pv\":\"6541\",\"ut\":1419477736}";
	$("#getval").on("click", function(){
		var ikey = $("#iptkey").val();
		var idata = $("#iptstring").val() || receiveData;
		alert(jsonUtil.getDataJSONObject(idata));
		var ival = jsonUtil.getValFromKey(ikey,idata);
	});
	
	// xmppUtil.receive('zcl', 'zzl', 2, 'receive:'+receiveData);
	// xmppUtil.send('zcl', 'zzl', 2, 'send:zcl to zzl mes');
});