<?php
include('config.php');
$s1=$_REQUEST["n"];

$sql = mysqli_query($database, "select * from product where name like '%".$s1."%'");

// $select_query="select * from product where name like '%".$s1."%'";
// $sql=mysql_query($select_query) or die (mysql_error());
$s="";



while($row=mysqli_fetch_array($sql))
{
	$s=$s."
	<a class='link-p-colr' href='view.php?product=".$row['id']."'>
		<div class='live-outer'>
<table>

	<tr>
						<th scope='row'> echo $r['id'];</th>
						<td><?php echo $r['firstname']. " " . $r['lastname'];</td>
						<td><?php echo $r['totalprice'];</td>
					
					</tr>















	"	;
}
echo $s;
?>