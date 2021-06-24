<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/contact_style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- FONTAwesome cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<title>Online Nursey</title>
</head>
<body>

<section>
<nav class="navbar navbar-expand-lg" style="background-color: #33001a">
  <a class="navbar-brand" href="index.php" style="color:#fff;font-family: 'Lobster', cursive;font-size: 28px;">Online Nursery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #fff;">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse my-2 my-lg-0" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
  
  </ul>
<!--  categories in the middle -->
<ul class="nav justify-content-center">

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" style="color:#fff" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Categories
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <?php get_categories()?>
    </div>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" style="color:#fff" id="navbarDropdown" role="button" data-toggle="dropdown" 
    aria-haspopup="true" aria-expanded="false">
     Shops
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <?php shop()?>
    </div>
</li>
  

</ul>


<!-- sign in sign out-->
  <ul class="navbar-nav ml-auto">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" style="color:#fff" id="navbarDropdown" role="button" data-toggle="dropdown" 
    aria-haspopup="true" aria-expanded="false">
    My Account
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="view-order.php">My Orders</a>
    
    <a class="dropdown-item" href="logout.php">Logout</a>
    </div>
</li>
  <li class="nav-item">
    <a class="nav-link" style="color:#fff" href="Contact.php">Contact Us</a>
  </li>
    
  </ul>
    
  </div>
</nav>
</section>