
<?php 
require_once('config/connect.php');
?>

<!------------top nav----------->
<?php include('inc/top_nav.php');

if (isset($_POST) & !empty($_POST)){
  $name=mysqli_real_escape_string($connection, $_POST['name']);
  $email=mysqli_real_escape_string($connection, $_POST['email']);
  $message=mysqli_real_escape_string($connection, $_POST['message']);

  $sql="INSERT INTO `contactus` (name,email,message) VALUES ('$name','$email','$message')";
  $res=mysqli_query($connection, $sql);
  if($res){
      $smsg="Message Send!";
      header('location:index.php');
  }else{
      $fmsg="Failed to send message!";
  }
}

?>
<!-- top nav ends here -->
<div class="container">
<div class="contact-section">
<?php if(isset($fmsg)){ ?> <div class="alert alert-danger" role="alert"> <?php echo $fmsg;?> </div> <?php } ?>
	<?php if(isset($smsg)){ ?> <div class="alert alert-success" role="alert"> <?php echo $smsg;?> </div> <?php } ?>
  <h1>Contact Us</h1>
  <div class="border"></div>
  <form name="sentMessage" class="contact-form" action="" method="post">

    <input name="name" type="text" class="contact-form-text" placeholder="Please enter your name" 
    required data-validation-required-message="Please enter your name.">

    <input name="email" type="email" class="contact-form-text" placeholder="Please enter your email" 
    required data-validation-required-message="Please enter your email !">

  <textarea name="message" class="contact-form-text" placeholder="Please enter your message" 
    required data-validation-required-message="Please enter your message!"></textarea>
    
    <div class="col-lg-12 text-center">
        <button name="submit" type="submit" class="btn btn-dark">Send Message</button>
    </div>
  </form>
</div>
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
