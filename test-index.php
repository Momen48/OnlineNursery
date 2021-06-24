<?php include('config/connect.php');
include('inc/top_nav.php');

?>

<div>
<div class="bbb_viewed">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="bbb_main_container">
                    <div class="bbb_viewed_title_container">
                        <h3 class="bbb_viewed_title">Best selling products</h3>
                        <div class="bbb_viewed_nav_container">
                            <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fa fa-chevron-left"></i></div>
                            <div class="bbb_viewed_nav bbb_viewed_next"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="bbb_viewed_slider_container">
                        <div class="owl-carousel owl-theme bbb_viewed_slider">

<?php    

$query = query("SELECT * FROM products");
    confirm($query);
while($row=fetch_array($query)){
                    
?>
                            <div class="owl-item">
                                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image"><a href="product.php?id=<?php echo $row['id']?>">
                                   <img src="admin/<?php echo $row['image'] ?>" alt="No Image"> </a>
                                    
                                    </div>
                                    <div class="bbb_viewed_content text-center">
                                        <div class="bbb_viewed_price">BDT: <?php echo $row['price']?></div>
                                        <div class="bbb_viewed_name"><a href="product.php?id=<?php echo $row['id']?>">
                                        <h5 calss="bg-danger"> <?php echo $row['product_title']?></h5></a>
                                        </div>
                                      
                                        <div class="bbb_viewed_name"><a href="addtocart.php?id=<?php echo $row['id']?>"> Add to Cart </a></div>
                                        <div class="bbb_viewed_name"><a href="checkout.php?id=<?php echo $row['id']?>">Buy Now</a></div>
                                      
                                        
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>
<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<?php include('inc/footer.php'); ?>