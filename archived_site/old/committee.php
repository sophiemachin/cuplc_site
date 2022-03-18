<?php
include("top.php");
//get names of current website administrators
$query="SELECT * FROM members WHERE status='admin' ORDER BY LASTNAME ASC";
$res=mysql_query($query) or die(mysql_error());
?>
<H1>Committee</H1>
<p>To contact the committee, please use the <a href="contact.php">contact page</a>. We do not publish email addresses on this site for spam reasons.
<table border=1 cellpadding=5 cellspacing=0>
 <tr>
  <th align=left valign=top>Captain & President
  </th>
  <td valign=top>Alex Blessing
  </td>
 </tr>
 <tr>
  <th align=left valign=top>Junior Treasurer
  </th>
  <td valign=top>William Blackwell
  </td>
 </tr>
 <tr>
  <th align=left valign=top>Senior Treasurer
  </th>
  <td valign=top>Nigel Spivey
  </td>
 </tr>
 <tr>
  <th align=left valign=top>Secretary
  </th>
  <td valign=top>Louis Cox-Brusseau
  </td>
 </tr>
 </tr>
 <tr>
  <th align=left valign=top>Website - design and development
  </th>
  <td valign=top><p>Alex Broadbent</p><p>Rob Harle</p>
  </td>
 </tr>
 <tr>
  <th align=left valign=top>Website - current administrators
  </th>
  <td valign=top>
<?php
//write names of current website administrators
while($arr=mysql_fetch_array($res))
{
	print"<p>$arr[firstname] $arr[lastname]</p>";
}
?>
  </td>
 </tr>
</table>
<?
include("bottom.php");
?>
