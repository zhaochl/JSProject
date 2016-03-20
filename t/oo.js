/**
 * @author zcl
 * @date 2014.8.5
 * @description 面向对象设计的js-pdo框架
 */

function t(content){console.log(content)}

var oakjs = {'dbname':'oak','sql':'nosql','tbname':'notb'};
oakjs.init = function($dbname){
	
}
oakjs.connect = connect;
oakjs.getSql = getSql;
oakjs.add = add;
oakjs.del = del;
oakjs.save = save;
oakjs.savep = savep;
oakjs.D = D;
tbName  = 'oak_customer';
function D($tbName){
	this.tbName = tbName;
}
function connect($dbname) {
	this.dbname = $dbname;
	t('connect '+this.dbname+' success');
};
function create(){
    console.log(this.dbname);
	// 打开数据库
    //uexDataBaseMgr.openDataBase(dbName,1);
    // 打开数据库的回调函数
    //uexDataBaseMgr.cbOpenDataBase = createDBCallBack;
}
function add($data){
	//sql = "INSERT INTO `"+tbName+"` ( `fa_id`, `name`, `email`, `phone`, `customer_name`, `city`, `user_type`, `status`, `create_time`, `update_time`, `is_deleted`, `delete_time`, `description`, `qq`, `weixin`) VALUES (11, '', 'asdf', 'asdf', 'adsf', 'asdf', 0, 1, 1395220487, 1396003979, 1, 0, 'asdf', NULL, NULL);";
	sql = "INSERT INTO `"+tbName+"` (";
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
}

function del($id){
	//sql = "DELETE FROM "+tbName+" WHERE customer_id = 1";
	sql = "DELETE FROM "+tbName+" WHERE customer_id = "+$id;
	
	this.sql = sql;
}
function save($data,$id){
	//demo UPDATE oak_customer SET 'customer_name'='这是更改','fa_id'='43','name'='test' WHERE customer_id = 1
	sql2 = "UPDATE "+tbName+" SET customer_name='这是更改' WHERE customer_id = 1";
	
	sql = "UPDATE "+tbName+" SET ";
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
	
}
function savep($data,$pk,$pv){
	//demo UPDATE oak_customer SET 'customer_name'='这是更改','fa_id'='43','name'='test' WHERE customer_id = 1
	//sql2 = "UPDATE "+tbName+" SET customer_name='这是更改' WHERE customer_id = 1";
	
	sql = "UPDATE "+tbName+" SET ";
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
	sql = "SELECT * FROM "+tbName +"WHERE customer_id = "+$id;
	this.sql = sql;
}
/**
 * 
 * @returns jsonList [{'field1':value1},{'field2':value2}]
 */
function select(){
	sql = "SELECT * FROM "+tbName;
	this.sql = sql;
}

function getSql(){
	t('sql:'+this.sql);
	return this.sql;
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

oakjs.savep($data_save,$pk,$pv)
oakjs.getSql();