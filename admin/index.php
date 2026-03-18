<?php
	session_start();
	require_once '../config/connect.php';
	if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		header('location: login.php');
  }
  


  $title = "Admin - Orders";

  
?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>
<script src="lib/jquery/jquery.min.js"></script>
	<section id="content">
	<div class="content-blog">
		<div class="container">
		<div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result">
			
				</tbody>
			</table>
			</div>
		</div>
	</div>

</section>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

<?php include 'inc/footer.php' ?>
