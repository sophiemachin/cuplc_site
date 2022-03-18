<?php include("top.php");

//functions

function search_db($searchstring)
{
	$query="SELECT * FROM articles WHERE title LIKE
	'%".stripslashes($searchstring)."%' OR summary LIKE
	'%".stripslashes($searchstring)."%' OR body LIKE '%".stripslashes($searchstring)."%'";
	$res=mysql_query($query) or die(mysql_error());
	$block=display_search_results($searchstring,$res);
	return $block;
}

function display_search_results($searchstring,$res)
{
	//begin display block;
	$block="<table cellpadding=5 cellspacing=0 border=0>";
	//$counter tracks number of items matching search criteria by counting rows of the display table
	$counter=0;
	//build the display table
	while($arr=mysql_fetch_array($res))
	{
		$block.="<tr><td><a href=\"$PHP_SELF?articlesid=$arr[id]\">$arr[title]</a></td></tr>";
		$counter++;
	}
	$block.="</table>";
	//build final display block
	$block="<p>Search Results for \"".stripslashes($searchstring)."\"</p><p>Your search resulted in $counter hits.</p>$block";
	return $block;
}

//Start page

//search box
print"<form name='search' action='$PHP_SELF' method='post'><input type='text' name='searchstring' size=50 maxlength=50> <input type='submit' value='Search Articles'></form>";

if($_GET['articlesid'])
{
	$articlesid=$_GET['articlesid'];
	$articles_array=get_item_array("articles","id=$articlesid","date","desc","limit 1");
	print"<h1>".$articles_array[0][title]."</h1>";
	print"<p class=\"box\">".$articles_array[0][summary]."</p>";
	print"<p>";
	if($articles_array[0][html])
	{
		print(wordwrap(stripslashes($articles_array[0][body])));	
	}
	else
	{
		print(wordwrap(nl2br(stripslashes($articles_array[0][body]))));
	}
	print("</p><p>Date: ".date("d M y", $articles_array[0][date]));
	print"<p><a href=\"articles.php\">More articles...</a></p>";
}
elseif($searchstring)
{
	print(search_db($searchstring));
}
else
{
	$articles_array=get_content_array("articles","date","desc");
	print"<h1>Training Articles</h1>";
	//list of articles, most recent first
	print"<table border=0 cellpadding=3 cellspacing=2>";
	foreach($articles_array as $arr)
	{
		print"<tr><td><a href=\"articles.php?articlesid=".$arr[id]."\">".$arr[title]."</a></td><td>(".date("d M y",$arr[date]).")</td></tr>";
	}
	print"</table>";
}

include("bottom.php");
?>
