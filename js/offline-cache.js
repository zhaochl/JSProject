if(st==1)
{
	getJSONP(url,data,function(json){
		//alert('success');
		//test(json)
		if ( json.status == 1 ) {	//查询成功				
			product = json.result[0];
			window.product = product;
			//alert(JSON.stringify(product));
			addTolc('productDetailList',product);
			//alert('2222');
			//var jsonStr=localStorage.getItem("product");
			//alert(JSON.stringify(product));
			//这是结果
			//xuan ran ye mian
			//alert($("#productDetail").html());
			//var str = _.template($("#productDetail").html(), product);
			//alert(str);
			$("#pageone").html( _.template($("#productDetail").html(), product));
		}else{
			product = getObjlcByID('productDetailList','product_id',product_id);
			window.product = product;
			$("#pageone").html( _.template($("#productDetail").html(), product));
		}	
	},//successs
	function(){
		//				alert('error');
		product = getObjlcByID('productDetailList','product_id',product_id);
		if(product){
			window.product = product;
			$("#pageone").html( _.template($("#productDetail").html(), product));
		}else{
			$("#pageone").html( _.template($("#productDetailError").html(), null));
		}
	});
}else{
	product = getObjlcByID('productDetailList','product_id',product_id);
	if(product){
		window.product = product;
		$("#pageone").html( _.template($("#productDetail").html(), product));
	}else{
		$("#pageone").html( _.template($("#productDetailError").html(), null));
		//U('error.html');
	}
}