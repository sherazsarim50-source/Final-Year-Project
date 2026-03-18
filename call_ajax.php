<?php
include('config/connect.php');
$s1=$_REQUEST["n"];

$sql = mysqli_query($connection, "select * from products where name like '%".$s1."%'");

// $select_query="select * from product where name like '%".$s1."%'";
// $sql=mysql_query($select_query) or die (mysql_error());
$s="";



while($row=mysqli_fetch_array($sql))
{
	$s=$s."
	<a class='link-p-colr' href='single.php?id=".$row['id']."'>
		<div class='live-outer'>
            	<div class='live-im'>
                	<img src='admin/".$row['thumb']."'/>
                </div>
                <div class='live-product-det'>
                	<div class='live-product-name'>
                    	<p>".$row['name']."</p>
                    </div>
                    <div class='live-product-price'>
						<div class='live-product-price-text'><p>Rs.".number_format($row['price'])."</p></div>
                    </div>
                </div>
            </div>
	</a>
	"	;
}
echo $s;
?>