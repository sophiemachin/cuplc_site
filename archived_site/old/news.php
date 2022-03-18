<?php include("top.php");

if($_GET['newsid'])
{
	$newsid=$_GET['newsid'];
	$news_array=get_item_array("news","id=$newsid","date","desc","limit 1");
	print"<h1>".$news_array[0][title]."</h1>";
	print"<p class=\"box\">".$news_array[0][summary]."</p>";
	print"<p>";
	if($news_array[0][html])
	{
		print(wordwrap(stripslashes($news_array[0][body])));	
	}
	else
	{
		print(wordwrap(nl2br(stripslashes($news_array[0][body]))));
	}
	print("</p><p>Date: ".date("d M y", $news_array[0][date]));
	print"<p><a href=\"news.php\">More news...</a></p>";
}
else
{
	$news_array=get_content_array("news","date","desc");
	print"<h1>News</h1><table border=0 cellpadding=3 cellspacing=2>";
	foreach($news_array as $arr)
	{
		print"<tr><td><a href=\"news.php?newsid=".$arr[id]."\">".$arr[title]."</a></td><td>(".date("d M y",$arr[date]).")</td></tr>";
	}
	print"</table>";
}

include("bottom.php");
?>
