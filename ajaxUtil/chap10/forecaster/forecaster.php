<?php
header('Content-Type: text/xml');

// Parse the XML weather data into a structure
$rawFeed = file_get_contents("http://weather.yahooapis.com/forecastrss?p=" . $_REQUEST["zipCode"]);
$xml = new SimpleXmlElement($rawFeed);

echo "<div>" . $xml->channel->item->description . "</div>";
?> 
