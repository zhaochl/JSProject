/**
API--调用原生日历控件相关的API
var d ={'year':2014,'hour':15,'day':31,'minite':55,'mouth':6}

dateUtil.getCalendarDateYMD(d)
"2014-06-31"

dateUtil.getCalendarDateHM(d)
"15:55"

dateUtil.getCalendarTimeToTimeStamp(d)
1404201300

//获取当前的时间戳-已经经过标准化
dateUtil.getNowTimeStamp()
1414655216


dateUtil.showAddCalendarTime(d)
"2014/06/31 下午 15:55"

d = 1414655216
1414655216
dateUtil.showCalendarListDateL(d)
"下午 04:57"


d = 1414655216
1414655216
dateUtil.showCalendarListDateL(d)
"下午 04:57"

*/
/*
生日相关的函数
//"312天"-show-right
var dd = new Date("1986-09-09")
undefined
dateUtil.showBirthDayLeft( dd.getTime()/1000 )
//left
dateUtil.showBrithDayDate(1412121600)
"10月1日"

dateUtil.getDateYMDFromTimeStamp(1414655216)
"2014-10-30"
*/

/** 
* 对Date的扩展，将 Date 转化为指定格式的String 
* 月(M)、日(d)、12小时(h)、24小时(H)、分(m)、秒(s)、周(E)、季度(q) 可以用 1-2 个占位符 
* 年(y)可以用 1-4 个占位符，毫秒(S)只能用 1 个占位符(是 1-3 位的数字) 
* eg: 
* (new Date()).pattern("yyyy-MM-dd hh:mm:ss.S") ==> 2006-07-02 08:09:04.423 
* (new Date()).pattern("yyyy-MM-dd E HH:mm:ss") ==> 2009-03-10 二 20:09:04 
* (new Date()).pattern("yyyy-MM-dd EE hh:mm:ss") ==> 2009-03-10 周二 08:09:04 
* (new Date()).pattern("yyyy-MM-dd EEE hh:mm:ss") ==> 2009-03-10 星期二 08:09:04 
* (new Date()).pattern("yyyy-M-d h:m:s.S") ==> 2006-7-2 8:9:4.18 
*/ 
Date.prototype.pattern=function(fmt) { 
	var o = { 
		"M+" : this.getMonth()+1, //月份 
		"d+" : this.getDate(), //日 
		"h+" : this.getHours()%12 == 0 ? 12 : this.getHours()%12, //小时 
		"H+" : this.getHours(), //小时 
		"m+" : this.getMinutes(), //分 
		"s+" : this.getSeconds(), //秒 
		"q+" : Math.floor((this.getMonth()+3)/3), //季度 
		"S" : this.getMilliseconds() //毫秒 
	}; 
	var week = { 
		"0" : "/u65e5", 
		"1" : "/u4e00", 
		"2" : "/u4e8c", 
		"3" : "/u4e09", 
		"4" : "/u56db", 
		"5" : "/u4e94", 
		"6" : "/u516d" 
	}; 
	if(/(y+)/.test(fmt)){ 
		fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length)); 
	} 
	if(/(E+)/.test(fmt)){ 
		fmt=fmt.replace(RegExp.$1, ((RegExp.$1.length>1) ? (RegExp.$1.length>2 ? "/u661f/u671f" : "/u5468") : "")+week[this.getDay()+""]); 
	} 
	for(var k in o){ 
		if(new RegExp("("+ k +")").test(fmt)){ 
		fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length))); 
		} 
	} 
	return fmt; 
};
var dateUtil = {

	//create_time: return Date.now(),
	getNowTimeStamp:function(){
		return this.getTimeStamp(new Date());
	},
	now:function(){
		return Date.now();//new Date().getTime()//new Date().valueOf()
	},
	show:function(timeStamp){
		if(typeof(timeStamp)=="number"){
			return new Date(timeStamp);
		}else{
			return false;
		}
	},
	//date date
	getTimeStamp:function(date){
		return Math.round(date.getTime()/1000);
	},
	show2:function(){
		var timeStamp = 1414650374853;
		var dt = new Date(timeStamp);
		if(typeof(timeStamp)=="number"){
			return dt.pattern("yyyy-MM-dd");
		}else{
			return false;
		}
	},
	formatFix:function (day){
		var dayFix = '';
		if(0<day && day<10){
			dayFix = "0" + day;
		}else{
			dayFix = day;
		}
		return dayFix;

	},
	getStatus:function(hour){
		var status = '';
		if (0 <= hour && hour < 6)
			status = "深夜";
		else if (6 <= hour && hour < 9)
			status = "早晨";
		else if (9 <= hour && hour < 13)
			status = "上午";
		else if (13 <= hour && hour < 18)
			status = "下午";
		else if (18 <= hour && hour <24)
			status = "晚上";
		return status;
		
	},
	showAddCalendarTime:function (date){
		//toLocaleDateString()
		//{'year':2014,'hour':15,'day':31,'minite':55,'mouth':6}
		var year = date.year;
		var month = date.mouth;
		var day = date.day;

		var hour = date.hour;
		var minite = date.minite;

		var dayFix = '';
		var monthFix = '';
		var hourFix = '';
		var miniteFix = '';

		var status ='';
		
		if (0 <= hour && hour < 6)
			status = "深夜";
		else if (6 <= hour && hour < 9)
			status = "早晨";
		else if (9 <= hour && hour < 13)
			status = "上午";
		else if (13 <= hour && hour < 18)
			status = "下午";
		else if (18 <= hour && hour <24)
			status = "晚上";
		var result = '';

		if(0<day && day<10){
			dayFix = "0" + day;
		}else{
			dayFix = day;
		}
		if(0<month && month<10){
			monthFix = "0" + month;
		}else{
			monthFix = month;
		}

		if(0<hour && hour<10){
			hourFix = "0" + hour;
		}else{
			hourFix = hour;
		}

		if(0<minite && minite<10){
			miniteFix = "0" + minite;
		}else{
			miniteFix = minite;
		}
		result = year+'/'+monthFix + '/' + dayFix +' ' + status +' '+ hourFix+':'+miniteFix;
		return result;
	},
	getCalendarTimeToTimeStamp:function (dateObj){
		var _this = this;
		//toLocaleDateString()
		var dateStr = this.showAddCalendarTime(dateObj);//"2014/06/31 下午 15:55"
		var timeArr = dateStr.split(' ');//["2014/06/31", "下午", "15:55"]
		var date = new Date(timeArr[0]+' '+timeArr[2]);//
		var d = new Date(date);
		debugger;
		return _this.getTimeStamp(d);
	},
	getCalendarDateYMD:function(dateObj){
		var _this = this;
		//toLocaleDateString()
		var dateStr = this.showAddCalendarTime(dateObj);//"2014/06/31 下午 15:55"
		var timeArr = dateStr.split(' ');//["2014/06/31", "下午", "15:55"]
		var dateYMD = timeArr[0].replace(/\//g,'-');//2014-06-31
		return dateYMD;
	},
	//1414655216
	getDateYMDFromTimeStamp:function(timeStamp){
		var d = new Date(timeStamp*1000);
		var s = d.toLocaleDateString();

		var dateYMD = s.replace(/\//g,'-');//2014-06-31
		return dateYMD;
	},
	//1414655216
	getTimeHMFromTimeStamp:function(timeStamp){
		var d = new Date(timeStamp*1000);
		var s = d.toLocaleTimeString();//"下午3:46:56"
		var timeStr = s.slice(2,s.length);//"3:46:56"
		var s2 = timeStr.split(':');//["下午3", "46", "56"]
		var timeHM = s2[0]+":"+s2[1];
		return timeHM;	
	},
	//return "2014-10-30"
	getCalendarDateHM:function(dateObj){
		var _this = this;
		//toLocaleDateString()
		var dateStr = this.showAddCalendarTime(dateObj);//"2014/06/31 下午 15:55"
		var timeArr = dateStr.split(' ');//["2014/06/31", "下午", "15:55"]
		//var dateYMD = timeArr[0].replace(/\//g,'-');//2014-06-31
		return timeArr[2];
	},
	//上午 09:30
	//1414655216
	showCalendarListDateL: function (timeStamp){
		var date = new Date(timeStamp*1000);//
		var timesLs = date.toLocaleTimeString();//"下午3:47:47"
		var status =  timesLs.slice(0,2);//下午
		var timestr = timesLs.slice(2,timesLs.length);
		var timeArr = timestr.split(':');//["3", "47", "47"]

		var hour = this.formatFix(timeArr[0]);//
		var minite = this.formatFix(timeArr[1]);//
		var leftstr = status +" " + hour + ":" + minite;
		return leftstr;

	},
	//09/02/2014-x
	//"2014/10/30"
	//1414655216
	showCalendarListDateR: function (timeStamp){
		var date = new Date(timeStamp*1000);//
		var rightStr =  date.toLocaleDateString();
		return rightStr;
		
	},
	//上午 08/21
	////1414655216
	showCommlistDate:function(timeStamp){

		var _this = this;
		var dateObj = new Date(timeStamp*1000);//
		var dateStr = dateObj.toLocaleDateString();
		var timeStr = dateObj.toLocaleTimeString();//"15:46:56 GMT+0800 (中国标准时间)"
		var dateArr = dateStr.split('/');//["2014", "10", "30"]
		var month = dateArr[1];//10
		var day = dateArr[2];//
		var timeArr = timeStr.split(':');//["15", "46", "56 GMT+0800 (中国标准时间)"]
		var hour = timeArr[0];
		//debugger;
		//var status = _this.getStatus(hour);//.getElementsByTagName('')
		var status2 = timeStr = timeStr.slice(0,2);

		return status2+' '+ _this.formatFix(month)+'/'+_this.formatFix(day);
	},
	//input 1412121600 timeStamp
	//return 3月21日
	//dateUtil.showBrithDayDate(1412121600)
	//"10月1日"
	showBrithDayDate:function(timeStamp){
		var date = new Date(timeStamp*1000);//
		var resultStr = ( date.getMonth() + 1 ) + '月' + date.getDate() + '日';

		return resultStr;
	},
	//return 21天
	showBirthDayLeft:function (timeStamp){
		
		var date = new Date(timeStamp*1000);
		var nowdate = new Date();
		date.setFullYear(nowdate.getFullYear());
		if ( nowdate.getTime() - date.getTime() > 0 ) {
			date.setFullYear( nowdate.getFullYear() + 1 );
		}
		leftms = date.getTime() - nowdate.getTime();
		var resultStr = Math.floor( leftms/1000/3600/24 ) + '天';

		return resultStr;
	}



};