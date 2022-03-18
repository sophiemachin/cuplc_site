<?php

include("top.php");

$news_array=get_content_array("news","date","desc","limit 1");

print"<p>Welcome to the official site of the Cambridge University Powerlifting Club.</p><h4>Recent news:</h4><h1>".$news_array[0][title]."</h1>";
print"<center><table class=\"Inset\" cellpadding=\"8\"><tr><td>".$news_array[0][summary]."</td></tr></table></center>";

print"<p>";

print(wordwrap(nl2br(stripslashes($news_array[0][body])),50));

print("</p><p>Date: ".date("d M y", $news_array[0][date]));
print"<p><a href=\"news.php\">More news...</a></p>";
print"<p>CUPLC recommends <a href=\"http://www.headstartmassage.com/website/index.php\"><font color=red>Head Start Massage</font></a> and <a href=\"http://myphysiocambridge.com/blog1/\"><font color=red>Performance Physiotherapy Service</font></a></p>";

include("bottom.php");

?>
