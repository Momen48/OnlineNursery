<?php

//helper
function redirect($location){
    header("Location: $location");
}

function query($sql){
    global $connection;
    return mysqli_query($connection,$sql);
}

function confirm($result){
    global $connection;
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

function escape_string($string){
global $connection;
return mysqli_real_escape_string($connection,$string);
}

function fetch_array($result){
    return mysqli_fetch_array($result); 
}

function set_msg($msg){
    if(!empty($msg)){
        $_SESSION['message']=$msg;
    }
    else{
        $msg = "";
    }
}
function display_msg(){
    if (isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}



    
    //get product by category

function get_categories(){
    $query = query("SELECT * FROM categories");
    confirm($query);

    while($row = mysqli_fetch_array($query)){

        $category_links = <<<DELIMETER
        <a class="dropdown-item" href="category.php?id={$row['id']}">{$row['cat_title']}</a>
        DELIMETER;

        echo $category_links;
    }
}


function getProd_in_CatPage(){
    $query = query("SELECT * FROM products WHERE catid=".escape_string($_GET['id'])." ");
    confirm($query);
    while($row=fetch_array($query)){
    $product = <<<DELIMETER
    <div class = "product">
    <div class = "product-content">
        <div class = "product-img">
        <a href="product.php?id={$row['id']}"><img src = "admin/{$row['image']}" alt = "product image"></a>
        </div>
        <div class = "product-btns">
        <a href="addtocart.php?id={$row['id']}">  
        <button type = "button" class = "btn-cart"> Add to Cart
                <span></span>
            </button> 
        </a>
        <a href="checkout.php?id={$row['id']}"> <button type = "button" class = "btn-buy"> buy now
                <span></span> 
            </button>
        </a>    
        </div>
    </div>

    <div class = "product-info">
        <div class = "product-info-top">
        <a href = "product.php?id={$row['id']}" style="text-decoration:none"> <h2 class = "sm-title">{$row['product_title']}</h2>   </a>       
        </div>

        <p class = "product-price">BDT- {$row['price']}</p>
    </div>
</div>
DELIMETER;
    
    echo $product;
    }    
}

//get random product
function random_product(){
    $query = query("SELECT * FROM products ORDER BY rand() limit 3");
    confirm($query);
    while($row=fetch_array($query)){
    $product = <<<DELIMETER
    <div class = "product">
    <div class = "product-content">
        <div class = "product-img">
        <a href="product.php?id={$row['id']}"><img src = "admin/{$row['image']}" alt = "product image"></a>
        </div>
        <div class = "product-btns">
        
        <a href="addtocart.php?id={$row['id']}"><button type = "button" class = "btn-cart"> Add to Cart
                <span></span>
            </button> </a>
        
        <a href="checkout.php?id={$row['id']}"> <button type = "button" class = "btn-buy"> buy now
                <span></span> 
            </button>
        </a>    
        </div>
    </div>

    <div class = "product-info">
        <div class = "product-info-top">
        <a href = "product.php?id={$row['id']}" style="text-decoration:none"> <h2 class = "sm-title">{$row['product_title']}</h2>   </a>       
        </div>

        <p class = "product-price">BDT- {$row['price']}</p>
    </div>
</div>
DELIMETER;
    
    echo $product;
    }
    
    }


    function shop(){
        $query = query("SELECT * FROM shop");
        confirm($query);
    
        while($row = mysqli_fetch_array($query)){
    
            $shop_links = <<<DELIMETER
            <a class="dropdown-item" href="shop.php?id={$row['id']}">{$row['name']}</a>
            DELIMETER;
    
            echo $shop_links;
        }
    }



    
function prod_shop(){
    $query = query("SELECT * FROM products WHERE shopid=".escape_string($_GET['id'])." ");
    confirm($query);
    while($row=fetch_array($query)){
    $product = <<<DELIMETER
    <div class = "product">
    <div class = "product-content">
        <div class = "product-img">
        <a href="product.php?id={$row['id']}"><img src = "admin/{$row['image']}" alt = "product image"></a>
        </div>
        <div class = "product-btns">
        <a href="addtocart.php?id={$row['id']}">  
        <button type = "button" class = "btn-cart"> Add to Cart
                <span></span>
            </button> 
        </a>
        <a href="checkout.php?id={$row['id']}"> <button type = "button" class = "btn-buy"> buy now
                <span></span> 
            </button>
        </a>    
        </div>
    </div>

    <div class = "product-info">
        <div class = "product-info-top">
        <a href = "product.php?id={$row['id']}" style="text-decoration:none"> <h2 class = "sm-title">{$row['product_title']}</h2>   </a>       
        </div>

        <p class = "product-price">BDT-{$row['price']}</p>
    </div>
</div>
DELIMETER;
    
    echo $product;
    }    
}




    
function allprod(){
    $query = query("SELECT * FROM products ");
    confirm($query);
    while($row=fetch_array($query)){
    $product = <<<DELIMETER
    <div class = "product">
    <div class = "product-content">
        <div class = "product-img">
        <a href="product.php?id={$row['id']}"><img src = "admin/{$row['image']}" alt = "product image"></a>
        </div>
        <div class = "product-btns">
        <a href="addtocart.php?id={$row['id']}">  
        <button type = "button" class = "btn-cart"> Add to Cart
                <span></span>
            </button> 
        </a>
        <a href="checkout.php?id={$row['id']}"> <button type = "button" class = "btn-buy"> buy now
                <span></span> 
            </button>
        </a>    
        </div>
    </div>

    <div class = "product-info">
        <div class = "product-info-top">
        <a href = "product.php?id={$row['id']}" style="text-decoration:none"> <h2 class = "sm-title">{$row['product_title']}</h2>   </a>       
        </div>

        <p class = "product-price">BDT-{$row['price']}</p>
    </div>
</div>
DELIMETER;
    
    echo $product;
    }    
}