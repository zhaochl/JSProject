// JScript source code
//something的值是1、2、3...
switch (something) {
    case 1:
        todoA();
        break;
    case 2:
        todoB();
        break;
    case 3:
        todoC();
        break;
    //... 
}

//JScript source code
//something的值是1、2、3...
var cases = {
  1: todoA,
  2: todoB,
  3: todoC
};
if (cases[something]) {
  cases[something]();
}