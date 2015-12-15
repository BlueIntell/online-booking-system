<?php
$theirname = $_POST["name"];
$theiremail = $_POST["email"];
$theirsubject=$_POST["subject"];
$message = $_POST["text"];

$headers 
<div id="content">
	<h2>About ME!<
	<p>SQL</p>
	<p>HTML</p>
	<p>CSS</p>
	<p>Visual Basic 6.0</p>
	<p>VB.Net (Basic & C#)</p>
	<p>Graphics Design (Photoshop)</p>
	<br />
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            	<p>Visual Basic 6.0</p>
	<p>VB.Net (Basic & C#)</p>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
$headers.= "Charset=iso-8859-1\r\n";
$headers.= "From: $theiremail";

mail("email@email.com", $theirsubject, $message, $headers);
?>
<html>
<script language="Javascript">

<!--
// please keep these lines on when you copy the source
// made by: Nicolas - http://www.javascript-page.com

alert ("Thank you for your Message!")
//-->

</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=http://www.i-tech-system.com/index.php">
</html>