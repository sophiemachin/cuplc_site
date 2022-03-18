<?php
//this returns the path to an image in images/backgrounds with the name of an integer between $minint and $maxint and a file extension .jpg
//it will print as many images as specified by $num, without repeating
//it's used for randomly selecting an image for the right-hand menu
function insert_image($minint,$maxint,$num=1)
{
	$block="<center><br><br>";
	for($i=0;$i<$num;$i++)
	{
		$old_pic=$the_pic;
		while($the_pic==$old_pic)
		{
			$the_pic=rand($minint,$maxint);
		}
		$block.="<img border=0 width=150 src='images/backgrounds/$the_pic.jpg'><br><br>";
	}
	$block.="</center>";
	print $block;
}
?>

  </td>
  <td style="width:150px;" class="CellStyle"><?php insert_image(0,5,2); ?></td>
 </tr>

 <tr class="CellStyle">
  <td colspan="3" style="height:15px"><p><font size=2>Copyright 2005 CUPLC</font></p><p><font size=1>Individuals undertake exercise programs at their own risk - if in doubt, consult a doctor. CUPLC accepts no liability for any incidents arising or connected with any information contained in this site.</font></p></td>
 </tr>
</table>

</body>
</html>