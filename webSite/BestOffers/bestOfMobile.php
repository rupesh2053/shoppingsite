

<div class='row dead-card'>
    <div class='deal-header'>Best of mobile phone
    <a href="#" class = "light-blue darken-3 white-text right" style = "padding: 0px 10px; font-weight: 400;">View all</a><hr><p></p></div>

<?php
    $get_products = "SELECT * FROM product WHERE product_catagories = 'Phone' ORDER BY 1 DESC limit 6";
    $run_products = mysqli_query($conn,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){
        $pro_title = $row_products['product_title'];
        $pro_img1 = $row_products['product_img1'];
        $pro_descount = $row_products['discount'];
        $pro_keyword = $row_products['product_keywords'];

    echo "
    <div class='col s6 l2 m3 product'>
    <div class='card-content center product-content'>
    <img src='Product_Images/$pro_img1'>
    <div class='name center'>$pro_title</div>
    <div class='discount center'>Upto $pro_descount% off</div>
    <div class='deal center'>$pro_keyword</div>
    </div>
    </div>";
}?>

</div>
</body>
</html>
