/*
 * Licensed under MIT License by (c) Muhammad Muzzammil 2017 (http://muzzammil.xyz/)
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this 
 * software and associated documentation files (the "Software"), to deal in the Software 
 * without restriction, including without limitation the rights to use, copy, modify, 
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to 
 * permit persons to whom the Software is furnished to do so, subject to the following 
 * conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all copies 
 * or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR 
 * PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE 
 * FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR 
 * OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER 
 * DEALINGS IN THE SOFTWARE.
 */
<?php
	$fname = "files/" . uniqid() . ".xml"; //Don't you worry about the mess.
	file_put_contents($fname, '<?xml version="1.0" encoding="UTF-8"?><image><url></url><copyright></copyright><copyrightlink></copyrightlink></image>');
	$xml = simplexml_load_file("http://www.bing.com/HPImageArchive.aspx?format=xml&idx=0&n=1&mkt=en-" . $_GET['cc']) or die("Error: Cannot locate xml resource, please see muzzammil.xyz/git/bing.");
	$copyright = $xml->image[0]->copyright;
	$copyrightlink = $xml->image[0]->copyrightlink;
	$image = "https://bing.com" . $xml->image[0]->url;
	$image = substr($image, 0, -12);
	$image .= "1920x1080.jpg";
	if($_GET["format"] == "xml"){
		header('Content-type: text/xml');
		$xml = simplexml_load_file($fname);
		$xml->url = $image;
		$xml->copyright = $copyright;
		$xml->copyrightlink = $copyrightlink;
		$xml->asXML($fname);
		readfile($fname);
	} else if($_GET['format'] == "text"){
		header('Content-type: text/plain');
		echo "url>$image\ncopyright>$copyright\ncopyrightlink>$copyrightlink";
	} else if($_GET['format'] == "json") {
		header('Content-type: application/json');
		$json = '{ "url":"' . $image . '", "copyright":"' . $copyright . '", "copyrightlink":"' . $copyrightlink . '" }';
		echo $json;
	} else die("Invalid Format.");
?>
