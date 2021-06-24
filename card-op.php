
<div class = "products">
  <div class = "container">
    <h1 class = "lg-title">Best Seed, Fertilizers, Plants and home decorator in Chittagong</h1>
    <p class = "text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quos sit consectetur, ipsa voluptatem vitae necessitatibus dicta veniam, optio, possimus assumenda laudantium. Temporibus, quis cum.</p>

    <div class = "product-items">

        <!-- single product -->
        <!-- ekhane product -->
<?php
        
    $query = query("SELECT * FROM products");
    confirm($query);
    while($row=fetch_array($query)){
        ?>
    <div class = "product">
    <div class = "product-content">
        <div class = "product-img">
        <a href="product.php?id=<?php echo $row['id']?>"><img src = "admin/<?php echo $row['image'] ?>" alt = "product image"></a>
        </div>
        <div class = "product-btns">
        
        <a href="addtocart.php?id=<?php echo $row['id']?>"><button type = "button" class = "btn-cart"> Add to Cart
                <span></span>
            </button> </a>
        
        <a href="checkout.php?id=<?php echo $row['id']?>"> <button type = "button" class = "btn-buy"> buy now
                <span></span> 
            </button>
        </a>    
        </div>
    </div>

    <div class = "product-info">
        <div class = "product-info-top">
        <a href = "product.php?id=<?php echo $row['id']?>" style="text-decoration:none"> <h2 class = "sm-title"><?php echo $row['product_title']?></h2>   </a>       
        </div>

        <p class = "product-price">&#36;<?php echo $row['price']?></p>
    </div>
</div>

<?php } ?>
 
        <!-- end of single product -->

        <!-- single product -->
    
    </div>
</div>
</div>