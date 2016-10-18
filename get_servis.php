<?php
	
	#servis racuna obim i povrsinu kruga za prosledjeni parametar r (poluprecnik)
	
	header("Content-type: text/xml");	
	$r = floatval($_GET["r"]);
	
	$test_niz = array(
		($r*$r*pi()) => 'povrsina',
		(2*$r*pi()) => 'obim'
	);
	$xml = new SimpleXMLElement('<root/>');
	array_walk_recursive($test_niz, array($xml, 'addChild'));
	print $xml->asXML();
	
?>