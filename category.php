<?php 
require_once('config/connect.php');
?>

<!------------top nav----------->
<?php include('inc/top_nav.php');?>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Similar products to the category </h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<div class = "products">
  <div class = "container">
    <h1 class = "lg-title"></h1>
    <p class = "text-dark"></p>

    <div class = "product-items">

        <!-- single product -->
        <!-- ekhane product -->

    <?php getProd_in_CatPage()?>
        <!-- end of single product -->

        <!-- single product -->
    
    </div>
</div>
</div>
<!-- product ends  -->

<!-- parallex -->

<?php include('inc/parallex.php');?>




















<!------------Footer----------->
<?php include('inc/footer.php');?>