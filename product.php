<?php 
ob_start();
session_start();
require_once ('config/connect.php');
include ('inc/top_nav.php'); 
if(isset($_GET['id']) & !empty($_GET['id'])){
	$id = $_GET['id'];
	$prodsql = "SELECT * FROM products WHERE id=$id";
	$prodres = mysqli_query($connection, $prodsql);
	$prodr = mysqli_fetch_assoc($prodres);
}else{
	header('location: index.php');
}

$uid = $_SESSION['customerid'];
if(isset($_POST) & !empty($_POST)){
	
	$review = filter_var($_POST['review'], FILTER_SANITIZE_STRING);

	$revsql = "INSERT INTO reviews (pid, uid, review) VALUES ($id, $uid, '$review')";
	$revres = mysqli_query($connection, $revsql);
	if($revres){
		$smsg = "Review Submitted Successfully";
	}else{
		$fmsg = "Failed to Submit Review";
	}
}

?>
	
	<!-- SHOP CONTENT -->
	<section class="col-md-12">
		<div class="">
			<div class="">
				<div class="">
					<div class="text-center">
						<h2 class="text-info">Online Nursery</h2>
						<p>Get your agricultural things and suggestions from here!</p>
					</div>

				
					<div class="col-md-10 col-md-offset-1">
			<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
			<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
					<div class="row">
						<div class="col-md-5">
							<div class="gal-wrap">
								<div id="gal-slider" class="flexslider">
									<ul class="slides">
										<li><img src="admin/<?php echo $prodr['image']; ?>" class="img-responsive" alt=""/></li>
									</ul>
								</div>
								
								<div class="clearfix"></div>
							
							</div>
						</div>
						<div class="col-md-7 product-single">
							<h2 class="product-single-title no-margin"><?php echo $prodr['product_title']; ?></h2>
							<div class="space10"></div>
							<div class="p-price">BDT <?php echo $prodr['price']; ?>.00/-</div>
							<p><?php echo $prodr['product_desc']; ?></p>
							<form method="get" action="addtocart.php">
							<div class="product-quantity">
								<span>Quantity:</span> 
									<input type="hidden" name="id" value="<?php echo $prodr['id']; ?>">
									<input type="text" name="quant" placeholder="1">
							</div>
							<div class="shop-btn-wrap">
								<input type="submit" class="btn btn-dark" value="Add to Cart">
							</div>
							</form>
					











					
						</div>
					</div>




					<div class = "products">
  <div class = "container">
    <h4 class = "text-center">Similar Product</h4>
     <div class = "product-items">

        <!-- single product -->
        <!-- ekhane product -->
<?php
        
    $query = query("SELECT * FROM products ORDER BY rand() LIMIT 4");
    confirm($query);
    while($row=fetch_array($query)){
        ?>
    <div class = "product">
    <div class = "product-content">
        <div class = "product-img">
        <a href="product.php?id=<?php echo $row['id']?>"><img src = "admin/<?php echo $row['image'] ?>" alt = "product image"></a>
        </div>
        <div class = "product-btns">
        
        <a href="addtocart.php?id=<?php echo $row['id']?>"><button type = "button" class = "btn-cart"> Add to Cart
                <span></span>
            </button> </a>
        
        <a href="checkout.php?id=<?php echo $row['id']?>"> <button type = "button" class = "btn-buy"> buy now
                <span></span> 
            </button>
        </a>    
        </div>
    </div>

    <div class = "product-info">
        <div class = "product-info-top">
        <a href = "product.php?id=<?php echo $row['id']?>" style="text-decoration:none"> <h2 class = "sm-title"><?php echo $row['product_title']?></h2>   </a>       
        </div>

        <p class = "product-price">&#36;<?php echo $row['price']?></p>
    </div>
</div>

<?php } ?>
 
        <!-- end of single product -->

        <!-- single product -->
    
    </div>
</div>
</div>






					<div class="clearfix space30"></div>
					<div class="tab-style3">
						<!-- Nav Tabs -->
						<div class="align-center mb-40 mb-xs-30">
							<ul class="nav nav-tabs tpl-minimal-tabs animate">
								<li class="active col-md-6">
									<a aria-expanded="true" href="#mini-one" data-toggle="tab">Overview</a>
								</li>
								
							<!--	<li class="col-md-4">
									<a aria-expanded="false" href="#mini-two" data-toggle="tab">Product Info</a>
								</li> -->
								<li class="col-md-6">
									<a aria-expanded="false" href="#mini-three" data-toggle="tab">Reviews</a>
								</li>
							</ul>
						</div>
						<!-- End Nav Tabs -->
						<!-- Tab panes -->
						<div style="height: auto;" class="tab-content tpl-minimal-tabs-cont align-center section-text">
							<div style="" class="tab-pane fade active in" id="mini-one">
								<p><?php echo $prodr['product_desc']; ?></p>
							</div>
							<div style="" class="tab-pane fade active in" id="mini-three">
								<!--Fake Reviews -->
								
<section class="content-item" id="comments">
    <div class="container">   
    	<div class="row">
            <div class="col-sm-8">   
                <form>
                	<h3 class="pull-left">New Comment</h3>
                	<button type="submit" class="btn btn-normal pull-right">Submit</button>
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2 hidden-xs">
                            
                            </div>
                            <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                <textarea class="form-control" id="message" placeholder="Your message" required=""></textarea>
                            </div>
                        </div>  	
                    </fieldset>
                </form>
                
                <h3>4 Comments</h3>
                
                <!-- COMMENT 1 - START -->
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" height="100px" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
                    <div class="media-body">
                        <h4 class="media-heading">John Doe</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>27/02/2014</li>
                            <li><i class="fa fa-thumbs-up"></i>13</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class=""><a href="">Like</a></li>
                            <li class=""><a href="">Reply</a></li>
                        </ul>
                    </div>
                </div>
                <!-- COMMENT 1 - END -->
                
                <!-- COMMENT 2 - START -->
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar2.png" height="100px" alt=""></a>
                    <div class="media-body">
                        <h4 class="media-heading">John Doe</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>27/02/2014</li>
                            <li><i class="fa fa-thumbs-up"></i>13</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class=""><a href="">Like</a></li>
                            <li class=""><a href="">Reply</a></li>
                        </ul>
                    </div>
                </div>
                <!-- COMMENT 2 - END -->
                
                <!-- COMMENT 3 - START -->
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" height="100px" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></a>
                    <div class="media-body">
                        <h4 class="media-heading">John Doe</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>27/02/2014</li>
                            <li><i class="fa fa-thumbs-up"></i>13</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class=""><a href="">Like</a></li>
                            <li class=""><a href="">Reply</a></li>
                        </ul>
                    </div>
                </div>
                <!-- COMMENT 3 - END -->
                
                <!-- COMMENT 4 - START -->
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" height="100px" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt=""></a>
                    <div class="media-body">
                        <h4 class="media-heading">John Doe</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>27/02/2021</li>
                            <li><i class="fa fa-thumbs-up"></i>13</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class=""><a href="">Like</a></li>
                            <li class=""><a href="">Reply</a></li>
                        </ul>
                    </div>
                </div>
                <!-- COMMENT 4 - END -->
            
            </div>
        </div>
    </div>
</section>





								<!-- fake review ends -->
							</div>


							
						</div>
					</div>
					<div class="space30"></div>
					
				</div>
			</div>
		</div>
	</section>

<?php include ('inc/footer.php') ?>