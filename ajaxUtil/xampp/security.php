<? include("langsettings.php"); ?>
<html>
<head>
<meta name="author" content="Kai Oswald Seidler">
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>
&nbsp;<p>
<h1><?=$TEXT['security-head']?></h1>

<?=$TEXT['security-text1']?><p>

<?
	
	$i=0;

	function line($head,$textok,$info,$command)
	{
		global $i,$TEXT;

		system("/opt/lampp/share/lampp/$command check",$status);
		if($i>0)
                {
                        echo "<tr valign=bottom>";
                        echo "<td bgcolor=#ffffff background='img/strichel.gif' colspan=4><img src=img/blank.gif width=1 height=1></td>";
                        echo "</tr>";
                }

		echo "<tr bgcolor=#ffffff valign=middle><td><img src=img/blank.gif width=1 height=20></td><td class=tabval>";
		if($status==0)
			echo $textok;
		else
			echo $head;
		echo "</td>";
		if($status==0){ echo "<td><span class=green>&nbsp;".$TEXT['security-ok']."&nbsp;</span></td>"; }
		else if($status==1) { echo "<td><span class=red>&nbsp;".$TEXT['security-nok']."&nbsp;</span></td>"; }
		else { echo "<td><span class=yellow>&nbsp;".$TEXT['security-noidea']."&nbsp;</span></td>"; }
		echo "<td>&nbsp;</td></tr>";
		if($status)
			echo "<tr bgcolor=#ffffff><td></td><td colspan=1 class=small>$info<br><img src=img/blank.gif width=1 height=10></td><td></td><td></td></tr>";
		$i++;
	}

	echo '<table border=0 cellpadding=0 cellspacing=0>';
        echo "<tr valign=top>";
        echo "<td bgcolor=#fb7922 valign=top><img src=img/blank.gif width=10 height=0></td>";
        echo "<td bgcolor=#fb7922 class=tabhead><img src=img/blank.gif width=250 height=6><br>".$TEXT['security-tab1']."</td>";
        echo "<td bgcolor=#fb7922 class=tabhead><img src=img/blank.gif width=100 height=6><br>".$TEXT['security-tab2']."</td>";
        echo "<td bgcolor=#fb7922 valign=top><br><img src=img/blank.gif width=1 height=10></td>";
        echo "</tr>";

	line($TEXT['security-checkapache-nok'],$TEXT['security-checkapache-ok'],$TEXT['security-checkapache-text'],"checkapache");
	line($TEXT['security-checkmysqlport-nok'],$TEXT['security-checkmysqlport-ok'],$TEXT['security-checkmysqlport-text'],"checkmysqlport");
	line($TEXT['security-checkpmamysqluser-nok'],$TEXT['security-checkpmamysqluser-ok'],$TEXT['security-checkpmamysqluser-text'],"checkpmamysqluser");
	line($TEXT['security-checkmysql-nok'],$TEXT['security-checkmysql-ok'],$TEXT['security-checkmysql-text'],"checkmysql");
	line($TEXT['security-checkftppassword-nok'],$TEXT['security-checkftppassword-ok'],$TEXT['security-checkftppassword-text'],"checkftppassword");

	echo "<tr valign=bottom>";
        echo "<td bgcolor=#fb7922></td>";
        echo "<td bgcolor=#fb7922 colspan=3><img src=img/blank.gif width=1 height=8></td>";
        echo "<td bgcolor=#fb7922></td>";
        echo "</tr>";


	echo "</table>";
	echo "<p>";

?>
<?=$TEXT['security-text2']?><p>

&nbsp;<p>&nbsp;<p>&nbsp;<p>
&nbsp;<p>&nbsp;<p>&nbsp;<p>
</body>
</html>
