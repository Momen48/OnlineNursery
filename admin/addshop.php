<?php 
session_start();
require_once ('../config/connect.php');
if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
	header('location: login.php');
}

if (isset($_POST) & !empty($_POST)){
    $name=mysqli_real_escape_string($connection, $_POST['shopname']);
    $sql="INSERT INTO shop (name) VALUES ('$name')";
    $res=mysqli_query($connection, $sql);
    if($res){
        $smsg="Shop Added";
        header('location:shops.php');
    }else{
        $fmsg="Failed to add Shop!";
    }
}
?>
<?php include('inc/header.php')?>
<?php include('inc/nav.php')?>
<section id="content">
	<div class="content-blog">
	   <div class="container">
	<?php if(isset($fmsg)){ ?> <div class="alert alert-danger" role="alert"> <?php echo $fmsg;?> </div> <?php } ?>
	<?php if(isset($smsg)){ ?> <div class="alert alert-success" role="alert"> <?php echo $smsg;?> </div> <?php } ?>
	      <form method="post">
		    <div class="form-group">
			 <label for="Shopname">Shop Name</label>
			 <input type="text" class="form-control" name="shopname" id="Categoryname" placeholder="Shop Name">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>

		  </form>

	   </div>
	</div>

	</section>


<?php include('inc/footer.php')?>    