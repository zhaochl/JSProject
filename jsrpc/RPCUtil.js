var RPCUtil = (function(){
	//var fun = ['tt','sha1','addCacheDataQueue','getCacheDataVersion','md5'];
	//var client = new PHPRPC_Client('http://cache.caifuqiao.cn/index.php?m=cacheQueue&a=enQueue',fun);

	var brpcFun = ['tt','aCustomer','uCustomer','dCustomer','aTag','uTag','dTag','aRCustomerTag','uRCustomerTag','dRCustomerTag','aCommunication','uCommunication','dCommunication','aCalendar','uCalendar','dCalendar'];
	var client_brpc = new PHPRPC_Client('http:/localhost/oak0.5.5/index.php?m=Sync&a=rpc',brpcFun);
	//client_brpc.setKeyLength(256);
	//client_brpc.setEncryptMode(3);
	//aCustomer($data,$fa_id)
	//
	
	//function aCustomer($data,$fa_id){
	var tt1= function (p1,p2) {
		client_brpc.tt(p1,p2,function(result, args, output, warning){
			console.log('result:'+result);
			client_brpc=null;
		});
	};
	var aCustomer = function($data,$fa_id){
		client_brpc.aCustomer($data,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	var uCustomer = function($data,$id,$fa_id){
		client_brpc.uCustomer($data,$id,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	var dCustomer = function($id,$fa_id){
		client_brpc.dCustomer($id,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	var aTag = function($data,$fa_id){
		client_brpc.aTag($data,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	var uTag = function($data,$id,$fa_id){
		client_brpc.uTag($data,$id,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	var dTag = function($id,$fa_id){
		client_brpc.dTag($id,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	var aRCustomerTag = function($data,$fa_id){
		client_brpc.aRCustomerTag($data,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	var uRCustomerTag = function($data,$id,$fa_id){
		client_brpc.uRCustomerTag($data,$id,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	var dRCustomerTag = function($id,$fa_id){
		client_brpc.dRCustomerTag($id,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	var aCommunication = function($data,$fa_id){
		client_brpc.aCommunication($data,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	var uCommunication = function($data,$id,$fa_id){
		client_brpc.uCommunication($data,$id,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	var dCommunication = function($id,$fa_id){
		client_brpc.dCommunication($id,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	var aCalendar = function($data,$fa_id){
		client_brpc.aCalendar($data,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	var uCalendar = function($data,$id,$fa_id){
		client_brpc.uCalendar($data,$id,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	var dCalendar = function($id,$fa_id){
		client_brpc.dCalendar($id,$fa_id,function(result, args, output, warning){
			console.log('result:'+result);
		});
	};
	return {'tt':tt1,'aCustomer':aCustomer,'uCustomer':uCustomer,'dCustomer':dCustomer,'aTag':aTag,'uTag':uTag,'dTag':dTag,'aRCustomerTag':aRCustomerTag,'uRCustomerTag':uRCustomerTag,'dRCustomerTag':dRCustomerTag,'aCommunication':aCommunication,'uCommunication':uCommunication,'dCommunication':dCommunication,'aCalendar':aCalendar,'uCalendar':uCalendar,'dCalendar':dCalendar};
})();