<?php
include_once('../../config/connect.php');
//
$edit_id = $_POST['edit_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$mobile = $_POST['mobile'];
//
$condition=true;
//
$sql_user_name_check="SELECT * FROM `usersmeta` WHERE `mobile`='$mobile' AND NOT id=$edit_id";
$result_user_name_check=mysqli_query($connection, $sql_user_name_check);
if(mysqli_num_rows($result_user_name_check)>0)
{
	echo "Mobile Number Already Exist. ";
	$condition=false;
}

if($condition==true)
{
	$sql_update="UPDATE `usersmeta` SET `firstname`='$firstname',`lastname`='$lastname',`address1`='$address1',`address2`='$address2', `city`='$city',`state`='$state' ,`zip`='$zip' WHERE `id`=$edit_id";
	$result_update=mysqli_query($connection, $sql_update);
	if($result_update)
	{
		echo "Updated";
	}
}
?>