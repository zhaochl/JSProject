/*

jsonp不能post!

1. jsonp的请求都为get

2. jsonp相当于loadJS, 返回的"数据"直接以js执行

*/

function checkauth(){
	$.ajax({
		async : false,
		//url : 'http://localhost/html5/ajaxServer.php&callback=?', // 本地不执行,必须是跨域URL
		url : 'http://tb.caifuqiao.cn/index.php?m=user&a=t3&callback=?', // 跨域URL
		type : 'GET',
		dataType : 'jsonp',
		jsonp : 'jsoncallback', // 默认callback 
		data : {from:'www'}, // 请求数据 
		timeout : 5000,
		success : function(json) { // 客户端jquery预先定义好的callback函数，成功获取跨域服务器上的json数据后，会动态执行这个callback函数
			//alert(json);
			//console.log(json);
			rendar(json);
		},
		error : function(xhr) {
			// jsonp 方式此方法不被触发
			// 请求出错处理 
			alert("请求出错(请检查相关度网络状况.)");
		}
	});
}


public function auth(){
	
	$userid = cookie(C('LOGIN_COOKIE_USERID'));
	$time = cookie(C('LOGIN_TIME_NAME'));
	$encry_str = cookie(C('LOGIN_COOKIE_NAME'));
	$code = C('LOGIN_CODE');
	$username='';
	if ($time &&$encry_str) {
		$username = loginDecrypt($time, $encry_str, $code);
	}else{
		$username = session('username');
		
	}
	
	$result_yes = array('userid'=>$userid,'CFQUUNM'=>$encry_str,'username'=>$username,'isLogin'=>true,'loginTime'=>time);
	$result_json_yes = json_encode($result_yes,true);
	
	$result_no = array('userid'=>$userid,'CFQUUNM'=>$encry_str,'username'=>$username,'isLogin'=>false,'loginTime'=>time);
	$result_json_no = json_encode($result_no,true);
	
	$cb=$_GET['callback'];
	if($cb){
		if($username!=''){
			$time = session('logintime');
			$username = session('username');
			$code = C('LOGIN_CODE');
			generateLoginCookie($time,$username,$code);
			echo($cb."(".$result_json_yes.")");
		}else{
			echo($cb."(".$result_json_no.")");
		}
		
		
	} else {
		if($username!=''){
			$time = session('logintime');
			$username = session('username');
			$code = C('LOGIN_CODE');
			generateLoginCookie($time,$username,$code);
			$this->ajaxReturn($result_json_yes,'successs',1);
		}else{
			$this->ajaxReturn($result_json_no,'fail',0);
		}
	}
	
	
}


$.ajax({url:'http://tb.caifuqiao.cn/index.php?m=user&a=t3&callback=?',type : 'GET',data:{username:'zcl',password:'zcl'},dataType:'jsonp',jsonp : 'jsoncallback',function(result){console.log(result);} });

//
$.get('http://tb.caifuqiao.cn/index.php?m=user&a=loginApp&callback=?',{username:'zcl',password:'zcl',dataType:'jsonp',jsonp : 'jsoncallback'},function(result){console.log(result);});



$.ajax({
	async : false,
	//url : 'http://localhost/html5/ajaxServer.php&callback=?', // 本地不执行,必须是跨域URL
	url : 'http://tb.caifuqiao.cn/index.php?m=user&a=loginApp&callback=?', // 跨域URL
	type : 'GET',
	dataType : 'jsonp',
	jsonp : 'jsoncallback', // 默认callback 
	data : {username:'zcl',password:'zcl'}, // 请求数据 
	timeout : 5000,
	success : function(json) { // 客户端jquery预先定义好的callback函数，成功获取跨域服务器上的json数据后，会动态执行这个callback函数
		//alert(json);
		console.log(json);
		//rendar(json);
	},
	error : function(xhr) {
		// jsonp 方式此方法不被触发
		// 请求出错处理 
		alert("请求出错(请检查相关度网络状况.)");
	}
});




//定义编码
header( 'Content-Type:text/html;charset=utf-8 ');

//Atom
header('Content-type: application/atom+xml');

//CSS
header('Content-type: text/css');

//Javascript
header('Content-type: text/javascript');

//JPEG Image
header('Content-type: image/jpeg');

//JSON
header('Content-type: application/json');

//PDF
header('Content-type: application/pdf');

//RSS
header('Content-Type: application/rss+xml; charset=ISO-8859-1');

//Text (Plain)
header('Content-type: text/plain');

//XML
header('Content-type: text/xml');

// ok
header('HTTP/1.1 200 OK');

//设置一个404头:
header('HTTP/1.1 404 Not Found');

//设置地址被永久的重定向
header('HTTP/1.1 301 Moved Permanently');

//转到一个新地址
header('Location: http://www.example.org/');

//文件延迟转向:
header('Refresh: 10; url=http://www.example.org/');
print 'You will be redirected in 10 seconds';

//当然，也可以使用html语法实现
// <meta http-equiv="refresh" content="10;http://www.example.org/ />

// override X-Powered-By: PHP:
header('X-Powered-By: PHP/4.4.0');
header('X-Powered-By: Brain/0.6b');

//文档语言
header('Content-language: en');

//告诉浏览器最后一次修改时间
$time = time() - 60; // or filemtime($fn), etc
header('Last-Modified: '.gmdate('D, d M Y H:i:s', $time).' GMT');

//告诉浏览器文档内容没有发生改变
header('HTTP/1.1 304 Not Modified');

//设置内容长度
header('Content-Length: 1234');

//设置为一个下载类型
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="example.zip"');
header('Content-Transfer-Encoding: binary');
// load the file to send:
readfile('example.zip');

// 对当前文档禁用缓存
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Pragma: no-cache');

//设置内容类型:
header('Content-Type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=utf-8');
header('Content-Type: text/plain'); //纯文本格式
header('Content-Type: image/jpeg'); //JPG***
header('Content-Type: application/zip'); // ZIP文件
header('Content-Type: application/pdf'); // PDF文件
header('Content-Type: audio/mpeg'); // 音频文件
header('Content-Type: application/x-shockw**e-flash'); //Flash动画

//显示登陆对话框
header('HTTP/1.1 401 Unauthorized');
header('WWW-Authenticate: Basic realm="Top Secret"');
print 'Text that will be displayed if the user hits cancel or ';
print 'enters wrong login data';