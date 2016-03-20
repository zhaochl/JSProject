//WebSyncUtil.js
var WebSyncUtil = (function(){
	var setlc = function(key,value){
		localStorage.setItem(key,value);
	};
	var getlc = function(key){
		return localStorage.getItem(key);
	};
	//array productDetail[{id:''}{id:''}]
	/**
	 * 
	 * getObjFromlcArrByID
	 * add by zcl
	 * @2014.11.19
	 * 从缓存数据取出一条产品详情
	 */
	var getObjlcByID = function(key,pk,pval){
		var data = getlc(key)||'';
		if(data!=''){
			var dataArr = JSON.parse(data);
			for(var i=0;i<dataArr.length;i++){
				if(dataArr[i][pk]==pval){
					return dataArr[i];
				}
			}
		}
	};
	//addTolcArr
	/**
	 * add by zcl
	 * @2014.11.19
	 * 添加产品详情数据到缓存
	 */
	var addTolc = function(key,obj) {
		var olddata = getlc(key)||'';
		//alert('olddata:'+olddata);
		var olddataArr = [];
		if(olddata!=''){
			olddataArr = JSON.parse(olddata);
		}
		olddataArr.push(obj);
		var newdata = JSON.stringify(olddataArr);
		//alert('json-new:'+newdata);
		setlc(key,newdata);
		var newdata2 = getlc(key)||'';
		//alert('newdata:'+newdata2);
	};
	return {
		"rendProductList":rendProductList,
		"rendViewProduct":rendViewProduct,
		"rendFileList":rendFileList,
		"sendMailAttach":sendMailAttach,
		"setlc" :setlc,
		"getlc":getlc,
		"saveToCache":saveToCache
	}
	
})();