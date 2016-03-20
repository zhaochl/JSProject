<? include("langsettings.php"); ?>
<html>
<head>
<meta name="author" content="Kai Oswald Seidler">
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>

&nbsp;<p>
<h1><?=$TEXT['flash-head']?></h1>

<? 
	$text=$_REQUEST['text'];
	if($text=="")$text = "ceci n est pas un ami d apache"; 
?>
	
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=4,0,0,0" 
  width=520 height=320>
<PARAM name="Movie" value="mingswf.php?text=<?=urlencode($text)?>">
<PARAM name="loop" value="true">
<EMBED src="mingswf.php?text=<?=urlencode($text)?>" width=520 height=320
  pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" LOOP=TRUE>
</EMBED>
</OBJECT>

<p class=small>
<?=$TEXT['flash-text1']?>
<p>

<form name=ff action=ming.php method=get>
<input type=text name=text value="<?=$text?>" size=30> <input type=submit value="<?=$TEXT['flash-ok']?>">
</form>
<? $file="mingswf.php";include("showcode.php"); ?>

</body>
</html>
