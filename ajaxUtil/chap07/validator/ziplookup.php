<?php
header('Content-Type: text/xml');

// Load the XML location data from the server
$xml = html_entity_decode(file_get_contents(
  "http://www.webservicex.net/uszip.asmx/GetInfoByZIP?USZip=" . $_REQUEST['zipCode']));

// Return the XML location data
echo $xml;
?> 
