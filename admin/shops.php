<?php 
session_start();
require_once ('../config/connect.php');
if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
	header('location: login.php');
}

require('inc/header.php');
?>

<?php include('inc/nav.php');?>


	
<section id="content">
	<div class="content-blog">
		<div class="container">
		<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Shop Name</th>
						<th>Operations</th>
					</tr>
				</thead>
				<tbody>
				<?php 	
					$sql = "SELECT * FROM shop";
					$res = mysqli_query($connection, $sql); 
					while ($row = mysqli_fetch_assoc($res)) {
				?>
					<tr>
						<th scope="row"><?php echo $row['id']; ?></th>
						<td><?php echo $row['name']; ?></td>
						<td><a href="editshop.php?id=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="delshop.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			
		</div>
	</div>

</section>








<?php include('inc/footer.php');?>