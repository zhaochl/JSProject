<?php

define("DEFAULT_PAGE", 1);
define("DEFAULT_PAGESIZE", 25);
define("TOTAL", 55);

$page = DEFAULT_PAGE;
$pagesize = DEFAULT_PAGESIZE;

if (empty($_REQUEST['page']) || !isset($_REQUEST['page']) || $_REQUEST['page']=='' || $_REQUEST['page']==null) {
	$page = DEFAULT_PAGE;
} else {
	$page = $_REQUEST['page'];
}

if (empty($_REQUEST['pagesize']) || !isset($_REQUEST['pagesize']) || $_REQUEST['pagesize']=='' || $_REQUEST['pagesize']==null) {
	$pagesize = DEFAULT_PAGESIZE;
} else {
	$pagesize = $_REQUEST['pagesize'];
}

$result = '{"list":[';

$offset = ($page - 1) * $pagesize;
$pagetotal = $page * $pagesize;

date_default_timezone_set('Etc/GMT-8');
$time = date("Y-m-d H:i:s");

for ($i = 1 + $offset; $i <= $pagetotal && $i <= TOTAL; $i++) { 
	if ($i != 1 + $offset) {
		$result .= ',';
	}
	$result .= '{"id":'.$i;
	$result .= ',"name":"item'.$i.'"';
	$result .= ',"time":"'.$time.'"';
	$result .= '}';
}

$result .= ']}';

sleep(1);

echo $result;
?>