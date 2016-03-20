/**
 * １测试函数名大小写
 * @param a
 */
function D(a){
	alert(a);
}
function d(a){
	alert(a+1);
}
//D(1) -> 1
//d(1) -> 2
//××
//利用argument变量，来定义无参参数-函数
a = function(){x=arguments[0];y=arguments[1];return x+y;}
function (){x=arguments[0];y=arguments[1];return x+y;}
//a(1,2);
//3
//
/**
 * 函数定义与类定义
 */
(1)
var sum=new function(a,b)//匿名类
{
    alert(a+b);
}
sum('a','b');//NAN

new function使用系统内置函数对象来构建一个函数
var sum=new function(a,b)  相当于：

function  匿名类();
var sum=new  匿名类(a,b);

当你执行new的时候就已经从Function创建了一个实例，而a , b 不存在 ，
所以输出 a+b 按照数学运算 空值相加得到 NaN

(2)
var sum=function(a,b)
{
alert(a+b);
}
sum('a','b');
第二段：var sum=function(a,b) 相当于：function sum(a,b)
所以可以输出：ab;
