<?php

    $dom = new DOMDocument('1.0', 'iso-8859-1');

    $root = $dom->createElement('cds');
    $dom->appendChild($root);

    mysql_connect("localhost","root","");
    mysql_select_db("cdcol");

    $result=mysql_query("SELECT id,titel,interpret,jahr FROM cds ORDER BY interpret;");
    
    while( $row=mysql_fetch_array($result) )
    {
	    $cd = $dom->createElement('cd');
	    $cd->setAttribute('id', $row['id']);

	    $titel = $dom->createElement('titel');
	    $titel->appendChild($dom->createTextNode($row['titel']));
	    $cd->appendChild($titel);

	    $interpret = $dom->createElement('interpret');
	    $interpret->appendChild($dom->createTextNode($row['interpret']));
	    $cd->appendChild($interpret);

	    $jahr = $dom->createElement('jahr');
	    $jahr->appendChild($dom->createTextNode($row['jahr']));
	    $cd->appendChild($jahr);

	    $root->appendChild($cd);
    }

    header("Content-Type: text/xml;");
    print $dom->saveXML();
?>
