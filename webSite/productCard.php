
<div class='row'>
<?php
    $get_products = "SELECT * FROM product ORDER BY 1 DESC limit 14";
    $run_products = mysqli_query($conn,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        $pro_descount = $row_products['discount'];
        $pro_stock = $row_products['stock'];
        $pro_desc = $row_products['product_desc'];
    
    echo "
        <div class='col l6 s12 m6'>
        <div class='card product-cards'>
        <div class = 'card-head right red white-text product-discount'>-$pro_descount%</div>
        <div class='card-content'>

        <div class='row'>
        <div class='col l4 s6 m6 img-body'>
        <img src='Product_Images/$pro_img1' class = 'product-main-img'>

        <div class='color center'>
        <li><img src='Product_Images/$pro_img1' width = '40px' style = 'margin-top: 5px;'></li>

        <li><img src='Product_Images/$pro_img1' width = '40px' style = 'margin-top: 5px;'></li>

        <li><img src='Product_Images/$pro_img1' width = '40px' style = 'margin-top: 5px;'></li>
        </div></div>

        <div class='col l8 s6 m6 right right-contents'>
        <span id = 'name'>$pro_title<hr></span>
        <div>$pro_desc</div>
        <div class='prices'>Rs.$pro_price /-</div>

        <a href='#'><div class='card-head add-to-cart-btn'>Add to cart</div></a>
        </div>
        </div>
        </div>
        </div>
        </div>";
}?>

</div>
<style>
    .add-to-cart-btn, .prices{
        background: #004953;
        border-radius: 30px;
    }
    .prices{
        background: #558b2f;
    }
</style>
