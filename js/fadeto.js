//$(selector).fadeTo(speed,opacity,callback)
//fadeTo() 方法将被选元素的不透明度逐渐地改变为指定的值
function BackLogin() {
	$(".index-wrapper").fadeTo( 0 , 0 );
	$.scrollTo(0);
	$(".index-wrapper").fadeTo( 1000 , 1 );
}