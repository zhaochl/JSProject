//定义一个类-类似于接口
function P(){
	//this.vo = {'id':1,'name':'zcl-init-ini'};
	this.test = function(a){//原来test定义
		t(a);
	}
}

//添加成员和 函数
P.prototype.name = "";
P.prototype.getName = function(){
	return this.name;
}
P.prototype.setName = function(name){
	this.name = name;
}
//unuse
P.prototype.setVo2 = function($voName,$voVal){
	t('tt:');
	t($voName);
	t($voVal);
	P.prototype.vo = $voVal;
	t('pp:');
	t(P.prototype.$voVal);
}
P.prototype.setVo = function($voVal){
	P.prototype.vo = $voVal;
}
P.prototype.getVo = function(){
	return this.vo;
}
P.prototype.setVolist = function($volistVal){
	P.prototype.volist = $volistVal;
}
P.prototype.getVolist = function(){
	return P.volist;
}
//unuse
P.prototype.data = {
		
		find:function(data,$callback){
			t(this);//Object {find: function, select: function}
			t('find:'+data);
			if(typeof $callback === "function"){
				t('find callback is a function');
				vo = {'id':1,'name':'zcl'};
				//P.prototype.vo = vo;//测试利用在回调函数中，利用原型,动态添加(非初始化)类成员变量传递参数，并且可以修改该成员
									//如果有初始化的话,就不能利用prototype修改其初始值
				//this.setVo('vo',vo);
				$callback(vo);
				
			}
		},
		select:function(data){
			t('select:'+data);
		}
};

//use
P.prototype.findp = function($data,$callback){
	t(this);//P {test: function}
	t('findp:' + $data);
	if(typeof $callback === "function"){
		t('findp callback is a function');
		t(this);//P {test: function, name: "", getName: function, setName: function, setVo: function…}
				//P {test: function, name: "", getName: function, setName: function, setVo: function…}
		vo = {'id':1,'name':'zcl'};
		//P.prototype.vo = vo;//测试利用在回调函数中，利用原型,动态添加(非初始化)类成员变量传递参数，并且可以修改该成员
							//如果有初始化的话,就不能利用prototype修改其初始值
		t('set Customer Vo');
		this.setVo(vo);
		
		t('set Customer Vo2');
		$callback(vo);
		
	}
}
p3 = new P();
p3.findp(1,function(data){
	t('findp callback run');
	t(this);//Window {top: Window, window: Window, location: Location, external: Object, chrome: Object…}
	t(data);//Object {id: 1, name: "zcl"}
});//find:1

p3 = new P();
p3.findp(1,function(data){
	t('findp callback run2');
	t(this);//Window {top: Window, window: Window, location: Location, external: Object, chrome: Object…}
	t(data);//Object {id: 1, name: "zcl"}
});//find:1
p3vo = p3.vo;
t('11111');
t(p3vo);

p3vo2 = p3.getVo();
t('2222');
t(p3vo2);

/*
p3.data.select(2);//select:2
t(p3);//P {name: "", getName: function, setName: function, setNameCB: function, data: Object…}

vo = p3.vo;
t('vo1:');
t(vo);//Object {id: 1, name: "zcl"} 
	  //Object {id: 1, name: "zcl-init-ini"} 
	  //如果是初始化成员，就不能在回调函数中，利用prototype修改其值,P.prototype.vo = vo;
	  //
p3.vo = {'id':1,'name':'zcl-init'};
vo = p3.vo;
t('vo2:');
t(vo);//Object {id: 1, name: "zcl"}
*/

