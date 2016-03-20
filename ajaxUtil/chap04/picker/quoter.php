<?php
header('Content-Type: text/xml');

// Load the XML stock quote data from the server
$xml = html_entity_decode(file_get_contents(
  "http://www.webservicex.net/stockquote.asmx/GetQuote?symbol=" . $_REQUEST['symbol']));

// Return the XML stock quote data
echo $xml;
?> 
