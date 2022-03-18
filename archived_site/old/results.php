<?php include("top.php"); 

if($_GET['resultsid'])
{
	$resultsid=$_GET['resultsid'];
	$results_array=get_item_array("results","id=$resultsid","date","desc","limit 1");
	print"<h1>".$results_array[0][title]."</h1>";
	print"<p class=\"box\">".$results_array[0][summary]."</p>";
	print"<p>";
	if($results_array[0][html])
	{
		print(wordwrap(stripslashes($results_array[0][body])));
	}
	else
	{
		print(wordwrap(nl2br(stripslashes($results_array[0][body]))));
	}
	print("</p><p>Date: ".date("d M y", $results_array[0][date]));
	print"<p><a href=\"results.php\">More results...</a></p>";
}
else
{
	$results_array=get_content_array("results","date","desc");
	print"<h1>Results</h1><table border=0 cellpadding=3 cellspacing=2>";
	foreach($results_array as $arr)
	{
		print"<tr><td><a href=\"results.php?resultsid=".$arr[id]."\">".$arr[title]."</a></td><td>(".date("d M y",$arr[date]).")</td></tr>";
	}
	print"</table>";
}

include("bottom.php");
?>