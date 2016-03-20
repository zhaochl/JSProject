var js = document.getElementsByTagName("script");
for (var i = 0; i < js.length; i++) {
    if (js[i].src.indexOf("include_a.js") >= 0) {
        var arraytemp = new Array();
        arraytemp = js[i].src.split('?');
        arraytemp = arraytemp[1].split('=');
        alert(arraytemp[0] + "=" + arraytemp[1]);
        if(arraytemp[0]=='value' && arraytemp[1]=='2' ){
        	alert('get param success');
        }
    }
}