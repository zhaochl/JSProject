function $import(path, type) {
	var i, base, src = "include.js", // html中已经加载的js文件，为的是取得base路径
	scripts = document.getElementsByTagName("script");
	for (i = 0; i < scripts.length; i++) { // 遍历html中已经加载的js，取得整个应用加载js的base路径
		if (scripts[i].src.match(src)) {
			base = scripts[i].src.replace(src, "");
			break;
		}
	}

	if (type == "css") {
		document.write("<" + "link href=\"" + base + path
				+ "\" rel=\"stylesheet\" type=\"text/css\"></" + "link>");
	} else {
		document.write("<" + "script src=\"" + base + path + "\"></"
				+ "script>");
	}
}
$import('include2.css', 'css');
$import('include2.js', 'js');

document.write("<script type=\"text/javascript\" src=\"js/include_T.js\"></script>");
//document.write("<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>");
//<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();