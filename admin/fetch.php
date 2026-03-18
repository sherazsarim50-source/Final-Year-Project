<?php
//fetch.php
require_once '../config/connect.php';
ini_set( "display_errors", 0); 
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connection, $_POST["query"]);
 $query = "
 SELECT * FROM orders 
 WHERE id LIKE '%".$search."%'

 OR paymentmode LIKE '%".$search."%' 

  
 ";
}
else
{
 $query = "
 SELECT * FROM orders ORDER BY id DESC
 ";
}
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
  <table class="table table-striped">
				<thead>
					<tr>
						<th>Order Id</th>
						<th>Total Price</th>
						<th>Order Status</th>
						<th>Payment Mode</th>
						<th>Order Placed On</th>
						<th>Operations</th>
					</tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>  
    <th>'.$row["id"].'</th>
    <td>'.$row["totalprice"].'</td>
    <td>'.$row["orderstatus"].'</td>
    <td>'.$row["paymentmode"].'</td>
    <td>'.$row["timestamp"].'</td>
    <td><a href="order-process.php?id='.$row["id"].'">Process Order</a></td> 
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>