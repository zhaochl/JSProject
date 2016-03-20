<html>
<head>
<title>XAMPP webalizer</title>
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>
&nbsp;<p>
<pre>
<?
	system("/opt/lampp/bin/webalizer;sleep 2");
?>
<script>
	document.location="/webalizer/";
</script>
</pre>
</body>
</html>
