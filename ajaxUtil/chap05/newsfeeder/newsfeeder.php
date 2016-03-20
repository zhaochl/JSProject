<?php
header('Content-type: text/xml;');

// Return the RSS feed data
echo file_get_contents($_REQUEST['rssurl']);
?>
