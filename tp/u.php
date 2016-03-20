$.get("{:U('FaDepot/rmOrder','order_id=')}"+oid,function(json){
	console.log(json);
	if(json.status==1){
		o.closest("tr").fadeOut();
	}
});