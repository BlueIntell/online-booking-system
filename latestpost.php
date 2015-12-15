<?php
//Here is the simple example of latest post & latest user of your phpbb3 board.  
function latestpost() {
echo "<li><a target='_blank' href='http://www.i-tech-system.com/forum/viewtopic.php?f=18&amp;t=49'><strong>This is Amaad</strong></a><br /><small>Posted by Administrator at 01.01.70</small></li><li><a target='_blank' href='http://www.i-tech-system.com/forum/viewtopic.php?f=18&amp;t=41'><strong>Test, just a test</strong></a><br /><small>Posted by aliangshisb63452 at 08.01.09</small></li><li><a target='_blank' href='http://www.i-tech-system.com/forum/viewtopic.php?f=11&amp;t=45'><strong>Moderator Sharfuz Zaman</strong></a><br /><small>Posted by sharfuz at 11.12.08</small></li><li><a target='_blank' href='http://www.i-tech-system.com/forum/viewtopic.php?f=18&amp;t=46'><strong>New member</strong></a><br /><small>Posted by ppdj at 01.12.08</small></li><li><a target='_blank' href='http://www.i-tech-system.com/forum/viewtopic.php?f=18&amp;t=47'><strong>I am Rabbane</strong></a><br /><small>Posted by Administrator at 30.11.08</small></li>\n";
}
function latestuser() {
<div id="content">
	<h2>About ME!</h2>
	<h3>Personal Information</h3>
    <h2>Kowshar Ahmed</h2>
	<h3>CEO & Chief programmer of iTech System</h3>
    <p>Date of Birth: 12 June 1983</p>
    <p>Nationality: Bangladeshi</p>
	<br />
	<h2>Technical Skills and Experiences</h2>
	<p>PHP</p>
		<p>Visual Basic 6.0</p>
	<p>VB.Net (Basic & C#)</p>
	)</p>
	<br />
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>

/*
Original code for latest post & users
include("data_db.php");
		$link = mysql_connect("localhost", $userdataname, $userdatapass);
		if (!$link)
		{
// Exit, if can not connect to the database		
		die('Not connected : ' . mysql_error());
		}
// Select<div id="content">
	<h2>About ME!</h2>
	<h3>Personal Information</h3>
    <h2>Kowshar Ahmed</h2>
	<h3>CEO & Chief programmer of iTech System</h3>
    <p>Date of Birth: 12 June 1983</p>
    <p>Nationality: Bangladeshi</p>
	<br />
	<h2>Technical Skills and Experiences</h2>
	<p>PHP</p>
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
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
		}
function latestpost() {
// Connect to the database
// starting the module output		
// Load the last topics
		$latest_topics = "SELECT * FROM phpbb_topics WHERE topic_approved = '1' ORDER BY topic_last_post_time DESC LIMIT 0,5";
		$topics = mysql_query($latest_topics);
		while($row = mysql_fetch_array($topics))
		{
		$date1 = date("d.m.y", $topic_last_post_time);
		extract($row);
		//echo $topic_title;
		echo "<li><a target='_blank' href='http://www.i-tech-system.com/forum/viewtopic.php?f=".$forum_id."&amp;t=".$topic_id."'><strong>".$topic_title."</strong></a><br /><small>Posted by ".$topic_last_poster_name." at ".$date1."</small></li>";
		}	
}
function latestuser() {
$result = "SELECT * FROM phpbb_users ORDER BY user_regdate DESC LIMIT 0, 5";
$hresult=mysql_query($result);
while($row = mysql_fetch_array($hresult))
	{
    $date2 =  date("D M d, Y",$user_regdate);
	extract($row);
	echo "<li><a target='_blank' href='http://www.i-tech-system.com/forum/memberlist.php?mode=viewprofile&amp;u=".$user_id."'><strong>".$username."</strong></a><br /><small>Joined ".$date2."</small></li>";
}
}
*/
?>