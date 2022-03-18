<?php
include("top.php");
//get members data

//march 2010 - have disabled "publicise" and "delinquent" boxes as they are unnecessary and not working properly

$query="SELECT * FROM members ORDER BY lastname ASC";
$res=mysql_query($query) or die(mysql_error());
?>
<H1>Current Members</H1>
<p>Below is a list of current members.</p>
<p>All those listed below have received full induction into the use of the Powerlifting Room and Equipment, and are full members of the Powerlifting Club.</p>
<p><a href="lifts.php">See members' lifts</a></p>
<table border="0" cellpadding="5" cellspacing="0">
<?php
//loop through members
while($arr=mysql_fetch_array($res))
{
	//write title firstname lastname
	print"<tr><td>$arr[title] $arr[firstname] $arr[lastname]</td>
		<td><a href='lifts.php?member_id=$arr[id]'>See $arr[firstname]'s lifts</a></td></tr>";
}
?>
</table>
<p><a href="lifts.php">See members' lifts</a></p>
<?
include("bottom.php");
?>
