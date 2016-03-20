>(/[a-z]*$/).test("a");
>true

"a".match(/[a-z]*$/);
["a"]

+ and *
n*b
符合的为
b nb nnb
n+b
符合
nb,nnb 但是b不符合

(/[a-z]*$/).test("A"); //匹配*,任意都符合
true
(/[a-z]*$/).test("a");
true
(/[a-z]+$/).test("a");//匹配+，至少含有一个小写字母
true
(/[a-z]+$/).test("A");
false

(/^varchar\(\d+\) DEFAULT NULL$/).test("varchar(50) DEFAULT NULL");
true
(/^varchar\([0-9]+\) DEFAULT NULL$/).test("varchar(50) DEFAULT NULL");
true
(/^varchar\(\d*\) DEFAULT NULL$/).test("varchar(50) DEFAULT NULL");
true

换行标示
var a = '123=sdas=asdf'

a.replace(/=/g,'pp')
"123ppsdasppasdf"

var a = '&lt;br/&gt;';
a.replace(/&lt\;br\/&gt\;/g,'</br>')
"</br>"
