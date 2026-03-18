<?php
require_once 'config/connect.php';
	
$sql = "SELECT * FROM products";
$id = $_GET['id'];
$sql .= " WHERE catid=$id";

 if($id != '1'){
    if($id != '2'){
       if($id != '3'){
           if($id != '4'){
            $title = "Categories - Best Clothing Online Shopping";
            } 
           } } }
              
if($id == '1'){
    $title = "Festive Collection - Best Clothing Online Shopping";
}
if($id == '2'){
    $title = "Winter Collection - Best Clothing Online Shopping";
}
if($id == '3'){
    $title = "Men Collection - Best Clothing Online Shopping";
}
if($id == '4'){
    $title = "Women Collection - Best Clothing Online Shopping";
}





include 'inc/header.php'; 
 include 'inc/nav.php';


 







$min = 1000;
$max = 3500;

if (! empty($_POST['min_price'])) {
    $min = $_POST['min_price'];
}

if (! empty($_POST['max_price'])) {
    $max = $_POST['max_price'];
}

?>
<!-- <!DOCTYPE html>
<html> -->


<link rel="stylesheet"
    href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script type="text/javascript">
  
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 1000,
      max: 3500,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		$( "#min" ).val(ui.values[ 0 ]);
		$( "#max" ).val(ui.values[ 1 ]);
      }
      });
    $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>



<link rel="stylesheet"
    href="css/jquery-ui.css" />

<script src="js/jquery-1.12.4.js"></script>
                    

  	<!-- SHOP CONTENT -->
	<section id="content" style="margin-top: 53px;">
		<div class="">
			<div class="container ">
				<div class="row">

                <?php if(isset($_GET['message'])){
								if($_GET['message'] == 7){
						 ?><div class="alert alert-danger" role="alert"> <?php echo "You need to add something from products into cart"; ?> </div>

						 <?php } }?>

						 <?php if($id != '1'){
							 if($id != '2'){
								if($id != '3'){
									if($id != '4'){
							 ?>	 
					<div class="col-sm-24 col-xs-24" style="margin-bottom: 26px;">
							<div class="groupbanner-text hover-scale">
							<a href="categories.php?id=2"><img src="assets/cards/34.jpg" width="1900"></a></div>
							</div>
							<?php } 
									}
										}
											}?>


						 <?php if($id == '1'){?>
					
							<div class="col-sm-24 col-xs-24" style="margin-bottom: 26px;">
							<div class="groupbanner-text hover-scale">
							<a href="categories.php?id=2"><img src="assets/cards/28.jpg" width="1900"></a></div>
							</div>
		

							<?php } ?>

							<?php if($id == '2'){?>
								<div class="col-sm-24 col-xs-24" style="margin-bottom: 26px;">
							<div class="groupbanner-text hover-scale">
							<a href="categories.php?id=2"><img src="assets/cards/20.webp" width="1900"></a></div>
							</div>
							<?php } ?>


							<?php if($id == '3'){?>
								<div class="col-sm-24 col-xs-24" style="margin-bottom: 26px;">
							<div class="groupbanner-text hover-scale">
							<a href="categories.php?id=2"><img src="assets/cards/31.jpg" width="1900"></a></div>
							</div>
							<?php } ?>

							<?php if($id == '4'){?>
								<div class="col-sm-24 col-xs-24" style="margin-bottom: 26px;">
							<div class="groupbanner-text hover-scale">
							<a href="categories.php?id=2"><img src="assets/cards/29.jpg" width="1900"></a></div>
							</div>
							<?php } ?>



                  
					<div class="col-md-2"> 
					<div class="list-group">
					<h3>Categories</h3>
                    <div class="list-group-item checkbox" style="padding: 8px 15px; margin-bottom: -12px; color: #0c1331;">
                    <a style=" color: #0c1331;"  href="cate.php">All</a>
                </div>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php
							$catsql = "SELECT * FROM category";
							$catres = mysqli_query($connection, $catsql);
							while($catr = mysqli_fetch_assoc($catres)){
						 ?>
				  <div class="list-group-item checkbox">
				  <a style=" color: #0c1331;" href="cat.php?id=<?php echo $catr['id']; ?>"><?php echo $catr['name']; ?></a>
            
                    </div>
						<?php } ?>
                         
                    </div>

                </div>
             

                <section class="boyo">
                <h3>Brand</h3>

    <div class="form-price-range-filter">
        <form method="post" action="">
            <div>
                <input type="" id="min" name="min_price"
                    value="<?php echo $min; ?>">
                <div id="slider-range"></div>
                <input type="" id="max" name="max_price"
                    value="<?php echo $max; ?>">
            </div>
            <div>
                <input type="submit" name="submit_range"
                    value="Filter Product" class="btn-submit">
            </div>
        </form>
    </div>
    </section>
                  









   


</div>

                    <div class="col-md-10">

						<div class="row">
                        <div class="page_header text-center" style="margin-top: 0px;">
                    <h2>Our Collection</h2>
						<p>You can order products from below</p>
					</div>
							<div id="shop-mason" class="shop-mason-4col">
<?php

// $conn = mysqli_connect("localhost", "root", "", "libkart-commerce");



$sql = "SELECT * FROM products";
if(isset($_GET['id']) & !empty($_GET['id'])){
    $id = $_GET['id'];
    $sql .= " WHERE catid='$id' AND (price BETWEEN '$min' AND '$max')";
}

//$compare="SELECT * from products where price BETWEEN '$min' AND '$max'";

// $result = mysqli_query($connection, "select * from products where price BETWEEN '$min' AND '$max'");
$result = mysqli_query($connection,$sql );

$count = mysqli_num_rows($result);
if ($count > 0) {
  

                                ?>


     <?php
    while ($r = mysqli_fetch_array($result)) {
        ?>
<div class="sm-item isotope-item">
									<div class="product">
										<div class="product-thumb">
											<img src="admin/<?php echo $r['thumb']; ?>" class="img-responsive" width="250px" alt="">
											<div class="product-overlay">
												<span>
												<a href="single.php?id=<?php echo $r['id']; ?>" class="fa fa-link"></a>
												<a href="addtocart.php?id=<?php echo $r['id']; ?>" class="fa fa-shopping-cart"></a>
												</span>					
											</div>
										</div>
										<div class="rating">
											<span class="fa fa-star act"></span>
											<span class="fa fa-star act"></span>
											<span class="fa fa-star act"></span>
											<span class="fa fa-star act"></span>
											<span class="fa fa-star act"></span>
										</div>
										<h2 class="product-title"><a href="single.php?id=<?php echo $r['id']; ?>"><?php echo $r['name']; ?></a></h2>
										<div class="product-price">PKR <?php echo $r['price']; ?>.00/-<span></span></div>
									</div>
								</div>



<?php
    } // end while
} else {
    ?>
<div class="no-result">No Results</div>
<?php
}

mysqli_free_result($result);

mysqli_close($connection);
// echo $output;

?>

    </div>
</section>


<?php include 'inc/footer.php' ?>
