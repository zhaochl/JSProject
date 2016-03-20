var person = { 
name: "张三", 
age: 26, 
gender: "男", 
eat: function( stuff ) { 
	alert( "我在吃" + stuff ); 
	} 
}; 
person.height = 176; 
delete person[ "age" ];
 
//定义一个类-类似于接口
function P(){
	this.vo = {'id':1,'name':'zcl-init-ini'};
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

P.prototype.setNameCB = function($name,$callback){
	t('setCB');
	t(this);//{test: function, name: "", getName: function, setName: function, setNameCB: function…}
	t($name);
	t(5);
	this.name = $name
	if(typeof $callback === "function"){
		t('callback is a function');
		$data = "123";
		$callback($data);
		
	}
}
t(1);
p1 =  new P();
p1.name = "p1x";
p1_name = p1.getName();

p2 =  new P();
p2.setName("p2x");
p2_name = p2.getName();

p3 = new P();
me = 'zcl';
t(2);
p3.setNameCB(me,function($data){
	t(3);
	t('callback run');
	t('data:'+$data);
	
});
p3_name = p3.getName();

t(4);
t(p1_name);//p1x
t(p2_name);//p2x
t('p3_name:'+p3_name);//zcl
t(6);

P.prototype.setVo = function($voName,$voVal){
	P.prototype.$voName = $voVal;
}

P.prototype.data = {
		
		find:function(data,$callback){
			t(this);//Object {find: function, select: function}
			t('find:'+data);
			if(typeof $callback === "function"){
				t('find callback is a function');
				vo = {'id':1,'name':'zcl'};
				//P.prototype.vo = vo;//测试利用在回调函数中，利用原型,动态添加(非初始化)类成员变量传递参数，并且可以修改该成员
									//如果有初始化的话,就不能利用prototype修改其初始值
				//P.setVo('vo',vo);
				$callback(vo);
				
			}
		},
		select:function(data){
			t('select:'+data);
		}
};

p3 = new P();
p3.data.find(1,function(data){
	t('find callback run');
	t(this);//Window {top: Window, window: Window, location: Location, external: Object, chrome: Object…}
	t(data);//Object {id: 1, name: "zcl"}
});//find:1
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

//测试-利用原型链修改-成员-函数原型
P.prototype.test = function(a){
	t('new test:'+a);
}
P.prototype.test1 = function(a){
	t('new test1:'+a);
}
p3.test(12);//12 说明原型链没有修改成功,说明原型链可以动态添加，但是不能动态修改
p3.test1(12);//new test1:12 
P.prototype.test1 = function(a){
	t('new-new test1:'+a);
}
p3.test1(12);//new-new test1:12 //说明动态添加的函数可以重写，但是初始化的函数不能重写
//测试 End

var emitter = {
		callbacks:[],
		register:function(obj) {
			this.callbacks.push(obj);
		},
		onOpen:function(){
			//foreach(var obj in this.callbacks){
			//debugger;
			this.callbacks.forEach(function(obj){
				if('onOpen' in obj) {
					obj.onOpen();//由于调用了方法，this引用的对象将会与预期结果相同
				}
			});
		}
};
//事件侦听类
function MyClass(msg){
	this.msg = msg;
	//必须有onOpen方法的实现(与emitter内的onOpen in Object相应)
	this.onOpen = function(){
		t(this.msg+' is called');
	}
}

var obj1 = new MyClass('listener1');
var obj2 = new MyClass('listener2');
emitter.register(obj1);
emitter.register(obj2);
emitter.onOpen();

