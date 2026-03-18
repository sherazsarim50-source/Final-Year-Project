			<div class="menu-wrap">
			<div class="relog">	
			<div class="navte" style=" margin-bottom: -26px;" ><img src="assets/img/libkart-logo-n.svg" alt="" >	</div>
			<div id="mobnav-btn"><i class="fa fa-bars"></i> 
	</div>
			
			
			</div>
				<ul class="sf-menu">
					<li class="logimg">
					<!-- <a href="http://localhost/ecomphp/index.php"> -->
					<img src="assets/img/libkart-logo.svg" alt="" style="width: 165px;margin: -26px 4px -53px 12px;"  >
					<!-- </a> -->
				</li>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="men.php?id=3">Men</a>
					</li>

					<li>
						<a href="women.php?id=4">Women</a>
					</li>

					<li>
						<a href="cate.php">All Categories</a>
						<div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>
						<ul>
						<?php
							$catsql = "SELECT * FROM category";
							$catres = mysqli_query($connection, $catsql);
							while($catr = mysqli_fetch_assoc($catres)){
						 ?>
							<li><a href="categories.php?id=<?php echo $catr['id']; ?>"><?php echo $catr['name']; ?></a></li>
						<?php } ?>
						</ul>
						
					</li>
			



					<?php if(isset($_SESSION['customer'])){ ?>	
					<li>
						<a href="my-account.php">My Account</a>
						<div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>
						<ul>
							<li><a href="my-account.php">My Orders</a></li>
							<li><a href="edit-address.php">Update Address</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				
					<?php } ?>


<li>
<div class="s-search">
						<div class="sear" style="margin-left: 10px;"><i class="fa fa-search fag"></i></div> 
						 <div class="search-block">
							<div class="ssc-inner">
								<form>
								<input type="text" onKeyUp="fx(this.value)" autocomplete="off" name="qu" id="qu" class="textbox" placeholder="What are you looking for ?" tabindex="1">						
								<!-- <input type="text" placeholder="Type Search text here..."> -->
						
								<button type="button"><a style="border: 0;color: #000;" href=""><i class="fa fa-times"></i></a></button>
								<!-- <button type="submit"><i class="fa fa-times"></i></button> -->
									<div id="livesearch"></div>
								</form>
								
							</div>
						</div>
					 </div>
				<!-- </div> --> 
<!-- <div class="sea">
<form class="sear"  action="" style="margin-left: 10px;">
  <input class="se" type="search">
  <i class="fa fa-search fag"></i>
</form>
</div> -->

<!-- <div id="headdown">
	<div class="logo"><a href="index.php">Logo</a></div>
		<div class="srbox">
			<form action="search.php" method="get">
			  <div class="bk">
              	<input type="text" onKeyUp="fx(this.value)" autocomplete="off" name="qu" id="qu" class="textbox" placeholder="What are you looking for ?" tabindex="1">
				<button type="button" class="textbox-clr" id="textbox-clr" onClick="lightbg_clr()"></button>
				<button type="submit" class="query-submit" tabindex="2"><i class="fa fa-search" style="color:#727272; font-size:20px"></i></button>
		    	<div id="livesearch"></div>
   	  		  </div>
			</form>
		</div> -->


<!-- <div class="s-search">
						<div class="ss-ico"><i class="fa fa-search"></i></div>
						<div class="search-block">
							<div class="ssc-inner">
								<form>
		
									<button type="submit"><i class="fa fa-times"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div> -->


<!-- <div id="headdown">
	<div class="logo"><a href="index.php">Logo</a></div>
		<div class="srbox">
			<form action="search.php" method="get">
			  <div class="bk">
              	<input type="text" onKeyUp="fx(this.value)" autocomplete="off" name="qu" id="qu" class="textbox" placeholder="What are you looking for ?" tabindex="1">
				<button type="button" class="textbox-clr" id="textbox-clr" onClick="lightbg_clr()"></button>
				<button type="submit" class="query-submit" tabindex="2"><i class="fa fa-search" style="color:#727272; font-size:20px"></i></button>
		    	<div id="livesearch"></div>
   	  		  </div>
			</form>
		</div> -->

</li>




				</ul>


				<?php if(isset($_SESSION['cart'])){ ?>
				<div class="header-xtra">
				<?php $cart = $_SESSION['cart']; ?>
					<div class="s-cart">
						<div class="sc-ico"><i class="fa fa-shopping-cart"></i><em><?php
								echo count($cart); ?></em></div>

						<div class="cart-info">
							<small>You have <em class="highlight"><?php
								echo count($cart); ?> item(s)</em> in your shopping bag</small>
							<br>
							<br>
							<?php
								//print_r($cart);
								$total = 0;
								foreach ($cart as $key => $value) {
									//echo $key . " : " . $value['quantity'] ."<br>";
									$navcartsql = "SELECT * FROM products WHERE id=$key";
									$navcartres = mysqli_query($connection, $navcartsql);
									$navcartr = mysqli_fetch_assoc($navcartres);

								
							 ?>
							<div class="ci-item">
								<img src="admin/<?php echo $navcartr['thumb']; ?>" width="70" alt=""/>
								<div class="ci-item-info">
									<h5><a href="single.php?id=<?php echo $navcartr['id']; ?>"><?php echo substr($navcartr['name'], 0 , 20); ?></a></h5>
									<p><?php echo $value['quantity']; ?> x PKR <?php echo $navcartr['price']; ?>.00/-</p>
									<div class="ci-edit">
										<!-- <a href="#" class="edit fa fa-edit"></a> -->
										<a href="delcart.php?id=<?php echo $key; ?>" class="edit fa fa-trash"></a>
									</div>
								</div>
							</div>
							<?php 
							$total = $total + ($navcartr['price']*$value['quantity']);
							} ?>
							<div class="ci-total">Subtotal: PKR <?php echo $total; ?>.00/-</div>
							<div class="cart-btn">
								<a href="cart.php" style="margin-right: 7px;">View Bag</a>
								<a href="checkout.php">Checkout</a>
							</div>
						</div>
					</div>
					<!-- <div class="s-search">
						<div class="ss-ico"><i class="fa fa-search"></i></div>
						<div class="search-block">
							<div class="ssc-inner">
								<form>
									<input type="text" placeholder="Type Search text here...">
									<button type="submit"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div> -->
				<?php } ?>
			</div>
		</div>
	</header>

