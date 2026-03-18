<?php
include_once('../../config/connect.php');
$del_id = $_POST['del_id'];
//
$sql_del="DELETE FROM `usersmeta` WHERE `id`=$del_id";
$result_del=mysqli_query($connection, $sql_del);
if($result_del)
{
	echo true;
}
?>