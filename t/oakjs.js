/**
 * @author zcl
 * @date 2014.8.5
 * @description 面向对象设计的js-pdo框架
 */

function t(content){console.log(content)}

//var oakjs = {'dbname':'oak','sql':'nosql','tbname':'notb'};

var oakjs = {
	'dbname':'oak1',
	'sql':'nosql',
	'tbname':'notb',
	'connect':connect,
	'getSql':getSql,
	'setSql':setSql,
	'add':add,
	'del':del,
	'save':save,
	'savep':savep,
	'create':create,
	'D':D

};


oakjs.init = function($dbname){
	this.dbname = $dbname;
	/*uexDataBaseMgr.openDataBase(dbName,1);
    // 打开数据库的回调函数
    uexDataBaseMgr.cbOpenDataBase = function(opid,type,data){
	if(opid == 1 &&type == 2&&data == 0){
        t("open db success");
    }else{
       t("open db fail");
    }
	};
	 */
}
/*oakjs.connect = connect;
oakjs.getSql = getSql;
oakjs.setSql = setSql;
oakjs.add = add;
oakjs.del = del;
oakjs.save = save;
oakjs.savep = savep;
oakjs.create = create;
oakjs.D = D;*/
//tbName  = 'oak_customer';
function D($tbname){
	this.tbname = 'oak_'+$tbname.toLowerCase();
}
function connect($dbname) {
	this.dbname = $dbname;
	t('connect '+this.dbname+' success');
};
function create(){
    console.log(this.dbname);
    sql = "DROP TABLE IF EXISTS `"+this.tbname+"`;";
//	uexDataBaseMgr.executeSql(dbName,1,sql);
//	uexDataBaseMgr.cbExecuteSql = createTableCallBack;
	t("drop success \n");
	sql = "CREATE TABLE `"+this.tbname+"` ( `customer_id`   INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,    `fa_id` INTEGER,    `name`  TEXT,    `email` TEXT,    `phone` TEXT,    `customer_name` TEXT,    `city`  TEXT,    `user_type` INTEGER,    `status`    INTEGER,    `create_time`   INTEGER,    `update_time`   INTEGER,    `is_deleted`    INTEGER,    `delete_time`   INTEGER,    `description`   TEXT,    `qq`    TEXT,    `weixin`    TEXT);";
//    uexDataBaseMgr.executeSql(dbName,1,sql);
	t("create "+this.tbname+" success,sql:"+sql);
    //Sql语句的执行的回调
//    uexDataBaseMgr.cbExecuteSql = createTableCallBack;
}
function add($data){
	//sql = "INSERT INTO `"+tbName+"` ( `fa_id`, `name`, `email`, `phone`, `customer_name`, `city`, `user_type`, `status`, `create_time`, `update_time`, `is_deleted`, `delete_time`, `description`, `qq`, `weixin`) VALUES (11, '', 'asdf', 'asdf', 'adsf', 'asdf', 0, 1, 1395220487, 1396003979, 1, 0, 'asdf', NULL, NULL);";
	sql = "INSERT INTO `"+this.tbname+"` (";
	field = "" ;
	value = "";
	if(typeof($data)==="object"){
		for(var s in $data){
			//alert(obj[s]);
			t('key:'+s+',value:'+$data[s]);
			field += "`" + s +"`,";
			value += '`' + $data[s] +'`,';
		}
		t('field:'+field);
		field = field.substring(0,field.lastIndexOf(","));//去掉最后一个,
		t('field:'+field);
		
		t('value:'+value);
		value = value.substring(0,value.lastIndexOf(","));//去掉最后一个,
		t('value:'+value);
		
		sql += field;
		sql += ") VALUES (";
		sql += value;
		sql +=");";
	}
	
	t('sql:'+sql);
	this.sql = sql;
	
	/*
	
	 uexDataBaseMgr.executeSql(dbName,1,sql);
     //Sql语句的执行的回调
     uexDataBaseMgr.cbExecuteSql =  insertDataCallBack(opid,type,data){
     	  if(opid == 1&&type == 2 &&data == 0){
     	  	t('add success');
     	  }
     };
	
	*/
}

function del($id){
	//sql = "DELETE FROM "+this.tbname+" WHERE customer_id = 1";
	sql = "DELETE FROM "+this.tbName+" WHERE customer_id = "+$id;
	this.sql = sql;
	
	/*
	//事务的执行
    uexDataBaseMgr.transaction(dbName,1,inFunc);
    //事务执行的回调
    uexDataBaseMgr.cbTransaction = transactionCallBack;
    */
	/*
    sql = "DELETE FROM "+this.tbname+" WHERE customer_id = 1";
    uexDataBaseMgr.executeSql(dbName,1,sql);
    //Sql语句的执行的回调
    uexDataBaseMgr.cbExecuteSql = null;
   */ 
	
}
function save($data,$id){
	//demo UPDATE oak_customer SET 'customer_name'='这是更改','fa_id'='43','name'='test' WHERE customer_id = 1
	sql2 = "UPDATE "+this.tbname+" SET customer_name='这是更改' WHERE customer_id = 1";
	
	sql = "UPDATE "+this.tbname+" SET ";
	//field = "" ;
	//value = "";
	for(var s in $data){
		//alert(obj[s]);
		t('key:'+s+',value:'+$data[s]);
		//field += "`" + s +"`,";
		//value += '`' + $data[s] +'`,';
		sql += "'" + s + "'='" + $data[s] +"',";
	}
	sql = sql.substring(0,sql.lastIndexOf(","));//去掉最后一个,
	sql += " WHERE customer_id = "+$id;
	this.sql = sql;
	
	/*
	uexDataBaseMgr.executeSql(dbName,1,sql);
	t("update success,sql:"+sql);
	uexDataBaseMgr.cbSelectSql = function(opid,type,data){
		 if(opid == 1&&type == 2 &&data == 0){
		 	t('save success');
		 }
	};
	
	*/
	
}
function savep($data,$pk,$pv){
	//demo UPDATE oak_customer SET 'customer_name'='这是更改','fa_id'='43','name'='test' WHERE customer_id = 1
	//sql2 = "UPDATE "+this.tbname+" SET customer_name='这是更改' WHERE customer_id = 1";
	
	sql = "UPDATE "+this.tbname+" SET ";
	//field = "" ;
	//value = "";
	for(var s in $data){
		//alert(obj[s]);
		t('key:'+s+',value:'+$data[s]);
		//field += "`" + s +"`,";
		//value += '`' + $data[s] +'`,';
		sql += "'" + s + "'='" + $data[s] +"',";
	}
	sql = sql.substring(0,sql.lastIndexOf(","));//去掉最后一个,
	sql += " WHERE "+$pk+" = "+$pv;
	this.sql = sql;
	
}
/**
 * @return object {'field':value}
 * @param $id
 */
function find($id){ 
	sql = "SELECT * FROM "+this.tbname +"WHERE customer_id = "+$id;
	this.sql = sql;
}
/**
 * 
 * @returns jsonList [{'field1':value1},{'field2':value2}]
 */
function select(){
	sql = "SELECT * FROM "+this.tbname;
	this.sql = sql;
	/*
	uexDataBaseMgr.selectSql(dbName,1,sql);
	t("select success,sql:"+sql);
    //Sql语句的查询的回调
    uexDataBaseMgr.cbSelectSql = function(opid,type,value){
    	if(opid == 1 && type == 1){
    		var jsonList=eval("("+value+")");
    	}
    	if(jsonList.length == 0){
    		alert("无数据");
    	}
		console.log(jsonList);
		for(var i=0;i<jsonList.length;i++){
			for(var key in jsonList[i]){
				//alert("key："+key+",value："+jsonList[i][key]); 
			}
		} 
    }; 
	*/
	
}

function getSql(){
	t('sql:'+this.sql);
	return this.sql;
}
function setSql($sql){
	t('sql:'+this.sql);
	this.sql = $sql;
}
oakjs.connect;
oakjs.getSql();
$data = {
		'fa_id':'11',
		'name':'zcl',
		'email':'asdf',
		'phone':'asdf',
		'customer_name':'asdf',
		'city':'asdf',
		'user_type':'asdf',
		'status':'0',
		'create_time':'1395220487',
		'update_time':'1395220487',
		'is_deleted':'1396003979',
		'delete_time':'1396003979',
		'description':'asdf',
		'qq':'110',
		'weixin':'adsf'
	}
oakjs.add($data);
$data_save = {
		'fa_id':'11',
		'name':'zcl',
}
$id = '43';
oakjs.save($data_save,$id);
$pk = 'customer_id';
$pv = '43';

oakjs.savep($data_save,$pk,$pv);
oakjs.getSql();