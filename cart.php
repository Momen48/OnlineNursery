<?php
session_start();
include ('config/connect.php'); 
include ('inc/top_nav.php'); 
$cart = $_SESSION['cart'];

?>
	
	

	
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2>Online Nursery</h2>
						<p>Get the best nursery service here.</p>
					</div>
					<div class="col-md-12">

<table class="cart-table table table-bordered">
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th>Product</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
				<?php 
				$total = 0;
				foreach($cart as $key => $value){
					$cartsql="SELECT * FROM products WHERE id=$key";
					$cartres = mysqli_query($connection, $cartsql);
					$cartrow=mysqli_fetch_assoc($cartres);
	
				?>
					<tr>
						<td>
							<a class="remove" href="delcart.php?id=<?php echo $key;?>"><i class="fa fa-times"></i></a>
						</td>
						<td>
							<a href="#"><img src="admin/<?php echo $cartrow['image'];?>" alt="" style="height: 90px; width:90px;" ></a>					
						</td>
						<td>
							<a href="product.php?id=<?php echo $cartrow['id'];?>"> 
							<?php echo substr($cartrow['product_title'], 0 , 30);  ?></a>					
						</td>
						<td>
							<span class="amount">BDT <?php echo $cartrow['price'];?></span>					
						</td>
						<td>
							<div class="quantity"><?php echo $value['quantity']?></div>
						</td>
						<td>
							<span class="amount">BDT - <?php echo ($cartrow['price'] * $value['quantity']); ?> </span>					
						</td>
					</tr>
					<?php 
					$total= $total + ($cartrow['price']*$value['quantity']);
				}
					?>
						<td colspan="6" class="actions">
						
							</div>
							<div class="col-md-6">
								<div class="cart-btn">
								<a href="checkout.php" class="btn btn-dark" >Checkout</a>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>		

			<div class="cart_totals">
				<div class="col-md-6 push-md-6 no-padding">
					<h4 class="heading">Cart Totals</h4>
					<table class="table table-bordered col-md-6">
						<tbody>
							<tr>
								<th>Cart Subtotal</th>
								<td><span class="amount">BDT- <?php echo $total;?></span></td>
							</tr>
							<tr>
								<th>Shipping and Handling</th>
								<td>
									Free Shipping				
								</td>
							</tr>
							<tr>
								<th>Order Total</th>
								<td><strong><span class="amount">BDT- <?php echo $total;?></span></strong> </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>			
							
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php include('inc/footer.php')?>