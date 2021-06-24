<?php include("inc/header.php");
require_once('config/connect.php');
?>
<?php include("inc/nav.php")?>
	<!-- HEADER -->
	<header id="header2">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-5 logo">
					<a href="http://[::1]/cishop/admin"><img src="http://[::1]/cishop/assets/images/logo.png" class="img-responsive" alt=""/></a>
				</div>  
				<div class="col-md-9 col-xs-7">
					<div class="top-bar">
						
					</div>
				</div>
			</div>

	
	<div class="close-btn fa fa-times"></div>

	
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2>Shop</h2>
						<p>You can order products from here</p>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div id="shop-mason" class="shop-mason-4col">
<?php 

?>
							
						<div class="sm-item isotope-item">
									<div class="product">
										<div class="product-thumb">
											<img src="img/camera.jpg" class="img-responsive" alt="">
											<div class="product-overlay">
												<span>
												<a href="./shop-single-full.html" class="fa fa-link"></a>
												<a href="./shop-single-full.html" class="fa fa-shopping-cart"></a>
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
										<h2 class="product-title"><a href="#">Shave Knives</a></h2>
										<div class="product-price">$79.00<span>$200.00</span></div>
									</div>
								</div> 

                                <!-- end of sinle product-->
							
								
							</div>
						</div>
						<div class="clearfix"></div>
						<!-- Pagination -->
						<div class="page_nav">
							<a href=""><i class="fa fa-angle-left"></i></a>
							<a href="" class="active">1</a>
							<a href="">2</a>
							<a href="">3</a>
							<a class="no-active">...</a>
							<a href="">9</a>
							<a href=""><i class="fa fa-angle-right"></i></a>
						</div>
						<!-- End Pagination -->
					</div>
				</div>
			</div>
		</div>
	</section>


    <?php include('inc/footer.php') ?>