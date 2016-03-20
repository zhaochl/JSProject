function t(content) {
	console.log(content)
}
function a(content){
	alert(content);
}
//以assert() 和assertEqual() 函数来展示变量的值或者函数调用的结果
//add by zcl@2014.9.12
var assert = function(value, msg) {
	if (!value )
	throw(msg || (value + " does not equal true"));
};
/*

assertEqual(1,1,'asas');
undefined
assertEqual(1,2,'asas');
"asas"
assertEqual(1,2);
"1 does not equal 2"

*/
var assertEqual = function(val1, val2, msg) {
	if (val1 !== val2)
	throw(msg || (val1 + " does not equal " + val2));
};