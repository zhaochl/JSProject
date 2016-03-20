<?php
$filename = "ratings.xml";

// Load the ratings
if (file_exists($filename)) {
  $rawRatings = file_get_contents($filename);
}
else {
  $rawRatings = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>";
  $rawRatings .= "<ratings></ratings>";
}
$xml = new SimpleXmlElement($rawRatings);

// If this is a rating request, just return all the ratings
if ($_REQUEST["id"] == "" || $_REQUEST["rating"] == "") {
  header('Content-Type: text/xml');
  if ($xml->rating != null)
    echo $xml->asXML();
}
// If this is a rating submission, update and write the specified rating
else {
  // See if the rating exists in the XML data, and if so update it
  $ratingExists = false;
  if ($xml->children()) {
    foreach ($xml->rating as $rating) {
      if ($rating->id == $_REQUEST["id"]) {
        $ratingExists = true;
        $rating->avg = strval(((floatval($rating->avg) * floatval($rating->votes)) +
          floatval($_REQUEST["rating"])) / (floatval($rating->votes) + 1.0));
        $rating->votes = strval(intval($rating->votes) + 1);

        // Return the rating info
        echo $rating->avg . ":" . $rating->votes;

        break;
      }
    }
  }

  // If the rating doesn't exist in the XML data, add it as a new child node
  if (!$ratingExists) {
    $rating = $xml->addChild("rating");
    $rating->addChild("id", $_REQUEST["id"]);
    $rating->addChild("avg", $_REQUEST["rating"]);
    $rating->addChild("votes", "1");

    // Return the rating info
    echo $_REQUEST["rating"] . ":" . "1";
  }

  // This is a rating submission so write the rating
  $file = fopen($filename, 'w');
  fwrite($file, $xml->asXML());
  fclose($file);
}
?>
