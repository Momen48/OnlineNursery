<?php
session_start();
require_once ('../config/connect.php');
if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
	header('location: login.php');
}


	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
	}else{
		header('location: categories.php');
	}

	if(isset($_POST) & !empty($_POST)){
		$id = mysqli_real_escape_string($connection, $_POST['id']);
		$name = mysqli_real_escape_string($connection, $_POST['categoryname']);
		$sql = "UPDATE categories SET cat_title = '$name' WHERE id=$id";
		$res = mysqli_query($connection, $sql);
		if($res){
			$smsg= "Category Updated";
			header('location:categories.php');
		}else{
			$fmsg= "Failed Update Category";
		}
	}
?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>
	
<section id="content">
	<div class="content-blog">
	<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
	   <div class="container">
	        <form method="post">
		    <div class="form-group">
			<label for="Productname">Category Name</label>
			<?php 	
					$sql = "SELECT * FROM categories WHERE id='$id' ";
					$res = mysqli_query($connection, $sql); 
					$row = mysqli_fetch_assoc($res);
				?>
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
			<input type="text" class="form-control" name="categoryname" id="Categoryname" placeholder="Category Name"
				value="<?php echo $row['cat_title'];  ?>">
			</div>
			
			<button type="submit" class="btn btn-default">Submit</button>
			</form>
			
		</div>
	</div>

</section>
<?php include 'inc/footer.php' ?>
