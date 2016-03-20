<?php
// Generate an XML document for the USPS server request
$uspsRequest = "http://testing.shippingapis.com/ShippingAPITest.dll?API=RateV2&";
$uspsRequest .= "XML=<RateV2Request%20USERID=\"" . $_REQUEST["userID"];
$uspsRequest .= "\"%20PASSWORD=\"" . $_REQUEST["password"] . "\">";
$uspsRequest .= "<Package%20ID=\"0\"><Service>" . "All" . "</Service>";
$uspsRequest .= "<ZipOrigination>" . $_REQUEST["origZip"] . "</ZipOrigination>";
$uspsRequest .= "<ZipDestination>" . $_REQUEST["destZip"] . "</ZipDestination>";
$uspsRequest .= "<Pounds>" . $_REQUEST["weightLb"] . "</Pounds>";
$uspsRequest .= "<Ounces>" . $_REQUEST["weightOz"] . "</Ounces>";
$uspsRequest .= "<Container>" . urlencode($_REQUEST["container"]) . "</Container>";
$uspsRequest .= "<Size>" . $_REQUEST["size"] . "</Size>";
$uspsRequest .= "<Machinable>" . "true" . "</Machinable>";
$uspsRequest .= "</Package></RateV2Request>";

// Parse the shipping response data into a structure
$rawShipping = file_get_contents($uspsRequest);
$xml = new SimpleXmlElement($rawShipping);

// Return the rate for the appropriate mail service
$rate = 0;
if ($xml->Package->Postage != null) {
  foreach ($xml->Package->Postage as $postage) {
    if ($postage->MailService == $_REQUEST['mailService']) {
      $rate = $postage->Rate;
      break;
    }
  }
}
echo $rate;
?>
