<?php 
session_start();
require_once 'config/connect.php';
$title = "Libkart - Best Clothing Online Shopping";
include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>
	
<script>	
window.onbeforeunload = function () {
            var scrollPos;
            if (typeof window.pageYOffset != 'undefined') {
                scrollPos = window.pageYOffset;
            }
            else if (typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat') {
                scrollPos = document.documentElement.scrollTop;
            }
            else if (typeof document.body != 'undefined') {
                scrollPos = document.body.scrollTop;
            }
            document.cookie = "scrollTop=" + scrollPos;
        }
        window.onload = function () {
            if (document.cookie.match(/scrollTop=([^;]+)(;|$)/) != null) {
                var arr = document.cookie.match(/scrollTop=([^;]+)(;|$)/);
                document.documentElement.scrollTop = parseInt(arr[1]);
                document.body.scrollTop = parseInt(arr[1]);
            }
        }
		</script>



<section id="slider" >
<section class="slider">

<div class="container" id="slider"><!-- container Begin -->
       
    <div class="col-md-12"><!-- col-md-12 Begin -->
        
        <div class="carousel slide" id="myCarousel" data-interval="3000" data-ride="carousel"><!-- carousel slide Begin -->
            
            <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                
                <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                
            </ol><!-- carousel-indicators Finish -->
            
            <div class="carousel-inner"><!-- carousel-inner Begin -->
                
                <div class="item active">
				<a href="women.php?id=4"> 
                    <img src="assets/cards/slide-1.jpg" alt="Slider Image 1">
                    </a>
                </div>
		
				
                <div class="item">
				<a href="categories.php?id=1"> 
                    <img src="assets/cards/slide-2.jpg" alt="Slider Image 2">
					</a>
                </div>
                
                <div class="item">
				<a href="categories.php?id=2"> 
                    <img src="assets/cards/slide-3.jpg" alt="Slider Image 3">
					</a>
                </div>
                
                <div class="item">
				<a href="men.php?id=3"> 
                    <img src="assets/cards/slide-4.jpg" alt="Slider Image 4"> </a>
                    
                </div>
                
            </div><!-- carousel-inner Finish -->
            
            <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
                
            </a><!-- left carousel-control Finish -->
            
            <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
                
            </a><!-- left carousel-control Finish -->
            
        </div><!-- carousel slide Finish -->
        
    </div><!-- col-md-12 Finish -->
    
</div><!-- container Finish -->
</section>


</section>


<section class="cardBody">
    <div class="cardContainer">
        <div class="cardhy">
            <div class="imgBx">
                <img src="assets/cards/578.png" alt="">
            </div>
            <div class="textContent">
			<h2>Unstitched </h2>
				<h3>Collection </h3>
                <p>Finest unstitched suit collection for women this festive season. Ready to sew.</p>
					<button><a href="categories.php?id=1">Check Out</a></button>
            </div>
        </div>
        <div class="cardhy">
            <div class="imgBx">
                <img src="assets/cards/577.png" alt="">
            </div>
            <div class="textContent">
				<h2>Unstitched </h2>
				<h3>Collection </h3>
                <p>Finest fabric collection for men in a single price. Fabric for complete suit.</p>
					<button><a href="men.php?id=3">Check Out</a></button>
            </div>
        </div>
        <div class="cardhy">
            <div class="imgBx">
                <img src="assets/cards/576.png" alt="">
            </div>
            <div class="textContent">
			<h2>Unstitched </h2>
				<h3>Collection </h3>
                <p>Finest unstitched suit collection for women in a single price. Ready to sew.</p>
					<button><a href="categories.php?id=4">Check Out</a></button>
            </div>
        </div>
    </div>
</section>


	<!-- SHOP CONTENT -->
	<section id="content" >
		<div class="content-blog">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2>Our Shop</h2>
						<p>You can order products from below</p>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div id="shop-mason" class="shop-mason-4col">
				<?php
						$sql = "SELECT * FROM products";
				if (isset($_GET['pageno'])) {
					$pageno = $_GET['pageno'];
				} else {
					$pageno = 1;
				}
				$no_of_records_per_page = 12;
				$offset = ($pageno-1) * $no_of_records_per_page;
				$total_pages_sql = "SELECT COUNT(*) FROM products";
				$result = mysqli_query($connection,$total_pages_sql);
				$total_rows = mysqli_fetch_array($result)[0];
				$total_pages = ceil($total_rows / $no_of_records_per_page);

				$sqli = "SELECT * FROM products LIMIT $offset, $no_of_records_per_page";
				$res_data = mysqli_query($connection,$sqli);
				while($r = mysqli_fetch_array($res_data)){
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






	
						<?php } 
					mysqli_close($connection);
					?> 
					</div>
					</div>
					<div class="clearfix"></div>
					<ul class=" page_nav">
					<li><a href="?pageno=1">First</a></li>
					<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
						<a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
					</li>
					<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
						<a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
					</li>
					<li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
					</ul>

					</section>

<?php include 'inc/footer.php' ?>
