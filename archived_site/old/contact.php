<?php

include("top.php");
$block="<h1>Contact CUPLC</h1>";

if($_POST['message'])
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$whole_message="THIS IS A MESSAGE FROM THE CONTACT PAGE ON THE CUPLC WEBSITE.\nNAME: $name\nEMAIL: $email\nMESSAGE:\n$message";
	if(mail("soc-cuplc-committee@lists.cam.ac.uk","Message from CUPLC website", $whole_message, "From: $email \r\n"))
	{
		$block.="<p>Your message has been sent. We will try to respond as soon as possible.</p><p>Thank you.</p><p><a href=\"index.php\">Continue...</a></p>";
	}
	else
	{
		$block.="<p><font color=red>Sorry, there was a technical error sending your message.</font></p><p>Please go back and try again.</p>";
	}
}
else
{
	$block.="
If you have any queries, please don't hesitate to get in touch by filling in the form below.
<p>
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
