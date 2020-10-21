<?php include 'header.php'; ?>
<div id = "bread-crumb">Home / Product</div>
<div class="row" style = 'margin-top: 7px;'>

<div class="col l3 s12 m4">
  <div style = "background: black; padding: 5px;border-radius: 5px; color: white;">
    <i class="material-icons" style = "color: red; font-size: 20px; font-weight: 700;">add_shopping_cart</i> 3 items in your cart 
  <button class = "right" style = "border-radius: 5px; border: none;padding: 4px 15px; background: orange; color: white;">300$</button>
  </div>
  <div class="card" style = "border-radius: 5px; background: rgba(0,0,0,0.9);">
        <div class="card-content white-text">
          <span class="card-title">Headphones[210]</span>
          <hr>
      <p class = "white-text"><i class="material-icons left">chevron_right</i>Beats (100)</p><hr>
      <p class = "white-text"><i class="material-icons left">chevron_right</i>Apple (70)</p><hr>
      <p class = "white-text"><i class="material-icons left">chevron_right</i>Others (40)</p><hr>
        </div>
      </div>
    <div style = "background: black; padding: 5px;border-radius: 5px; color: white;">
    <p class = "white-text"><i class="material-icons left">chevron_right</i>MP4 Players [70]</p><hr>
    <p class = "white-text"><i class="material-icons left">chevron_right</i>Powerbanks [40]</p><hr>
  </div>
</div>


<div class="col l9 s12 m8 carousel-main-body">
  <div class="wrapper">
    <span id = "product-carousel" class = "red-text" style = "">Featured Products</span>
    <span class = "right" id = "total">200+ Featured Products</span>

    <div class="owl-carousel owl-theme themeOwl">
  <?php
    $get_products = "SELECT * FROM product ORDER BY 1 DESC";
    $run_products = mysqli_query($conn,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){
      $pro_title = $row_products['product_title'];
      $pro_price = $row_products['product_price'];
      $pro_img1 = $row_products['product_img1'];
      $pro_discount = $row_products['discount'];
      echo "
        <div class='item'>
          <img src='Product_Images/$pro_img1' height = '200px'>
          <p class = 'center black-text'>$pro_title</p>
          <a class = 'button left'>View</a>
          <span class = 'right'>Rs.$pro_price /-</span>
        </div>
      ";
    }
  ?>
  </div>
</div>
</div>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src = "Js/owl.carousel.min.js"></script>
<script src = 'Js/productSlider.js'></script>

<?php include 'grid.php'; ?>
<?php include 'footer.php'; ?>
<style>
  #bread-crumb{
  background: #004953;
  color: white;
  padding: 7px;
  margin-top: 5px;
  font-weight: bold;
  letter-spacing: 1px;
  }
</style>