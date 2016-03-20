/**
 * 测试回调函数
 * @param x
 * @param $callback
 */

	function test(x,$callback){
		t(x);
		/*
		//define 1
		if(typeof $callback === "function"){
			t('callback is a function');
			$callback();
			
		}*/
		//define 2
		if (typeof (eval($callback)) == "function") {
			eval($callback)();
		}
		$callback = null;
		//效果一样
	}
	test(1);//1 1		不带callback的函數也可以執行 /
	test(1,function(){
		alert(1);//alert 1
	});
	t('test array callback');
	arr = [1,2,3];
	for(var a in arr){
		test(a,function(){
			alert(a);
		});
	}
