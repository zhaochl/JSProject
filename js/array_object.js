
var to=new Object({"id":"123","home":"256","temp","240"});
var to2 =new Object();//等于 var to = []; 


var ta = new Array();
var ta2 = new Array(["Apple","Pear","Orange"]);


for(var s in obj){
	alert(obj[s]);
}
	 
对象-纯js
<script>
var obj = {"player_id":"GS001","event_id":"1","destroy":"97%"};
var props = "";
for(var p in obj){
    if(typeof(obj[p])=="function"){
          obj[p]();
    }else{
          props+= p + "=" + obj[p] + " ";
       }
}
alert(props);
</script>
//==========================================
对象-JQuery
$(function(){  
    var tbody = "";      
 //------------遍历对象 .each的使用-------------  
   //对象语法JSON数据格式(当服务器端回调回来的对象数据格式是json数据格式，必须保证JSON的格式要求，回调的对象必须使用eval函数进行转化（否则将得不到Object）。本文不作详细介绍服务器端回调的数据问题，我们将直接自定义对象)  
 var obj =[{"name":"admin","password":"123456"}];  
 $("#result").html("------------遍历对象 .each的使用-------------");  
   alert(obj);//是个object元素  
 //下面使用each进行遍历  
 $.each(obj,function(n,value) {   
        alert(n+' '+value);  
        var trs = "";  
          trs += "<tr><td>" + value.name +"</td> <td>" + value.password +"</td></tr>";  
          tbody += trs;         
        });  

      $("#project").append(tbody);  
    
}); 
//==========================================
3.遍历List集合
$(function(){  
	   var tbody = "";  
	   //------------遍历数组 .each的使用-------------  
	   var anArray = ['one','two','three'];  
	   $("#result").html("------------遍历数组 .each的使用-------------");  
	         $.each(anArray,function(n,value) {  
	           alert(n+' '+value);  
	           var trs = "";  
	           trs += "<tr><td>" +value+"</td></tr>";  
	           tbody += trs;  
	         });  
	        $("#project").append(tbody);  
	     
	});  
