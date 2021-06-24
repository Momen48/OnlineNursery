<?php 
require_once('config/connect.php');
?>

<!------------top nav----------->
<?php include('inc/top_nav.php');?>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="text-center">Product in available in this Shop </h1>
    
  </div>
</div>

<div class = "products">
  <div class = "container">
    <h1 class = "lg-title"></h1>
    <p class = "text-dark"></p>

    <div class = "product-items">

        <!-- single product -->
        <!-- ekhane product -->

    <?php prod_shop()?>
        <!-- end of single product -->

        <!-- single product -->
    
    </div>
</div>
</div>
<!-- product ends  -->

<!-- parallex -->

<?php include('inc/parallex.php');?>
<?php include('inc/footer.php') ?>