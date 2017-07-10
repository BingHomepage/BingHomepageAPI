<?php include("head.php"); ?>
	<div id="docmain">
		<h1>Documentation for BingHomepageAPI V1.0 for GoLang</h1>
		<h1>Function:</h1>
		<div id="lang">Go</div>
		<div class="code">
			<span id="comment">Returns the current Today's image's URL on bing's server, Copyright information of the image and Copyright Link of the image.</span><br>
			<span id="comment">Parameter->countryCode: Country Code for which you want the image.</span><br>
			<span id="keyword">func</span> <span id="func">BingHomepageAPI</span>(<span id="var">countryCode </span><span id="keyword">string</span>) (<span id="keyword">string</span>,<span id="keyword">string</span>,<span id="keyword">string</span>){ ... }
		</div>
		<br><br><br>
		<h1>Example:</h1>
		<h1>Our aim is to get everything that the API provides, i.e. image URL and copyright information.</h1>
		<br>
		<h1>Let's do it with BingHomepageAPI: </h1>
		<div id="lang">Go</div>
		<div class="code">
			<span id="keyword">package</span> main<br>
			<span id="keyword">import</span> (<br>
			<tab></tab><span id="quote">"io/ioutil"</span><br>
			<tab></tab><span id="quote">"fmt"</span><br>
			<tab></tab><span id="quote">"net/http"</span><br>
			<tab></tab><span id="quote">"strings"</span><br>
			)<br>
			<span id="keyword">func</span> <span id="func">main</span>(){<br>
			<tab></tab><span id="var">url</span>, <span id="var">copyright</span>, <span id="var">copyrightLink</span> := <span id="func">BingHomepageAPI</span>(<span id="quote">"US"</span>);<br>
			<tab></tab><span id="keyword">fmt</span>.<span id="func">Println</span>(<span id="var">url</span>)<br>
			<tab></tab><span id="keyword">fmt</span>.<span id="func">Println</span>(<span id="var">copyright</span>)<br>
			<tab></tab><span id="keyword">fmt</span>.<span id="func">Println</span>(<span id="var">copyrightLink</span>)<br>
			}<br>
			<span id="keyword">func</span> <span id="func">BingHomepageAPI</span>(<span id="var">countryCode </span><span id="keyword">string</span>) (<span id="keyword">string</span>,<span id="keyword">string</span>,<span id="keyword">string</span>) { <br>
			<tab></tab><span id="var">api</span> := <span id="quote">"http://cdn.muzzammil.xyz/bing/bing.php?format=text&cc="</span> + <span id="var">countryCode</span><br>
			<tab></tab><span id="var">resp</span>, <span id="var">err</span> := <span id="keyword">http</span>.<span id="func">Get</span>(<span id="var">api</span>)<br>
			<tab></tab><span id="keyword">defer</span> <span id="var">resp</span>.<span id="keyword">Body</span>.<span id="func">Close</span>()<br>
			<tab></tab><span id="var">bingData</span>, <span id="var">err</span> := <span id="var">ioutil</span>.<span id="func">ReadAll</span>(<span id="var">resp</span>.<span id="keyword">Body</span>)<br>
			<tab></tab><span id="keyword">if</span> <span id="var">err</span> != <span id="keyword">nil</span> {<br>
			<tab></tab><tab></tab><span id="func">panic</span>(<span id="var">err</span>)<br>
			<tab></tab>}<br>
			<tab></tab><span id="keyword">return</span> <span id="keyword">strings</span>.<span id="func">Split</span>(<span id="keyword">strings</span>.<span id="func">Split</span>(<span id="func">string</span>(<span id="var">bingData</span>), <span id="quote">"\n"</span>)[<span id="var">0</span>], <span id="quote">">"</span>)[<span id="var">1</span>], <span id="keyword">strings</span>.<span id="func">Split</span>(<span id="keyword">strings</span>.<span id="func">Split</span>(<span id="func">string</span>(<span id="var">bingData</span>), <span id="quote">"\n"</span>)[<span id="var">1</span>], <span id="quote">">"</span>)[<span id="var">1</span>], <span id="keyword">strings</span>.<span id="func">Split</span>(<span id="keyword">strings</span>.<span id="func">Split</span>(<span id="func">string</span>(<span id="var">bingData</span>), <span id="quote">"\n"</span>)[<span id="var">2</span>], <span id="quote">">"</span>)[<span id="var">1</span>]<br>
			}<br>
		</div>
		<br><br><br>
		<a href="./" class="btn">Go back</a><!--Ah... the sweet pun-->
		<a href="./CSdocumentation.php" class="btn">C# Documentation</a>
		<br><br><br>
	</div>