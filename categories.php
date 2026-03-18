<?php 
session_start();
ini_set( "display_errors", 0); 
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

include 'inc/header.php'; ?>
<?php include 'inc/nav.php';?>


	<!-- SHOP CONTENT -->
	<section id="content" style="margin-top: 53px;">
		<div class="content-blog">
			<div class="container ">
				<div class="row">
					<div class="page_header text-center">

					
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




						<h2>Our Collection</h2>
						<p>You can order products from below</p>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div id="shop-mason" class="shop-mason-4col">
							<?php 
								$sql = "SELECT * FROM products";
								if(isset($_GET['id']) & !empty($_GET['id'])){
									$id = $_GET['id'];
									$sql .= " WHERE catid=$id";
								}
								

								$res = mysqli_query($connection, $sql);
								while($r = mysqli_fetch_assoc($res)){
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
							<?php } ?>

								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</section>

<?php include 'inc/footer.php' ?>
