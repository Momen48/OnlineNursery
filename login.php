<?php 
session_start();
require_once ('config/connect.php');
include_once('inc/top_nav.php');
?>

	<h1 class="text-center"></h1>
	<h4 class="text-center">User Login/Registration</h4>
	<p class="text-center">...</p>
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
			<div class="container">
				<div class="row">
					<div class="page_header">
						
					</div>
					<div class="col-md-12">
				<div class="row shop-login">
				<div class="col-md-6">
					<div class="box-content">
						<h5 class="heading">I'm a Returning Customer</h5>
						<p class="">.......................................................................................</p>
						<div class="clearfix space40"></div>
						<?php if(isset($_GET['message'])){
								if($_GET['message'] == 1){
						?><div class="alert alert-danger" role="alert"> <?php echo "Invalid Login Credentials"; ?> </div>

						<?php } }?>
						<form class="logregform" method="post" action="loginprocess.php">
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>E-mail Address</label>
										<input type="email" name="email" value="" class="form-control">
									</div>
								</div>
							</div>
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<!-- <a class="pull-right" href="#">(Lost Password?)</a> -->
										<label>Password</label>
										<input type="password" name="password" value="" class="form-control">
									</div>
								</div>
							</div>
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="col-md-6">
									<button type="submit" class="btn btn-info">Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box-content">
						<h5 class="heading ">Register An Account</h5>
						<p>......................................................................</p>
						<div class="clearfix space40"></div>
						<?php if(isset($_GET['message'])){ 
								if($_GET['message'] == 2){
							?><div class="alert alert-danger" role="alert"> <?php echo "Failed to Register"; ?> </div>
							<?php } } ?>
						<form class="logregform" method="post" action="registerprocess.php">
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>E-mail Address</label>
										<input type="email" name="email" value="" class="form-control">
									</div>
								</div>
							</div>
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Password</label>
										<input type="password" name="password" value="" class="form-control">
									</div>
									<div class="col-md-12">
										<label>Re-enter Password</label>
										<input type="password" name="passwordagain" value="" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								
									<div class="space20"></div>
									<div col-md-6>
									
									</div>
									<div col-md-6>
									<button type="submit" class="btn btn-info">Register</button>
									</div>
									
							
							</div>
						</form>
					</div>
				</div>
			</div>


							
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php include ('inc/footer.php') ?>
