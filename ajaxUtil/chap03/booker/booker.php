<?php
header('Content-Type: text/xml');

// Parse the e-book XML data into a structure
$rawBook = file_get_contents("book_" . $_REQUEST['title'] . ".xml");
$xml = new SimpleXmlElement($rawBook);

$chap = $xml->chapters->chapter[intval($_REQUEST['chapIndex'])];
$xmlChapter = '<?xml version="1.0" encoding="utf-8"?>';
$xmlChapter .= '<bookData>';
$xmlChapter .= '<chapNum>' . $chap['num'] . '</chapNum>';
$xmlChapter .= '<chapTitle>' . $chap['title'] . '</chapTitle>';
$xmlChapter .= '<chapText>' . $chap . '</chapText>';
$count = 0;
foreach ($xml->chapters->chapter as $chapter) {
  $count++;
}
$xmlChapter .= '<totalChapters>' . $count . '</totalChapters>';
$xmlChapter .= '</bookData>';

// Generate a book info XML document
echo $xmlChapter;
?> 
