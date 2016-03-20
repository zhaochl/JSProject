var getUrlParamValue = function(name){
	//alert(window.location.search);
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
	var r = window.location.search.substr(1).match(reg);
	if (r != null) {
		return unescape(r[2]);
	}
	return null;
};

//index.html?a=test
var para = getUrlParamValue('a');