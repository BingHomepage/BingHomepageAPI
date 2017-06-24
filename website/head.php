<!--
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
-->
<html>
<head>
	<title>Bing Homepage</title>
	<meta charset="utf-8">
	<?php 
		$themecode = "#" . substr(uniqid(rand()), -6);
		echo '<meta name="theme-color" content="'. $themecode . '" />';
		echo '<!--http://www.muzzammil.xyz/git/randomTheme/-->';
		$lang = $_GET["lang"];
	?>
	<link rel="stylesheet" type="text/css" href="main.php">
	<link rel="stylesheet" type="text/css" href=<?php echo "//cdn.muzzammil.xyz/OctoCSS/octo.css?" . rand(); ?>>
</head>
<body>
	<a href="http://github.com/muhammadmuzzammil1998/BingHomepageAPI" target="_blank"><github class="octo-right"><img src="//cdn.muzzammil.xyz/OctoCSS/github.svg"></github></a>
	<div id="black"></div>