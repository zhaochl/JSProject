var obj = (
function(){
	return{
		sum:
			function(a,b){
				return a+b;
				}
		}
	}
);

obj()['sum'](1,2)=3;
obj().sum(1,2);