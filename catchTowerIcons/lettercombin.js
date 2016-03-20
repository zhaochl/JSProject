
var times=3;
var sum=0;
var letters="abcdefghijklmnopqrstuvwxyz";
//1到4个小写字母的单词组合
for (var i=0;i<times;i++) {
	sum++;
	sum*=26;
}
self.postMessage(new Array("sum",sum));

var count=0;
var digit=1; //字符串位数
var file_ext=""; //扩展名串
var str=new Array(0,0,0,0);
var newdigit=false;
var message=new Array("","");

while(digit<=times) {
	file_ext="";
	for (var i=digit;i>0;i--){
		file_ext+=letters.charAt(str[i-1]);
	}
	
	message[0]=count.toString();
	message[1]=file_ext;
	self.postMessage(message);
	
	str[0]++;
	count++;
	for (var i=0;i<digit-1;i++){
		if (str[i]>=letters.length) {
			str[i]=0;
			if(!newdigit) str[i+1]++;
		}
	}
	if (str[digit-1]>=letters.length) {digit++;newdigit=true;} else{newdigit=false;}
}
self.postMessage("EndOfWorker");
self.close();