<?php
function topnavigator() {
echo "  <div id=\"topNavigation\">\n"; 
echo "    <ul class=\"level-0\" id=\"cssmw\">\n"; 
echo "      <li><span><a href=\"index.php\">Home<div id="content">
	<h2>About ME!</h2>
	<h3>Personal Information</h3>
    <h2>Kowshar Ahmed</h2>
	<h3>CEO & Chief programmer of iTech System</h3>
    <p>Date of Birth: 12 June 1983</p>
    <p>Nationality: Bangladeshi</p>
	<br />
	<h2>Technical Skills and Experiences</h2>
	<p>PHP</p>
	<p>Graphics Design (Photoshop)</p>
	<br />
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
echo "	  <li><span><a href=\"about.php\">About Us</a></span></li>\n"; 
echo "      <li><span><a href=\"contact.php\">Contact Us</a></span></li>\n"; 
echo "    </ul>\n"; 
echo "    <script type=\"text/javascript\">if(window.attachEvent) { window.attachEvent(\"onload\", function() { cssmw.intializeMenu('cssmw'); }); } else if(window.addEventListener) { window.addEventListener(\"load\", function() { cssmw.intializeMenu('cssmw0'); }, true); }</script>\n"; 
echo "</div>\n";
}
?>