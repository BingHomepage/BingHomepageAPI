<?php include("head.php"); ?>
	<div id="docmain">
		<h1>Documentation for BingHomepageAPI V1.0</h1>
		<h1>Targeted Framework: .NET 4.5</h1>
		<h1>Namespace: BingHomepageAPI</h1>
		<h1>Class name: BingHomepage</h1>
		<h1>Constructor:</h1>
		<div id="lang">C#</div>
		<div class="code">
			<span id="comment">Initializes a new instance of the BingHomepageAPI.</span><br>
			<span id="comment">Parameter->CountryCode: Country Code for which you want the image. Default: US.</span><br>
			<span id="keyword">public </span><span id="func">BingHomepage</span>() { ... }<br>
			<span id="keyword">public </span><span id="func">BingHomepage</span>(<span id="keyword">String</span> <span id="var">CountryCode</span>) { ... }<br>
		</div>
		<h1>Functions:</h1>
		<div id="lang">C#</div>
		<div class="code">
			<span id="comment">Downloads, stores, and returns the current Homepage Image.</span><br>
			<span id="comment">Parameter->path: Path to where the Image should be downloaded.</span><br>
			<span id="comment">Returns: Returns the downloaded image data.</span><br>
			<span id="keyword">public Image</span> <span id="func">GetImage</span>(<span id="keyword">String</span> <span id="var">path</span>) { ... }<br>
		</div>
		<h1>Properties:</h1>
		<div id="lang">C#</div>
		<div class="code">
			<span id="comment">Gets the image's URL on bing's server.</span><br>
			<span id="keyword">public string</span> <span id="func">GetImageUrl</span> { <span id="keyword">get;</span> }<br>
			<span id="comment">Gets the Copyright information of the image.</span><br>
			<span id="keyword">public string</span> <span id="func">GetCopyright</span> { <span id="keyword">get;</span> }<br>
			<span id="comment">Gets the Copyright Link of the image.</span><br>
			<span id="keyword">public string</span> <span id="func">GetCopyrightLink</span> { <span id="keyword">get;</span> }
		</div>
		<br><br><br>
		<h1>Example:</h1>
		<h1>There is a Windows Form with a <span class="inline" id="keyword">PictureBox</span> control convenienty named <span class="inline" id="var">pictureBox1</span>, what we want to do is that get the current Bing Homepage Image and set it as <span class="inline" id="var">pictureBox1</span>'s image.<br>
		Objectives:
		<ol>
			<li>Show image in picture box on initialization.</li>
			<li>Set the form title to the copyright information of the image.</li>
		</ol>
		First of all download the latest BingHomepageAPI and add it as a reference to your project from solution explorer.
		<br>
		Let's do it with BingHomepageAPI: </h1>
		<div id="lang">C#</div>
		<div class="code">
			<span id="keyword">using</span> System.Windows.Forms;<br>
			<span id="keyword">using</span> BingHomepageAPI;<br>
			<span id="keyword">namespace</span> Test {<br>
			<tab></tab><span id="keyword">public partial class</span> <span id="func">Form1</span> : <span id="func">Form1</span> {<br>
			<tab></tab><tab></tab><span id="keyword">public</span> <span id="func">Form1</span>() {<br>
			<tab></tab><tab></tab><tab></tab><span id="func">InitializeComponent</span>();<br>
			<tab></tab><tab></tab><tab></tab><span id="keyword">BingHomepage</span> <span id="var">bing</span> = <span id="keyword">new</span> <span id="keyword">BingHomepage</span>();<br>
			<tab></tab><tab></tab><tab></tab><span id="var">pictureBox1</span>.<span id="keyword">Image</span> = <span id="var">bing</span>.<span id="func">GetImage(</span><span id="quote">"temp.jpg"</span>);<br>
			<tab></tab><tab></tab><tab></tab><span id="var">this</span>.<span id="keyword">Text</span> = <span id="var">bing</span>.<span id="keyword">GetCopyright</span>;<br>
			<tab></tab><tab></tab>}<br>
			<tab></tab>}<br>
			}<br>
		</div>
		<br><br><br>
		<a href="./" class="btn">Go back</a>
		<br><br><br>
	</div>