<?php
	session_start();
	require_once ('../config/connect.php');
	if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		header('location: login.php');
	}
?>
<?php include ('inc/header.php'); ?>
<?php include ('inc/nav.php'); ?>
	
<section id="content">
	<div class="content-blog">
		<div class="container">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Customer Name</th>
						<th>Email</th>
						<th>Message</th>
					</tr>
				</thead>
				<tbody>
				<?php 	
					$sql = "SELECT * FROM `contactus` ORDER BY id DESC";
					$res = mysqli_query($connection, $sql); 
					while ($r = mysqli_fetch_assoc($res)) {
				?>
					<tr>
						<th scope="row"><?php echo $r['id']; ?></th>
						<td><?php echo substr($r['name'], 0, 20); ?></td>
						<td><?php echo $r['email']; ?></td>
						<td><?php echo $r['message']; ?></td>
						
				<?php } ?>
				</tbody>
			</table>
			
		</div>
	</div>

</section>
<?php include ('inc/footer.php') ?>
