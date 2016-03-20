<?
	include("langsettings.php");
?>
<html>
<head>
<meta name="author" content="Kai Oswald Seidler">
<link href="xampp.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="xampp.js">
</script>
</head>

<body leftmargin=0 topmargin=0 class=n>
<table border=0 cellpadding=0 cellspacing=0>
<tr valign=top>
<td align=right class=navi>
<img src=img/blank.gif width=145 height=15><br>
<span class=nh><?=$TEXT['navi-xampp']?></span><br>
</td></tr>
<tr><td bgcolor=#fb7922 colspan=1 background="img/strichel.gif" class=white><img src=img/blank.gif width=1 height=1></td></tr>
<tr valign=top><td align=right class=navi>
<a name=start id=start class=nh target=content onClick="h(this);" href=start.php><?=$TEXT['navi-welcome']?></a><br>
<a class=n target=content onClick="h(this);" href=status.php><?=$TEXT['navi-status']?></a><br>
<a class=n target=content onClick="h(this);" href=security.php><?=$TEXT['navi-security']?></a><br>
<a class=n target=content onClick="h(this);" href=manuals.php><?=$TEXT['navi-doc']?></a><br>
<a class=n target=content onClick="h(this);" href=components.php><?=$TEXT['navi-components']?></a><br>&nbsp;<br>

<span class=nh><?=$TEXT['navi-demos']?></span><br>
</td></tr>
<tr><td bgcolor=#fb7922 colspan=1 background="img/strichel.gif" class=white><img src=img/blank.gif width=1 height=1></td></tr>
<tr valign=top><td align=right class=navi>

<a class=n target=content onClick="h(this);" href=cds.php><?=$TEXT['navi-cdcol']?></a><br>
<a class=n target=content onClick="h(this);" href=biorhythm.php><?=$TEXT['navi-bio']?></a><br>
<a class=n target=content onClick="h(this);" href=guestbook-<?=file_get_contents("lang.tmp")?>.pl><?=$TEXT['navi-guest']?></a><br>
<a class=n target=content onClick="h(this);" href=iart.php><?=$TEXT['navi-iart']?></a><br>
<a class=n target=content onClick="h(this);" href=ming.php><?=$TEXT['navi-iart2']?></a><br>
<a class=n target=content onClick="h(this);" href=phpinfo.php>phpinfo()</a><br>
<a class=n target=content onClick="h(this);" href=phonebook.php><?=$TEXT['navi-phonebook']?></a><br>&nbsp;<br>

<span class=nh><?=$TEXT['navi-tools']?></span><br>
</td></tr>
<tr><td bgcolor=#fb7922 colspan=1 background="img/strichel.gif" class=white><img src=img/blank.gif width=1 height=1></td></tr>
<tr valign=top><td align=right class=navi>

<a class=n target=_blank onClick="h(this);" href=/phpmyadmin/><?=$TEXT['navi-phpmyadmin']?></a><br>
<a class=n target=content onClick="h(this);" href=/phpsqliteadmin/><?=$TEXT['navi-phpsqliteadmin']?></a><br>
<a class=n target=content onClick="h(this);" href=webalizer.php><?=$TEXT['navi-webalizer']?></a><br>&nbsp;<br>

<p class=navi>&copy;2002-2006<br>
<? if(file_get_contents("lang.tmp")=="de") { ?>
<a target=content href="http://www.apachefriends.org/de/"><img border=0 src="img/apachefriends.gif"></a><p>
<? } else { ?>
<a target=content href="http://www.apachefriends.org/en/"><img border=0 src="img/apachefriends.gif"></a><p>
<? } ?>
</td>
</tr>
</table>
</body>
</html>

