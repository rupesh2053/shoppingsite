<?php include '../Connection/db_connection.php'; ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet" href="../Js/owl.carousel.min.css"> 
  <link rel="stylesheet" href="../Js/owl.theme.default.min.css">

  <link rel="stylesheet" type="text/css" href="../Styles/MainStyle.css">
  <link rel="stylesheet" type="text/css" href="../Styles/ProductCardStyle.css">
  <link rel="stylesheet" type="text/css" href="../Styles/bestDealStyle.css">
  <link rel="stylesheet" type="text/css" href="../Styles/WebStyle.css">
  <link rel="stylesheet" type="text/css" href="../Styles\searchBoxStyle.css">
  <link rel="stylesheet" type="text/css" href="../Style/colorChangerStyle.css">
</head>

<body>
  <nav class = "nav-wrapper nav-extended">
    <a href = "#" class = "sidenav-trigger" data-target="mobile-links"><i class = "material-icons grey-text">menu</i></a>

    <a href="index.php" class="brand-logo hide-on-med-and-down"><img src="../Product_Images/logoShop.png" height = "64px" width = "130px"></a>
    <a class = "button hide-on-med-and-up" id = "welcome">WELCOME : RUPESH</a>

    <ul class="tabs tabs-transparent hide-on-small-only">
      <li class="tab right"><a href="../contact.php" class = 'white-text'>CONTACT US</a></li>
      <li class="tab right"><a href="../cart.php" class = 'white-text'>SHOPPING CART</a> </li>
      <li class="tab right"><a href="../myaccount.php" class = 'white-text'>MY ACCOUNT</a></li>
      <li class="tab right"><a href="../shop.php" class = 'white-text'>SHOP</a></li>
      <li class="tab right"><a href="../product.php" class = 'white-text'>PRODUCTS</a></li>
      <li class="tab right"><a href="../index.php" class = 'white-text'>HOME</a></li>
    </ul>

    <div class="nav-content content-navbar hide-on-small-only">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="../Catagories/CataAccessories.php" class = 'white-text'>Electronics <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="../Catagories/CataTshirt.php" class = 'white-text'>TVs <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="../Catagories/CataMen.php" class = 'white-text'>Men <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="../Catagories/CataWomen.php" class = 'white-text'>Women <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="../Catagories/CataKids.php" class = 'white-text'>Kids <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="../Catagories/CataAccessories.php" class = 'white-text'>Furniture <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="../Catagories/CataTshirt.php" class = 'white-text'>Books <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="../Catagories/CataOthers.php" class = 'white-text'>Sports <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="../Catagories/CataOthers.php" class = 'white-text'>Others <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="../Catagories/CataHeadphones.php" class = 'white-text'>Appliances <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="../Catagories/CataHeadphones.php" class = 'white-text'>Offers <i class = 'fa fa-angle-down'></i></a></li>
      </ul>
    </div>
</nav>

  <ul class="sidenav" id = "mobile-links">
    <li><a href="../index.php">Home</a></li>
    <li><a href="../product.php">Product</a></li>
    <li><a href="#">SHOP</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">Register</a></li>
    <li><a href="../myaccount.php">My Account </a></li>
    <li><a href="#">Go To Cart</a></li>
    <li><a href="#">Login</a></li>
  </ul>

  
   
 <div class="header">
    <ul>
    <li><a class = "button hide-on-small-only" id = "welcome">WELCOME RUPESH</a></li>

    <li class = "search-product"><!-- Search Bar Starting -->
    <form autocomplete="off">
    <div class="autocomplete">
    <input id="myInput" type="text" name="myCountry" placeholder="Search">
    </div>
    <a href="#"> <i class = "fa fa-search"></i></a>
    </form>
    </li><!-- Search Bar End -->

    <li class = "right-toggle hide-on-med-and-down"><a href="../register.php">Register</a></li>

    <li class = "right-toggle hide-on-med-and-down"><a href="../myaccount.php">My Account </a></li>

    <li class = "right-toggle hide-on-small-only cart-main"><a href="../cart.php">
      <span class = "right white red-text cart-style">5</span>
      <i class = "material-icons right">local_grocery_store</i>
      </a>
    </li>

    <li class = "right-toggle hide-on-med-and-down"><a href="../login.php">Login</a></li>
    </ul>
  </div>

<style>
  .content-navbar li a:hover{
    transform: scale(1.1);
  }
  .header{
    background: #126D7A;
    height: 60px;
  }
  .header ul li{
    display: inline-block;
    padding: 10px;
    color: white;
  }
  .header ul li a{
    font-size: 15px;
    font-weight: 600;
    color: white;
  }
  .header ul{
    padding: 0;
    margin: 0;
  }
  #welcome{
    background-color: tomato;
    border-radius: 5px;
    padding: 5px 10px 5px 10px;
    font-size: 15px;
  }
  .right-toggle{
    float: right;
  }
  .cart-style{
    padding: 0px 7px;
    font-size: 18px;
    border-radius: 50%;
    margin-top: -8px;
    font-weight: bold;
  }
  .fa-search{
    margin-left: 7px;
  }
  /*search box media query for responsive*/
  @media (max-width: 1024px){
  .cart-main{
    margin-top: 7px;
   }  
  }
  @media (max-width: 786px){
  .autocomplete{
    width: 440px;
  }
 }
  @media (max-width: 640px){
  .autocomplete{
    width: 330px;
    margin-left: -15px;
  }
 }
 @media (max-width: 480px){
  .autocomplete{
    width: 420px;
    margin-left: -30px;
  }
 }
 @media (max-width: 420px){
  .autocomplete{
    width: 350px;
  }
 }
 @media (max-width: 375px){
  .autocomplete{
    width: 300px;
    margin-left: -30px;
  }
 }
 @media (max-width: 320px){
  .autocomplete{
    width: 260px;
    margin-left: -30px;
  }
 }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src = "../Js/productScript.js"></script>
<script src = "../Js/searchBoxScript.js"></script> <!-- search box script -->

