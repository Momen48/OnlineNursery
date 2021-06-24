<?php 
session_start();
require_once ('../config/connect.php');
if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
	header('location: login.php');
}

include("inc/header.php")?>
<?php include('inc/nav.php')?>


<div class="close-btn fa fa-times"></div>

	
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2>Online Nursery</h2>
						<p class="text-danger">Here we provide best plants, seeds and many more!</p>
					</div>
					
				</div>
			</div>
            <div>
            
            </div>
		</div>
	</section>
	<hr>

<?php include('inc/footer.php') ?>