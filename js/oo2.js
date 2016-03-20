

function B(){
	this.name = 'b';//初始化的name 不可以利用prototype修改其值
}

b1 =  new B();
b1.name = 'b1';//获取B类 默认name值-success-v
t('b1.name:');
t(b1.name);//b1
B.prototype.name = 'bb';//通过修改prototype修改name 值-fail-x
t('b1.name2:');
t(b1.name);//b1

B.prototype.age = '12';//通过建立prototype，建立age成员-success-v
//b1.age = '12';
t('b1.age1:');
t(b1.age);//12

B.prototype.age = '13';//通过修改prototype,修改age成员-success-x
//b1.age = '13';
t('b1.age2:');
t(b1.age);//13