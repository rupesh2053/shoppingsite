<div class="row" style = "box-shadow: 1px 1px 1px 1px rgba(0,0,0,0.5); background: white; margin: 5px;">
<div class="col l12 s12 m12 carousel-main-body">
  <div class="wrapper" style = "padding: 15px 2px;">
  <span id = "product-carousel" class = "red-text" style = "font-weight: 800; letter-spacing: 1px;">Latest Products</span>
  <span class = "right red-text" id = "total"  style = "font-weight: 600;">770+ products available</span>

<div class="owl-carousel owl-theme themeOwl">

<?php
 $get_products = "SELECT * FROM product ORDER BY 1 DESC limit 20";
 $run_products = mysqli_query($conn,$get_products);
 while($row_products=mysqli_fetch_array($run_products)){
  $pro_title = $row_products['product_title'];
  $pro_price = $row_products['product_price'];
  $pro_img1 = $row_products['product_img1'];
  $pro_descount = $row_products['discount'];

  echo "
    <div class='item' style = 'border: 2px solid rgba(0,0,0,0.5);padding: 6px; margin: 5px; border-radius: 3px;'>
      <p class = 'right red' id = 'discount' style = 'margin-top: 0px; padding: 5px;color: white; font-weight: bold;  border-radius: 2px;'>-$pro_descount%</p>
      <p class = 'left orange' id = 'price' style = 'margin-top: 0px; padding: 5px;color: white; font-weight: bold;  border-radius: 2px;'>Rs.$pro_price /-</p>
      <img class='imgBox' src='Product_Images/$pro_img1' height = '200px'><br>
      <p class = 'center red-text' id = 'name' style = 'font-weight: bold;'>$pro_title</p>
      <p class = 'center grey-text' id = 'offer' style = 'font-weight: bold;'>Best offers</p>
    </div>";

} ?>

</div>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src = "Js/owl.carousel.min.js"></script>
<script>
  $('.owl-carousel').owlCarousel({
    rtl:false,
    loop:true,
    margin:7,
    autoplay:true,
    responsive:{
        0:{
            items:2
        },
        600:{
        items:3
            },
        1000:{
            items:4
            }
        }
    })
  </script> 

