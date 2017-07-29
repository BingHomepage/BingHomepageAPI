<?php include("head.php"); ?>
	<div class="main">
		<center>
			<h1 id="title">Bing Homepage API</h1>
			<?php if(!isset($lang)) { ?>
			<h2>Select your language to get started:</h2>
			<br><br><br>	
			<a class="btn" href="?lang=php">php</a>
			<a class="btn" href="?lang=csharp">C#</a>
			<a class="btn" href="?lang=golang">Go</a>
			<a class="btn" href="?lang=api">Raw API</a>
			<br><br><br><br>
			<a class="btn" href="about.php">About</a>
			<a class="btn" href="CSdocumentation.php">C# Documentation</a>
			<a class="btn" href="GOdocumentation.php">Go Documentation</a>
			<?php } else if(isset($lang)) { if($lang == "php"){ ?>
			<h1>Using with php</h1>
			<br>
			<div id="lang">php</div>
			<div class="code">
				<span id="keyword">&lt?php</span><br>
				<tab></tab>
				<span id="var">$cc</span>=<span id="quote">"US"</span>; 
				<span id="comment">//Your contry code</span><br>
				<tab></tab>
				<span id="var">$bing</span>=<span id="func">simplexml_load_file</span>(<span id="quote">"http://cdn.muzzammil.xyz/bing/bing.php?format=xml&cc=</span><span id="var">$cc</span>"</span>);<br>
				<tab></tab>
				<span id="var">$bingHP</span>=<span id="var">$bing</span>-&gt<span id="keyword">url</span>; <span id="comment">//$bingHP now contains the url of image.</span><br>
				<tab></tab>
				<span id="var">$bingCopyright</span>=<span id="var">$bing</span>-&gt<span id="keyword">copyright</span>; <span id="comment">//Don't forget the copyright!</span><br>
				<tab></tab>
				<span id="var">$bingCopyrightLink</span>=<span id="var">$bing</span>-&gt<span id="keyword">copyrightlink</span>;<br>
				<span id="keyword">?&gt</span><br>
			</div>
			<br><br>
			<a class="btn" href="?lang=csharp">See code for C#</a>
			<a class="btn" href="?lang=golang">See code for Go</a>
			<a class="btn" href="?lang=api">See Raw API</a>
			<?php } else if($lang == "csharp"){ ?>
			<h1>Using with C#</h1>
			<br><br>
			<h1>
				<a id="doc" href="CSdocumentation.php">Visit BingHomepageAPI Documentation for details on functions.</a>
			</h1>
			<div>
				<p>
					Step 1: Download the package.<br>
					Step 2: Unzip the package.<br>
					Step 3: Add a reference to the dll.<br>
					Step 4: Add <span class="inline" id="keyword">using namespace</span> <span class="inline" id="var">BingHomepageAPI;</span> in usings.<br>
					Step 5: Use.
				</p>
			</div>
			<br><br>
			<a class="btn" href="BingHomepageAPI-1.0.0.1-CS.zip">Download BingHomepageAPI (latest) for C#.</a><br>
			<br><br>
			<a class="btn" href="?lang=php">See code for php</a>
			<a class="btn" href="?lang=golang">See code for Go</a>
			<a class="btn" href="?lang=api">See Raw API</a>
			<?php } else if($lang == "golang") { ?>
			<h1>Using with Go</h1>
			<br><br>
			<h1>
				<a id="doc" href="GOdocumentation.php">Visit BingHomepageAPI Documentation for details on functions.</a>
			</h1>
			<div>
				<p>
					Step 1: Download or copy function from GitHub or the documentation.<br>
					Step 2: Add the function to your Go code.<br>
					Step 3: Add required imports.<br>
					Step 4: Use.<br>
					<div id="lang">Go</div>
					<div class="code">
						<span id="keyword">imports</span> ( <br>
						<tab></tab><span id="quote">"io/ioutil"</span><br>
						<tab></tab><span id="quote">"net/http"</span><br>
						<tab></tab><span id="quote">"strings"</span><br>
						)
					</div>
				</p>
			</div>
			<br><br>
			<a class="btn" href="?lang=php">See code for php</a>
			<a class="btn" href="?lang=csharp">See code for C#</a>
			<a class="btn" href="?lang=api">See Raw API</a>
			<?php } else if($lang == "api") { ?>
			<h1>If you want to add a language, please contribute on our GitHub page.</h1>
			<h1>Raw API link</h1>
			<div id="lang">XML</div>
			<div class="code">
				<span id="quote">http://cdn.muzzammil.xyz/bing/bing.php?format=xml&cc=US</span><br>
				<span id="comment">//Use your Country Code (cc=YourCC)</span>
			</div>
			<br><br>
			<div id="lang">JSON</div>
			<div class="code">
				<span id="quote">http://cdn.muzzammil.xyz/bing/bing.php?format=json&cc=US</span><br>
				<span id="comment">//Use your Country Code (cc=YourCC)</span>
			</div>
			<br><br>
			<br><br>
			<div id="lang">Plain Text</div>
			<div class="code">
				<span id="quote">http://cdn.muzzammil.xyz/bing/bing.php?format=text&cc=US</span><br>
				<span id="comment">//Use your Country Code (cc=YourCC)</span>
			</div>
			<br><br>
			<a class="btn" href="?lang=csharp">See code for C#</a>
			<a class="btn" href="?lang=php">See code for php</a>			
			<a class="btn" href="?lang=golang">See code for Go</a>
			<?php } } ?>
		</center>
	</div>
</body>
</html>
