//*****************构造类
//1构造类-对象构造
var data = {
	'name':'z',
	'tel':'123'
};
var obj = _(data);

console.log(obj.value().name);//z
//构造类数组
//underscore系统类库函数
var arr = [15,26,37];
var obj2 = _(arr);
console.log('max:'+obj2.max());//37

//*******************集合类*********************collection***
//each迭代输出
_.each([1,2,3,4,5,6],function(n){
	console.log(n);
})
var obj = {'a':'1','b':'2','c':'3'};
_.each(obj,function(v,k,obj){
	return console.log(k+':'+v);
});
//each遍历数组后返回一个arr数组对象
var arr =_.map([1,2,3,4,5,6],function(n){
	
})
//************查找函数
var arr = [1,2,4,6];
var result = _.find(arr,function(n){
	return (!(n%2==0));
});//1

var result = _.filter(arr,function(n){
	return (!(n%2==0));
});//1
 
//***************最值
var max = _.max([60,70,80]);//80
var min = _.min([60,70,90]);//60

var stu = [{name:'a','score':20},{name:'b','score':30},{name:'c','score':40}]
var min_stu = _.min(stu,function(){
	return n.score;
});//获得最小的学生姓名
//最小分数值的姓名为 min_stu.name
//***************排序
var stu = [{name:'a','score':20},{name:'b','score':30},{name:'c','score':40}]
var stu_sort = _.sortBy(stu,function(n){
	return n.score;//按照分数排序
});
for(var p in stu_sort){
	console.log('name'+stu_sort[p].name+':score='+stu_sort[p].score);
}
//****************分组函数
var stu_group = _.groupBy(stu,function(n){
	return n.score>30;
});//obj[c]

//***************数组*********************
var stu = [{name:'a','score':20},{name:'b','score':30},{name:'c','score':40}]
//**************first last
var fisrt2Stus = _.first(stu,2);//[{a}{b}]
var last2Stus = _.last(stu,2);//[{b}{c}]
//*************indexOf lastIndexOf
var stu = ['a','b','c']
_var pos = _.indexOf(stu,'c');//2
var lastPost = _.lastIndexOf(stu,'c');//1

//************排除函数-合并函数
var stu = ['a','b','c','c']
var res = _.without(stu,'c','a');//['b']
var res = _.union(['a','b'],['b','c']);//[a,b,b,c]
//******************函数***************************//
//_.delay() 延迟触发函数
var fun = function(v){
	console.log('您输入的为v');
}
_.delay(fun,1000,'underscore');//
//_.once() 执行一次函数
var fun  = function(){
	//
}
var init = _once(fun);

//_wrap(fun,function(){fun});//将fun作为参数传入function中
var input =function(a){
	//...
	alert(a);
}
var res = _.wrap(input,function(input){
	return 'hi:'+input;
});//
//compose() 返回组合函数结果
var A =function(a1){return a1+1;}
var B = function(b1){return b1+1;}
var D = _.compose(A,B);//执行A(B())

//********************对象*************************
//属性转换为数组函数
var obj = {a:'1','b':'2'};
var arrKey = _.keys(obj);//[a,b]
var arrVal = _.values(obj);//[1,2]
//***************属性挑选为数组
var obj = {a:'1','b':'2','c':'3'};
//_pick 选出列
var obj2 = _.pick(obj,'a','c');//{a:'1','c':'3'}
//_.omit排除列
var obj3 = _.omit(obj,'a','c');//{b:'2'}
//_defaults 设置默认值
var info = {}
info = _.defaults(info,{'a':1,'b':'2'});
//has 检测json格式的对象中是否存在某个属性的值
var obj = {a:'1','b':'2','c':'3'};
var hasResult = _.has(obj,'a');//true
//********************功能函数*************************
//_.random(min,max)
_.random(1,10);
//
_.escape(string);
_.unescape(string);
//********************模板函数*********************
1<%%>
var str = 'hhh';
_.template('<%console.log(str)%>',str);
2<%=%> 输出变量
var tpl = _.template('<%=str%>');
var obj = {str:'xxx'}
console.log(tpl(obj))
console.log(tpl({str:'xx'}))
3<%-%>
输出变量，并将html代码转出字符形式
