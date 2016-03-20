var oakjs = {'dbname':'oak'};
oakjs.init = function($dbname){
	
}
oakjs.connect = function($dbname) {
	
};
function create(){
    // 打开数据库
    uexDataBaseMgr.openDataBase(this.dbname,1);
    // 打开数据库的回调函数
    uexDataBaseMgr.cbOpenDataBase = createDBCallBack;
}
function add($data){
	
}

function del($id){
	
}
function update($data,$id){
	
}

function find($id){
	
}

function select(){
	
}


var cText = 0;
var cJson = 1;
var cInt = 2;
var dbName;
function createDB(){
    dbName = document.getElementById('name').value;
    // 打开数据库
    uexDataBaseMgr.openDataBase(dbName,1);
    // 打开数据库的回调函数
    uexDataBaseMgr.cbOpenDataBase = createDBCallBack;
}
function createTable(){
    // Sql语句的执行
    uexDataBaseMgr.executeSql(dbName,1,document.getElementById('createTable').value);
    // Sql语句的执行的回调
    uexDataBaseMgr.cbExecuteSql = createTableCallBack;
}
function insertData(){
    // Sql语句的执行
    uexDataBaseMgr.executeSql(dbName,1,document.getElementById('insertData').value);
    // Sql语句的执行的回调
    uexDataBaseMgr.cbExecuteSql = insertDataCallBack;
}
function selectData(){
    // Sql语句的查询
    uexDataBaseMgr.selectSql(dbName,1,document.getElementById('selectData').value);
    // Sql语句的查询的回调
    uexDataBaseMgr.cbSelectSql = selectDataCallBack;
}
function updateData(){
    // Sql语句的执行
    uexDataBaseMgr.executeSql(dbName,1,document.getElementById('updateData').value);
    uexDataBaseMgr.cbSelectSql = updateDataCallBack;
}
function transaction(){
    // 事务的执行
    uexDataBaseMgr.transaction(dbName,1,inFunc);
    // 事务执行的回调
    uexDataBaseMgr.cbTransaction = transactionCallBack;
}
function createDBCallBack(opid,type,data){
    switch(type){
        case cText:
            alert("uex.cText");
            break;
        case cJson:
          alert("uex.cJson");
            break;
        case cInt:
        if(opid == 1 &&type == 2&&data == 0){
            alert("数据库打开成功！");
        }else{
             alert("数据库打开失败！");
        }
        break;
      default:
          alert("error"); 
  }
};
function insertDataCallBack(opid,type,data){
    switch(type){
        case cText:
            alert("uex.cText");
            break;
        case cJson:
          alert("uex.cJson");
            break;
        case cInt:
        if(opid == 1&&type == 2 &&data == 0){
            alert("数据插入成功！");
        }else{
             alert("数据插入失败！");
        }
        break;
      default:
          alert("error");  
  }
};
function createTableCallBack(opid,type,data){
    switch(type){
        case cText:
            alert("uex.cText");
            break;
        case cJson:
          alert("uex.cJson");
            break;
        case cInt:
        if(opid == 1&&type == 2 &&data == 0){
            alert("表创建成功！");
        }else{
             alert("表创建失败！");
        }
        break;
      default:
          alert("error");     
  }
};
function selectDataCallBack(opid,type,value){
	switch(type){
    	case cText:
        	alert("uex.cText");
        	break;
        case cJson:
	        if(opid == 1 && type == 1){
	        	var jsonList=eval("("+value+")");
	        	if(jsonList.length == 0){
	        		alert("无数据");
	        	}
	        	for(var i=0;i<jsonList.length;i++){
	        		for(var key in jsonList[i]){
	        			alert("key："+key+",value："+jsonList[i][key]); 
	        		}
	        	} 
	        }else{
	            alert("查询失败！");
	        }
	        break;
	    case cInt:
	    	alert("uex.cInt"); 
	    	break;
      default:
          alert("error");  
  }
};
function updateDataCallBack(opid,type,data){
    switch(type){
        case cText:
            alert("uex.cText");
            break;
        case cJson:
          alert("uex.cJson");
            break;
        case cInt:
	        if(opid == 1&&type == 2 &&data == 0){
	            alert("数据插入成功！");
	        }else{
	             alert("数据插入失败！");
	        }
        break;
      default:
          alert("error");  
  }
};
function inFunc(){
        // Sql语句的执行
    uexDataBaseMgr.executeSql(dbName,1,document.getElementById('transactiontData').value);
        // Sql语句的执行的回调
    uexDataBaseMgr.cbExecuteSql = null;
}
function transactionCallBack(opid,type,data){
    switch(type){
        case cText:
            alert("uex.cText");
            break;
        case cJson:
          alert("uex.cJson");
            break;
        case cInt:
        if(opid == 1&&type == 2  &&data == 0){
            alert("事务提交成功！");
        }else{
             alert("事务提交失败！");
        } 
        break;
      default:
          alert("error");  
  }
};
function closeDataBase(){
    // 关闭数据库
    uexDataBaseMgr.closeDataBase(dbName,1);
    // 关闭数据库的回调
    uexDataBaseMgr.cbCloseDataBase = closeDataBaseCallBack;
}
function closeDataBaseCallBack(opid,type,data){
    switch(type){
        case cText:
            alert("uex.cText");
            break;
        case cJson:
          alert("uex.cJson");
            break;
        case cInt:
        if(opid == 1 &&type == 2&&data == 0){
            alert("数据库关闭成功！");
        }else{
             alert("数据库关闭失败！");
        }
        break;
      default:
          alert("error");
  }
};