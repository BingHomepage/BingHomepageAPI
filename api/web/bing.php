<?php
	$xml = simplexml_load_file("http://www.bing.com/HPImageArchive.aspx?format=xml&idx=0&n=1&mkt=en-" . $_GET['cc']) or die("Error: Cannot locate xml resource, please see muzzammil.xyz/git/bing.");
	$copyright = $xml->image[0]->copyright;
	$copyrightlink = $xml->image[0]->copyrightlink;
	$image = "https://bing.com" . $xml->image[0]->url;
	if($_GET["format"] == "xml"){
		header('Content-type: text/xml');
		$xml = simplexml_load_file("bing.xml");
		$xml->url = $image;
		$xml->copyright = $copyright;
		$xml->copyrightlink = $copyrightlink;
		$xml->asXML("bing.xml");
		readfile('bing.xml');
	} else if($_GET['format'] == "text"){
		echo "url>$image <br> copyright>$copyright <br> copyrightlink>$copyrightlink";
	} else die("Invalid Format.");
?>
