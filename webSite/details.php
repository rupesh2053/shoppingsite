<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="Styles/detailsPageStyle.css">
</head>
<body>

<div id = "bread-crumb">Home / Cart / T-Shirt / Women's T-Shirt</div>

<div class="row">
  <div class="col s12 m12 l5">
    <div class="row white" style = 'height: 434px'>

      <div class="col l2 m2 s3">
      <div class="card-content product-image-view">
          <img src="Product_Images/bag.jpg" width = "60px" height = "60px">
          <img src="Product_Images/bag.jpg" width = "60px" height = "60px">
          <img src="Product_Images/bag.jpg" width = "60px" height = "60px">
          <img src="Product_Images/bag.jpg" width = "60px" height = "60px">
          <img src="Product_Images/bag.jpg" width = "60px" height = "60px">
          <img src="Product_Images/bag.jpg" width = "60px" height = "60px">
      </div></div>

      <div class="col l10 m9 s9">
      <div class="right love"><a href="#"><i class = "fa fa-heart"></i></a></div>
      <div class="card-content product-img">
            <img src="Product_Images/bag.jpg" width = "100%" height = "350px">
      </div>
      </div>
      
    

    <a href="#"><span id="add-cart-btn"><i class = 'fas fa-cart-plus'></i> Add to cart</span></a>
    <a href="#"><span id="buy-now-btn"><i class = 'fa fa-flash'></i> Buy now</span></a>
  </div>
  </div>

  <div class="col s12 m12 l7 white" id = 'description-section'><!-- Product Description -->
  <div class="card-content">
    <div class="pro-title-cata"><!-- product name and catagory section -->
      <span id = 'pro-cata'>Kids / Bagpack</span><br>
      <span id = 'pro-title'>Kids red school bagpack</span> 
    </div>

    <div class = "pro-price-disc"><!-- product price, discount and in-stock section -->
      <span id = 'rs'>Rs.</span><span id = 'price'> 2700 </span>
      <span id = 'discount'>(30% off)</span>
      <span id = 'in-stock'>Only <span id = 'itm-num'><i>3</i></span> items in stock, hurry.</span>
    </div><hr>

    <div class="card-content"  id = "product-colors"><!-- product color section -->
      <img src="Product_Images/bag.jpg">
      <img src="Product_Images/bag.jpg">
      <img src="Product_Images/bag.jpg">
      <img src="Product_Images/bag.jpg">
      <img src="Product_Images/bag.jpg">
      <img src="Product_Images/bag.jpg">
    </div>

    <div class="card-content" id = "product-size"><!-- product size section -->
      <span>Size</span>
      <li>S</li>
      <li>M</li>
      <li>X</li>
      <li>XL</li>
      <li>XXL</li>  
    </div>

    <div class="card-content" class = "product-details"><!-- product details section -->
      <p>Product Details </p><hr>
        <span id = 'color'>Color : </span><span id='color-value'>Red</span><br>
        <span id = 'type'>Type : </span><span id='type-value'>Round edge</span><br>
        <span id = 'name'>Name : </span><span id='name-value'>Kids school bagpack</span><br>
        <span id = 'package'>Sales Package : </span><span id='package-value'>One</span>
    </div><hr>

  </div>
  </div>
</div><!-- Product Description Ends -->



 <div class="row">
    <div class="col s12 l12 white" id = 'rating-section'>
        <div class="card-content rating">
          <span id = "title">Rating & Review
          <span id = "total-rate">4.4 <i class = "fa fa-star"></i></span>
          <span id = "rating-review">9 rating and 3 reviews</span></span>
          <span><div class="button right btn-rate hide-on-small-only">Rate Product</div></span><hr style = "margin-top: 15px; background: grey;">
         
          <span id = "users-review">Best Product Thankyou Digital Closet</span><i class = "fa fa-thumbs-up t-up"></i>
          <div class = "users-name">
            <span>Rupesh Dulal</span><span id = "review-date">2 days ago</span>

            <span id = "thumb"><i id = "thumb-down" class = "fa fa-thumbs-down right"> 0</i><i class = "fa fa-thumbs-up right" id = "thumb-up"> 2</i></span>

          </div>

          <div class = "certified-user"><i class = "fa fa-check-circle" id = "cert-icon"></i>
            <span id = "cert-title">certified buyer<span id = "users-location" >Pokhera</span>
          </div><hr style = "margin-top: 15px; background: grey;">

          <span id = "users-question">Have doubts?</span>
          <div class="button right btn-post-qst">Post your question</div><hr>
          <div class = "QA">Question : <span> delivary days?</span></div>
          <div class = "QA">Answer : <span> it takes 2 to 3 days to us.</span></div>
      
      </div>
    </div><!-- Review and Rating -->
</div><!-- Review and Rating End -->


<!-- Similar Product Section Start -->
<div class="row contents">
<div class="deal-header">Similar products
<span class = "right"><button class = "view-all-btn">View all</button></span>
</div><hr><p></p>

<?php
  $get_products = "SELECT * FROM product WHERE product_catagories = 'Headphones' ORDER BY 1 DESC limit 6";
  $run_products = mysqli_query($conn,$get_products);
  while($row_products=mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        $pro_descount = $row_products['discount'];
        $pro_cata = $row_products['product_catagories'];

  echo "
      <div class='col s6 l2 m4 product'>
      <div class='card-head'><a href='#'><i class = 'fa fa-heart right'></i></a></div>
      <div class='card-content center'>
      <a href='#'><img src='Product_Images/$pro_img1' height = '180px' width = '100%'></a>
      <div class='name center'>$pro_title</div>
      <div class='discount center'>Upto $pro_descount% off</div>
      <div class='deal center'>$pro_cata</div>
      <div class='rating'>4.4 <i class = 'fa fa-star'></i> (400)</div>
      </div>
    </div>";
  }?>
</div><!-- Similar Product Section End -->


<!-- You might be interested in Section Start -->
<div class='row contents' style = 'margin-top: 20px'>
<div class='deal-header'>You might be interested in</div><hr><p></p>
<?php
  $get_products = "SELECT * FROM product WHERE product_catagories = 'Shoes' ORDER BY 1 DESC limit 6";
  $run_products = mysqli_query($conn,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        $pro_descount = $row_products['discount'];
        $pro_cata = $row_products['product_catagories'];
  echo "
      <div class='col s6 l2 m4 product'>
        <div class='card-content center'>
        <a href='#'><img src='Product_Images/$pro_img1' height = '180px' width = '100%'></a>
        <div class='name center'>$pro_title</div>
        <div class='discount center'>Upto $pro_descount% off</div>
        <div class = 'shop-now'><a href='#'>Shop now</a></div>
        </div>
      </div>";
    } 
?>
</div><!-- You might be interested in Section End -->



<div class="row" style = 'margin-top: 20px'><!-- Comment Section Start -->
  <div class="col s12 l12 white" style = 'padding: 25px'><!-- Comment Write Section Start -->
    <div style = "height: 110px">
      <div class="card-content">
        <input type="text" placeholder="Name" id = 'comment-sender'>
        <input type="text" placeholder="Comment" id = 'comment-write'>
        <button id = 'post-btn' class = 'right'>Post</button>
      </div>
    </div><!-- Comment Write Section Ends -->
  </div>
</div>

<?php
  $get_comment = "SELECT * FROM tbl_comment";
  $run_comment = mysqli_query($conn,$get_comment);
  while($row_comment=mysqli_fetch_array($run_comment)){
    $sender = $row_comment['comment_sender_name'];
    $comment = $row_comment['comment'];
    $date = $row_comment['date'];

  echo "<div class='col s12 l12 white' style = 'padding: 25px 5px; border-radius: 3px;'>
        <div class='card-content'>
          <span class='card-title' id = 'sender-details'>By <i><strong>$sender</strong></i> on $date
          </span>
        <p id = 'comment'>$comment</p>
        <button class = 'right' id = 'reply-btn'>reply</button>
        <div style = 'padding: 6px'></div>
        </div>
        </div> <br>"; }?>
</div><!-- Comment Section End -->

<?php include 'footer.php'; ?>

<style>
  @media (max-width: 1000px){
    #rating-section{
      margin-top: 0px;
    }
  }
   @media (max-width: 400px){
    .rating #rating-review, .rating #total-rate, .rating #title{
      font-size: 14px;
    }
  }
  @media (max-width: 320px){
    #sender-details{
      font-size: 14px;
    }
  }
</style>