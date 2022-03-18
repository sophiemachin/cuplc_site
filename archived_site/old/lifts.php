<?php
include("top.php");

$lift_explanation="<p>Lifts have been accomplished according to IPF regulations. Lifts are entered at the discretion of the club committee, not by the individual lifter, and the committee will only enter records which they are satisfied are reasonably accurate. However not all were accomplished in competition conditions. For lifts under competition conditions, with qualified judges, see the <a href='results.php'>Results Pages</a>.</p>
	<p>Note that the Total column is for the highest total achieved on a single date, and is not necessarily the same as the three independent lifts added up.</p>
	<p>Members' lifts are only listed here if they have given their consent.</p>";

if($_GET['member_id'])
{
	$member_id=$_GET['member_id'];
	//if a member is selected, get data
	//conditions: publicise has a value (box was checked) and delinquent doesn't (box wasn't checked)
	$query="SELECT * FROM members where id=$member_id and publicise!='' and delinquent='' limit 1";
	$res=mysql_query($query) or die(mysql_error());
	$arr=mysql_fetch_array($res);

	$block="<h1>$arr[firstname] $arr[lastname]'s Lifts</h1>";
	$block.=$lift_explanation;

	$block.="<h2>Squat</h2>
		<p>$arr[squat]kg at a bodyweight of $arr[squat_bdw]kg on ".date("d M Y",$arr[squat_date])."</p>";
	$block.="<h2>Bench</h2>
		<p>$arr[bench]kg at a bodyweight of $arr[bench_bdw]kg on ".date("d M Y",$arr[bench_date])."</p>";
	$block.="<h2>Deadlift</h2>
		<p>$arr[deadlift]kg at a bodyweight of $arr[deadlift_bdw]kg on ".date("d M Y",$arr[deadlift_date])."</p>";
	$block.="<h2>Total</h2>
		<p>$arr[total]kg at a bodyweight of $arr[total_bdw]kg on ".date("d M Y",$arr[total_date])."</p>";

	$block.="<p>[ <a href='$PHP_SELF?x'>See all members' lifts</a> ]</p>";
}
else
{
	if(!$_GET['order_by']){$order_by="lastname ASC";}
	elseif($_GET['order_by']=="lastname"){$order_by.=" ASC";}
	else{$order_by=$_GET['order_by']; $order_by.=" DESC";}

	if(!$order_by){$order_by="lastname ASC";}

	$block="<h1>All Members' Lifts</h1>";

	//if no member selected, get all members' data
	//conditions: publicise has a value (box was checked) and delinquent doesn't (box wasn't checked)
	$query="SELECT * FROM members where publicise!='' and delinquent='' ORDER BY $order_by";
	$res=mysql_query($query) or die(mysql_error());

	$block.=$lift_explanation;

	$block.="<p align='center'><b>Order by...</b><br />[ <a href='$PHP_SELF?order_by=squat'>Squat</a> | <a href='$PHP_SELF?order_by=bench'>Bench</a> | <a href='$PHP_SELF?order_by=deadlift'>Deadlift</a> | <a href='$PHP_SELF?order_by=total'>Total</a> | <a href='$PHP_SELF?x'>Surname</a> ]";

	$block.="<table border='0' cellpadding='5' cellspacing='0'>
		<tr><th>Name</th><th colspan='3'>Squat</th><th colspan='3'>Bench</th><th colspan='3'>Deadlift</th><th colspan='3'>Total</th></tr>
		<tr><td><br /></td><td>Lift (kg)</td><td>BDW (kg)</td><td>Date</td><td>Lift (kg)</td><td>BDW (kg)</td><td>Date</td><td>Lift (kg)</td><td>BDW (kg)</td><td>Date</td><td>Lift (kg)</td><td>BDW (kg)</td><td>Date</td></tr>";
		
	while($arr=mysql_fetch_array($res))
	{
		//write title firstname lastname
		$block.="<tr><td><a href='$PHP_SELF?member_id=$arr[id]'>$arr[title] $arr[firstname] $arr[lastname]</a></td>
			<td align='right'>$arr[squat]</td><td align='right'>$arr[squat_bdw]</td><td align='right'>".date("d/m/y",$arr[squat_date])."</td><td align='right'>$arr[bench]</td><td align='right'>$arr[bench_bdw]</td><td align='right'>".date("d/m/y",$arr[bench_date])."</td><td align='right'>$arr[deadlift]</td><td align='right'>$arr[deadlift_bdw]</td><td align='right'>".date("d/m/y",$arr[deadlift_date])."</td><td align='right'>$arr[total]</td><td align='right'>$arr[total_bdw]</td><td align='right'>".date("d/m/y",$arr[total_date])."</td></tr>";
	}
	$block.="</table>";

}
print$block;

include("bottom.php");
?>