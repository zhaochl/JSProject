//TagModelUtil
define(function () {
    /*var num = function (x) {
    	alert('success');
        return x % 2 == 0;
    };*/
	var getDb = function (dbName,dbVersion,dbDisplayname,dbSize){
 		return window.openDatabase(dbName, dbVersion,dbDisplayname, dbSize);
 	};
 	wait = function(tag_id,$callback){
 		var _this =this;
 		//alert('waitting');
 		 /*$(document).on("returnTaglist",function(e,taglist){
			 alert('back:'+JSON.stringify(taglist));
			$callback(taglist);
			 //return taglist;
		 });*/
 		//window.data
 		$(document).on("returnTaglist",function(event,data){
 			//alert('on-returnTaglist-data:'+JSON.stringify(data));
 			//alert(JSON.stringify(window.data));
 			$callback(data);
 		});
 		 //
 		 //alert('get-Tag-List');
 		setTimeout(1000*10,_this.getTagList(tag_id));
 	};
	getTagList = function(tag_id){
		 /*$(document).on("returnTaglist",function(e,taglist){
			 alert('back:'+JSON.stringify(taglist));
			 window.data = taglist;
			 return taglist;
		 });*/
		//alert('getTagList-start');
		var db=getDb("OakDB2", "1.0", "OakDB_Display", 200000);
		
		
		db.transaction(function(tx){
			tx.executeSql('SELECT * FROM oak_tag order by update_time desc',[],function(tx,results){
				
				var taglist = [];
				var len = results.rows.length;
				for (var j=0; j<len; j++){
					var tag = results.rows.item(j);
					//if(tag.tag_id == tag_id)
					//alert(JSON.stringify(tag));
						taglist.push(tag);
				}
				//alert('on-t-data:'+JSON.stringify(taglist));
				 //window.data = taglist;
				$(document).trigger("returnTaglist",[taglist]);
				//return taglist;
			},null);
		},function(){
			//alert('connect error');
		});//调用所有的tag
		//alert('data:'+JSON.stringify(taglist));
		//alert('getTagList-end');
	};
	getCustomerTagByTagNameList = function(tagName){
		//alert('getCustomerTagList-start:'+tagName);
		var db=getDb("OakDB2", "1.0", "OakDB_Display", 200000);
		db.transaction(function(tx){
			tx.executeSql("SELECT count(*) as nums FROM oak_r_customber_tag where tag_name='"+tagName+"'",[],function(tx,results){
				
				var taglist = [];
				var len = results.rows.length;
				tagNum=results.rows.item(0).nums;
				/*for (var j=0; j<len; j++){
					var rctag = results.rows.item(j);
					if(rctag.tag_name == tagName)
					//alert(JSON.stringify(tag));
						taglist.push(rctag);
				}*/
				taglist.push(tagNum);
				//alert('on-t-data:'+JSON.stringify(taglist));
				 //window.data = taglist;
				$(document).trigger("returnRCTaglist",[taglist]);
				//return taglist;
			},null);
		},function(){
			//alert('connect error');
		});//调用所有的tag
		//alert('getCustomerTagList-end');
	};
	ctwait = function(tagName,$callback){
 		var _this =this;
 		//alert('waitting');
 		 /*$(document).on("returnTaglist",function(e,taglist){
			 alert('back:'+JSON.stringify(taglist));
			$callback(taglist);
			 //return taglist;
		 });*/
 		//window.data
 		$(document).on("returnRCTaglist",function(event,data){
 			//alert('on-returnTaglist-data:'+JSON.stringify(data));
 			//alert(JSON.stringify(window.data));
 			$callback(data);
 		});
 		 //
 		 //alert('get-Tag-List');
 		setTimeout(1000*10,_this.getCustomerTagByTagNameList(tagName));
 	};
    return {
    	getCustomerTagByTagNameList:getCustomerTagByTagNameList,
    	ctwait:ctwait,
    	wait:wait,
    	getTagList: getTagList,
        result:1
    };
});