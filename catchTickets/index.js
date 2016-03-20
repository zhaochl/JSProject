//一直点击查询
var timer = setInterval(function(){$("_a_search_btn1").click();},1000);//

//ticket_240000K60902

//一直搜索
var timer2 = setInterval(function(){if( $("#ticket_240000K60902 .cursor").slice(0,4).text().search(/\d/)!= -1 ) { adom.play(); console.log($("#ticket_490000D33409"));}else{console.log(-1)}   },1000)

//ticket_240000K60902

$("#ticket_240000K60902 .cursor");


var audio = $("<audio></audio>").attr({"src":"http://bridge.caifuqiao.cn/weixin/voice/44-1402399696.mp3","controls":"controls","loop":"false"})

//adom = audio.get(0);//把JQuery对象转为dom对象
//dom->Jquery对象 $('id')

//search是搜索该字符的位置，而不是返回该字符
/*
$("#ticket_240000K60902 .cursor").text()
"----------无无--2无--"
$("#ticket_240000K60902 .cursor").text().search(/\d/);
14
*/