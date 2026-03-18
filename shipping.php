<?php 
session_start();
require_once 'config/connect.php';
$title = "Shipping Policy";
include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>


	<!-- SHOP CONTENT -->
	<section id="content" style="margin-top: 53px;">
		<div class="content-blog">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2 style=" margin-bottom: -11px;" >Shipping Policy</h2>
						<!-- <p>You can order products from below</p> -->
					</div>
					<div class="col-md-12" style="padding: 24px;     box-shadow: 0 0 1px #8c8686;">
                    
                    <h3 style="font-weight: 600; margin-bottom: 10px;" >
                    Domestic Shipping
                    </h3>
					<p style="font-weight: 500; font-size: 17px; line-height: 23px;"  >
					Free Express Shipping across Pakistan.
					<br>
					The customer will usually get an order in 3-5 business days after the order has shipped out. Most of the payments are through COD, it can take up to 2 days for us to process your order and ship it. This is just an estimate and does not include weekends and holidays. 
					We do not ship to P.O Boxes. Delivery can take longer in remote areas in Pakistan.

					</p>
					<h3 style="font-weight: 600; margin-bottom: 10px; margin-top: 15px; " >
					Order Tracking
										</h3>
					<p style="font-weight: 500; font-size: 17px; line-height: 23px;"  >
					Shortly after placing your order, you will receive a sms with your order number and an order tracking number (if a valid phone number was supplied). 
					During transit of your package, you may enter that number into our Order Tracking section to check your order status.
					</p>
					</div>
				</div>
			</div>
		</div>
	</section>
    <?php include 'inc/footer.php' ?>