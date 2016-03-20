$tag_json =stripslashes(htmlspecialchars_decode($_POST['tag_json']));

$("#form1").submit(function(){
	var f = $(this);
	var j = {};
	$(".oak-tag-added").each(function(i){
		var tname = 'tag'+i;
		j[tname] = $(this).text();
	});
	//alert(j);
	var h = $("<input>")
			.attr({
				"type" : "hidden",
				"name" : "tag_json",
				"value" : JSON.stringify(j)
				
			})
			.appendTo(f);
	//alert(j);//Object {0: "ss", 1: "ee"}
	//alert(JSON.stringify(j));//JSON.stringify(j) "{"0":"ss","1":"ee"}"
	//$tag_json_obj = json_decode($tag_json,TRUE);
	
	//echo $tag_json_obj;
	//var_dump($tag_json_obj);//﻿Arrayarray(4) { ["tag0"]=> string(6) "硕士" ["tag1"]=> string(2) "ee" ["tag2"]=> string(2) "rr" ["tag3"]=> string(6) "推塔" }
});

json2.js提供了json的序列化和反序列化方法，可以将一个json对象转换成json字符串，也可以将一个json字符串转换成一个json对象。

 

在页面中添加json2.js的引用。
<script type="text/javascript" src="/CoreResource/JS/json2.min.js"></script>
 

序列化方法
var jsonObj = { id: '01', name: 'Tom' };
JSON.stringify(jsonObj);
 

反序列化方法
var jsonString = "{ id: '01', name: 'Tom' }";
JSON.parse(jsonString);


var s = "{&quot;json_return_fee&quot;:[{&quot;start&quot;:&quot;100&quot;,&quot;end&quot;:&quot;more&quot;,&quot;return&quot;:&quot;0.082&quot;,&quot;fee&quot;:&quot;0.008&quot;}]}"

var a =json.replace(/&quot;/g,'\'')
	undefined
	a
	"{'json_return_fee':[{'start':'100','end':'more','return':'0.082','fee':'0.008'}]}"
	json.parse(a)
	Uncaught TypeError: undefined is not a function 

var a =json.replace(/&quot;/g,'\"')
undefined
a
"{"json_return_fee":[{"start":"100","end":"more","return":"0.082","fee":"0.008"}]}"
JSON.parse(a)
Object {json_return_fee: Array[1]}
