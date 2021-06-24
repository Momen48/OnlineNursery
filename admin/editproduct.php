<?php
	session_start();
	require_once ('../config/connect.php');
	if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		header('location: login.php');
	}

	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
	}else{
		header('location: products.php');
	}

	if(isset($_POST) & !empty($_POST)){
		$prodname = mysqli_real_escape_string($connection, $_POST['productname']);
		$description = mysqli_real_escape_string($connection, $_POST['productdescription']);
		$category = mysqli_real_escape_string($connection, $_POST['productcategory']);
		$shop = mysqli_real_escape_string($connection, $_POST['productshop']);
		$price = mysqli_real_escape_string($connection, $_POST['productprice']);

		if(isset($_FILES) & !empty($_FILES)){
			$name = $_FILES['productimage']['name'];
			$size = $_FILES['productimage']['size'];
			$type = $_FILES['productimage']['type'];
			$tmp_name = $_FILES['productimage']['tmp_name'];

			$max_size = 10000000;
			$extension = substr($name, strpos($name, '.') + 1);

			if(isset($name) && !empty($name)){
				if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size<=$max_size){
					$location = "uploads/";
					$filepath = $location.$name;
					if(move_uploaded_file($tmp_name, $filepath)){
						$smsg = "Uploaded Successfully";
					}else{
						$fmsg = "Failed to Upload File";
					}
				}else{
					$fmsg = "Only JPG files are allowed and should be less that 1MB";
				}
			}else{
				$fmsg = "Please Select a File";
			}
		}else{
			$filepath = $_POST['filepath'];
		}	

		$sql = "UPDATE products SET product_title='$prodname', product_desc='$description', catid='$category', 
		shopid='$shop',price='$price',
		image='$filepath' WHERE id = $id";
		$res = mysqli_query($connection, $sql);
		if($res){
			$smsg = "Product Updated";
			header('location:products.php');
		}else{
			$fmsg = "Failed to Update Product";
		}
	}
?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>
	
<section id="content">
	<div class="content-blog">
		<div class="container">
		<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<?php 	
				$sql = "SELECT * FROM products WHERE id=$id";
				$res = mysqli_query($connection, $sql); 
				$r = mysqli_fetch_assoc($res); 
			?>
			<form method="post" enctype="multipart/form-data">
			  <div class="form-group">
			  <input type="hidden" name="filepath" value="<?php echo $r['image']; ?>">
			    <label for="Productname">Product Name</label>
			    <input type="text" class="form-control" name="productname" id="Productname" placeholder="Product Name"
				 value="<?php echo $r['product_title']; ?>">
			  </div>
			  <div class="form-group">
			    <label for="productdescription">Product Description</label>
			    <textarea class="form-control" name="productdescription" rows="3"><?php echo $r['product_desc']; ?></textarea>
			  </div>

			  <div class="form-group">
			    <label for="productcategory">Product Category</label>
			    <select class="form-control" id="productcategory" name="productcategory">
			    <?php 	
					$catsql = "SELECT * FROM categories";
					$catres = mysqli_query($connection, $catsql); 
					while ($catr = mysqli_fetch_assoc($catres)) {
				?>
					<option value="<?php echo $catr['id']; ?>" <?php if( $catr['id'] == $r['catid']){ echo "selected"; } ?>>
					<?php echo $catr['cat_title']; ?></option>
				<?php } ?>
				</select>
			  </div>
			  

			  <div class="form-group">
			    <label for="productprice">Product Price</label>
			    <input type="text" class="form-control" name="productprice" id="productprice" placeholder="Product Price" 
				value="<?php echo $r['price']; ?>">
			  </div>

			  <div class="form-group">
			    <label for="productshop">SHOP NAME</label>
			    <select class="form-control" id="productshop" name="productshop">
			    <?php 	
					$shopsql = "SELECT * FROM shop";
					$shopres = mysqli_query($connection, $shopsql); 
					while ($shoprow = mysqli_fetch_assoc($shopres)) {
				?>
					<option value="<?php echo $shoprow['id']; ?>" <?php if( $shoprow['id'] == $r['shopid']){ echo "selected"; } ?>>
					<?php echo $shoprow['name']; ?></option>
				<?php } ?>
				</select>
			  </div>

			  <div class="form-group">
			    <label for="productimage">Product Image</label>
			    <?php if(isset($r['image']) & !empty($r['image'])){ ?>
			    <br>
			    	<img src="<?php echo $r['image'] ?>" widht="100px" height="100px">
			    	<a href="delprodimg.php?id=<?php echo $r['id']; ?>">Delete Image</a>
			    <?php }else{ ?>
			    <input type="file" name="productimage" id="productimage">
			    <p class="help-block">Only jpg/png are allowed.</p>
			    <?php } ?>
			  </div>
			  
			  <button type="submit" class="btn btn-info">Submit</button>
			</form>
			
		</div>
	</div>

</section>
<?php include ('inc/footer.php') ?>
