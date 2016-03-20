//函数式定义
var AppUtil = (function(){

	var checkLogin = function(){
		if(localStorage.getItem('loginDone')=='1'){
			return true;
		}
		return false;
	};
	var getFaID = function(){
		return getFaInfo('fa_id');
	};
	//localStorage.setItem("fa_info",JSON.stringify(json.fa_info));
	//
	var getFaInfo=function(key){
		if(localStorage.getItem('fa_info')){
			var fa_info = JSON.parse(localStorage.getItem('fa_info'));
			return fa_info[key];
		}
		return null;
		
	};
	var getDb = function (dbName,dbVersion,dbDisplayname,dbSize){
		return window.openDatabase(dbName, dbVersion,dbDisplayname, dbSize);
	};
	var conn = function(){
		var db=getDb("OakDB2", "1.0", "OakDB_Display", 200000);
		return db;
	};
	
	return {
		"checkLogin":checkLogin,
		"getFaID":getFaID,
		"initDataForLogin":initDataForLogin
	}
})();
//对象类定义
var dateUtil = {

	//create_time: return Date.now(),
	getNowTimeStamp:function(){
		return this.getTimeStamp(new Date());
	},
	now:function(){
		return Date.now();//new Date().getTime()//new Date().valueOf()
	},
	show:function(timeStamp){
		if(typeof(timeStamp)=="number"){
			return new Date(timeStamp);
		}else{
			return false;
		}
	}
}