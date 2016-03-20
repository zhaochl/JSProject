var RPCUtil = (function(){

	var getJSONP = function(fun,dataObj,sucessFun,errorFun){
		var url='http://bridge.caifuqiao.cn/index.php?m=Sync&a='+fun;
		console.log(url);
		$.ajax({
			async : true,
			url : url+'&callback=?',
			type : 'GET',
			dataType : 'jsonp',//data : {username : $("#username").val(),password : $.md5 ($("#password").val() )}, 
			jsonp : 'jsoncallback',
			data : dataObj, 
			timeout : 5000,
			success : sucessFun,
			error:errorFun
		});
	};
	var tt1= function (p1,p2) {
		getJSONP('tt',{p1:p1,p2:p2},function(){
			console.log('success');
		},function(){
			
		});
	};
	var aCustomer = function($data,$fa_id){
		/*client_brpc.aCustomer($data,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});*/
		//console.log('data:'+$data+',fa_id:'+$fa_id);
		getJSONP('aCustomer',{data:$data,fa_id:$fa_id},function(result){
				console.log('result:'+result);
			},function(){
				console.log('result:'+result);
			});
	};
	
	var uCustomer = function($data,$id,$fa_id){
		getJSONP('uCustomer',{data:$data,id:$id,fa_id:$fa_id},function(result){
			console.log('result:'+result);
		},function(){
			console.log('result:'+result);
		});
	};
	var dCustomer = function($id,$fa_id){
		getJSONP('dCustomer',{id:$id,fa_id:$fa_id},function(result){
			console.log('result:'+result);
		},function(){
			console.log('result:'+result);
		});
	};
	var aTag = function($data,$fa_id){
		getJSONP('aTag',{data:$data,fa_id:$fa_id},function(result){
			console.log('result:'+result);
		},function(){
			console.log('result:'+result);
		});
	};
	var uTag = function($data,$id,$fa_id){
		getJSONP('uTag',{data:$data,id:$id,fa_id:$fa_id},function(result){
			console.log('result:'+result);
		},function(){
			console.log('result:'+result);
		});
	};
	var dTag = function($id,$fa_id){
		getJSONP('dTag',{id:$id,fa_id:$fa_id},function(result){
			console.log('result:'+result);
		},function(){
			console.log('result:'+result);
		});
	};
	var aRCustomerTag = function($data,$fa_id){
		getJSONP('aRCustomerTag',{data:$data,fa_id:$fa_id},function(result){
			console.log('result:'+result);
		},function(){
			console.log('result:'+result);
		});
	};
	var uRCustomerTag = function($data,$id,$fa_id){
		getJSONP('uRCustomerTag',{data:$data,id:$id,fa_id:$fa_id},function(result){
			console.log('result:'+result);
		},function(){
			console.log('result:'+result);
		});
	};
	var dRCustomerTag = function($id,$fa_id){
		getJSONP('dRCustomerTag',{id:$id,fa_id:$fa_id},function(result){
			console.log('result:'+result);
		},function(){
			console.log('result:'+result);
		});
	};
	var aCommunication = function($data,$fa_id){
		getJSONP('aCommunication',{data:$data,fa_id:$fa_id},function(result){
			console.log('result:'+result);
		},function(){
			console.log('result:'+result);
		});
	};
	var uCommunication = function($data,$id,$fa_id){
		getJSONP('uCommunication',{data:$data,id:$id,fa_id:$fa_id},function(result){
			console.log('result:'+result);
		},function(){
			console.log('result:'+result);
		});
	};
	var dCommunication = function($id,$fa_id){
		getJSONP('dCommunication',{id:$id,fa_id:$fa_id},function(result){
			console.log('result:'+result);
		},function(){
			console.log('result:'+result);
		});
	};
	var aCalendar = function($data,$fa_id){
		getJSONP('aCalendar',{data:$data,id:$id,fa_id:$fa_id},function(result){
			console.log('result:'+result);
		},function(){
			console.log('result:'+result);
		});
	};
	var uCalendar = function($data,$id,$fa_id){
		getJSONP('uCalendar',{data:$data,id:$id,fa_id:$fa_id},function(result){
			console.log('result:'+result);
		},function(){
			console.log('result:'+result);
		});
	};
	var dCalendar = function($id,$fa_id){
		getJSONP('dCalendar',{id:$id,fa_id:$fa_id},function(result){
			console.log('result:'+result);
		},function(){
			console.log('result:'+result);
		});
	};
	
	return {'tt':tt1,'aCustomer':aCustomer,'uCustomer':uCustomer,'dCustomer':dCustomer,'aTag':aTag,'uTag':uTag,'dTag':dTag,'aRCustomerTag':aRCustomerTag,'uRCustomerTag':uRCustomerTag,'dRCustomerTag':dRCustomerTag,'aCommunication':aCommunication,'uCommunication':uCommunication,'dCommunication':dCommunication,'aCalendar':aCalendar,'uCalendar':uCalendar,'dCalendar':dCalendar};
	//return {'tt':tt1,'aCustomer':aCustomer};
})();