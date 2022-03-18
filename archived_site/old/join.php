<?php

include("top.php");
$block="<h1>Join CUPLC</h1>";

if($_POST['message'])
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$whole_message="THIS IS A MESSAGE FROM THE JOIN PAGE ON THE CUPLC WEBSITE.\nNAME: $name\nEMAIL: $email\nMESSAGE:\n$message";
	if(mail("soc-cuplc-committee@lists.cam.ac.uk","'$name' is interested in joining CUPLC", $whole_message, "From: $email"))
	{
		$block.="<p>Many thanks for your interest!</p><p>Your message has been sent. We will try to respond as soon as possible.</p><p>Thank you.</p><p><a href=\"index.php\">Continue...</a></p>";
	}
	else
	{
		$block.="<p><font color=red>Sorry, there was a technical error sending your message.</font></p><p>Please go back and try again.</p>";
	}
}
else
{
	$block.="
<p>Membership of CUPLC is open to any member of the University and costs just £30 per year. (You do NOT have to join Fenners Fitness Suite in order to join the Powerlifting Club.)</p>
<p>The price is a bargain, since it includes:</p>
<ul><li>unlimited access to the powerlifting room (subject to opening times);</li>
<li>exclusive use of the powerlifting room Monday to Friday 5 - 8pm;</li>
<li>access to competition-standard weights, bars and other equipment;</li>
<li>the opportunity to train with keen and experienced lifters;</li>
<li>free training advice and programs if you want them.</li>
</ul>
<p>The Club is friendly and encouraging, and welcomes interest from anyone regardless of previous experience.</p>
<p>If you are interested in joining and would like to find out more, please enter your details below! We would be delighted to hear from you.</p>
<form action=\"$PHP_SELF\" method=\"post\">
<table border=0 cellpadding=5 cellspacing=5>
<tr><td>Name:</td><td><input type=text name=\"name\" maxlength=50 size=20></td></tr>
<tr><td>Email:</td><td><input type=text name=\"email\" maxlength=50 size=20></td></tr>
<tr><td>Message:</td><td><textarea wrap=virtual name=\"message\" cols=20 rows=10></textarea></td></tr>
<tr><td colspan=2 align=center><input type=submit value=\"Send Message\"></td></tr>
</table>
	";
}
print($block);

include("bottom.php");

?>
