<? include("langsettings.php"); ?>
<html>
<head>
<meta name="author" content="Kai Oswald Seidler">
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>
&nbsp;<p>

<h1><?=$TEXT['status-head']?></h1>

<?=$TEXT['status-text1']?><p>

<?php
	
	$i=0;

	$up="";

        if($_SERVER['SERVER_PORT']==443)
                $prot="https";
        else
                $prot="http";

	if($_SERVER['PHP_AUTH_USER'])
		$up="{$_SERVER['PHP_AUTH_USER']}:{$_SERVER['PHP_AUTH_PW']}@";
	$path=dirname($_SERVER['PHP_SELF']);
	$b="$prot://$up".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].$path;
	function line($text,$status,$link="")
	{
		global $i,$TEXT;

		if($i>0)
		{
			echo "<tr valign=bottom>";
			echo "<td bgcolor=#ffffff background='img/strichel.gif' colspan=5><img src=img/blank.gif width=1 height=1></td>";
			echo "</tr>";
		}
		echo "<tr bgcolor=#ffffff>";
		echo "<td bgcolor=#ffffff><img src=img/blank.gif width=1 height=20></td>";
		echo "<td class=tabval>";
		echo "$text";
		echo "</td>";
		if(trim($status)=="OK"){ 
			echo "<td><span class=green>&nbsp;".$TEXT['status-ok']."&nbsp;</span></td>";
			echo "<td></td>";
			$i++;
		 }
		else 
		{
			echo "<td><span class=red>&nbsp;".$TEXT['status-nok']."&nbsp;</span></td>";
			if($link=="")
				echo "<td></td>";
			else
				echo "<td><a target=faq href='$link'><span style='font-size: 10pt'>".$TEXT['status-lookfaq']."</span></a></td>";
		}
		echo "<td bgcolor=#ffffff><img src=img/blank.gif width=1 height=1></td>";
		echo "</tr>";
		$i++;
	}


	$a=@file("$b/php.php");
	$php=$a[0];
	$a=@file("$b/mysql.php");
	$mysql=$a[0];
	$a=@file("$b/cgi.cgi");
	$cgi=$a[0];
	$a=@file("$b/ssi.shtml");
	$ssi=$a[0];
	$a=@file("$b/perl.pl");
	$perl=$a[0];

	if(extension_loaded('eAccelerator'))
		$eaccelerator="OK";
	else
		$eaccelerator="NOK";

	if(extension_loaded('oci8'))
		$oci8="OK";
	else
		$oci8="NOK";
	

	echo '<table border=0 cellpadding=0 cellspacing=0>';
	echo "<tr valign=top>";
	echo "<td bgcolor=#fb7922 valign=top><img src=img/blank.gif width=10 height=0></td>";
	echo "<td bgcolor=#fb7922 class=tabhead><img src=img/blank.gif width=250 height=6><br>".$TEXT['status-tab1']."</td>";
	echo "<td bgcolor=#fb7922 class=tabhead><img src=img/blank.gif width=100 height=6><br>".$TEXT['status-tab2']."</td>";
	echo "<td bgcolor=#fb7922 class=tabhead><img src=img/blank.gif width=100 height=6><br>".$TEXT['status-tab3']."</td>";
	echo "<td bgcolor=#fb7922 valign=top><br><img src=img/blank.gif width=1 height=10></td>";
	echo "</tr>";
	line($TEXT['status-mysql'],$mysql);
	line($TEXT['status-php'],$php);
	line($TEXT['status-perl'],$perl);
	line($TEXT['status-cgi'],$cgi);
	line($TEXT['status-ssi'],$ssi);
	line($TEXT['status-mmcache'],$eaccelerator,$TEXT['status-mmcache-url']);
	line($TEXT['status-oci8'],$oci8,$TEXT['status-oci8-url']);

	echo "<tr valign=bottom>";
	echo "<td bgcolor=#fb7922></td>";
	echo "<td bgcolor=#fb7922 colspan=3><img src=img/blank.gif width=1 height=8></td>";
	echo "<td bgcolor=#fb7922></td>";
	echo "</tr>";
	echo "</table>";

	echo "<p>";


?>
<?=$TEXT['status-text2']?><p>
</body>
</html>
