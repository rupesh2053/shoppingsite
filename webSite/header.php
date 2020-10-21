<?php include 'Connection/db_connection.php'; ?>
<?php include 'Styles/links.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Js/owl.carousel.min.css"> 
  <link rel="stylesheet" href="Js/owl.theme.default.min.css">
  <link rel="stylesheet" href="Styles/MainStyle.css">
  <link rel="stylesheet" href="Styles/ProductCardStyle.css">
  <link rel="stylesheet" href="Styles/bestDealStyle.css">
  <link rel="stylesheet" href="Styles/WebStyle.css">
  <link rel="stylesheet" href="Styles/searchBoxStyle.css">
  <link rel="stylesheet" href="Style/colorChangerStyle.css">
  <link rel="stylesheet" type="text/css" href="Styles/headerStyle.css">
</head>
<body>
    <nav class = "nav-wrapper nav-extended">
        <a href="index.php" class="brand-logo hide-on-med-and-down">
        <img src="Product_Images/logoShop.png" height = "64px" width = "130px">
        </a>

        <a href="#" class = "sidenav-trigger" data-target = "mobile">
        	<i class = "material-icons">menu</i>
        </a>

        <a class = "button hide-on-large-only" id = "welcome">WELCOME : dulalrupesh77@gmail.com</a>

       <ul class="tabs tabs-transparent hide-on-med-and-down">
        <li class="tab right"><a href="contact.php" class = 'white-text'>CONTACT US</a></li>
        <li class="tab right"><a href="cart.php" class = 'white-text'>SHOPPING CART</a></li>

        <li class="tab right"><a href="myaccount.php" class = 'white-text'>MY ACCOUNT</a></li>
        <li class="tab right"><a href="shop.php" class = 'white-text'>SHOP</a></li>
        <li class="tab right"><a href="product.php" class = 'white-text'>PRODUCTS</a></li>

        <li class="tab right"><a href="index.php" class = 'white-text'>HOME</a></li>

    </ul>

    <div class="nav-content content-navbar hide-on-med-and-down">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="Catagories/CataAccessories.php" class = 'white-text'>Electronics <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="phoneProductFilter.php" class = 'white-text'>Mobiles<i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="Catagories/CataMen.php" class = 'white-text'>Men <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="Catagories/CataWomen.php" class = 'white-text'>Women <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="Catagories/CataKids.php" class = 'white-text'>Kids <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="Catagories/CataAccessories.php" class = 'white-text'>Furniture <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="Catagories/CataTshirt.php" class = 'white-text'>Books <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="Catagories/CataOthers.php" class = 'white-text'>Sports <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="Catagories/CataOthers.php" class = 'white-text'>Others <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="Catagories/CataHeadphones.php" class = 'white-text'>Appliances <i class = 'fa fa-angle-down'></i></a></li>

        <li class="tab"><a href="Catagories/CataHeadphones.php" class = 'white-text'>Offers <i class = 'fa fa-angle-down'></i></a></li>
      </ul>
    </div>
    </nav>

    <ul class="sidenav" id = "mobile">
      <header>Digital Closet <img src="Product_Images/logoShop.png" height = "70px">
      </header>
        <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
        <li><a href="product.php"><i class="fab fa-product-hunt"></i>Products</a></li>
        <li><a href="shop.php"><i class="fas fa-shopping-bag"></i>Shop</a></li>
        <li><a href="Catagories/CataAccessories.php"><i class="fas fa-calendar-week"></i>Events/Offers</a></li>
        <li><a href="myaccount.php"><i class="fas fa-smile"></i>My Accounts</a></li>
        <li><a href="cart.php"><i class="  fas fa-shopping-cart"></i>Cart</a></li>
        <li><a href="contact.php"><i class="fas fa-phone-alt"></i>Contact</a></li>

        <header>Users area</header>
        <li><a href="register.php"><i class="fas fa-sign-in-alt"></i>Register</a></li>
        <li><a href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>

        <header>Catagories</header>
        <li><a href="Catagories/CataMen.php"><i class="fas fa-male"></i>Men</a></li>
        <li><a href="Catagories/CataWomen.php"><i class="fa fa-female"></i>Women</a></li>
        <li><a href="Catagories/CataKids.php"><i class="fas fa-child"></i>Kids</a></li>
        <li><a href="Catagories/CataAccessories.php"><i class="fas fa-male"></i>Others</a></li>
        <li><a href="Catagories/CataPhone.php"><i class="fas fa-mobile-alt"></i>Mobiles</a></li>
        <li><a href="Catagories/CataHeadphones.php"><i class="fas fa-tv"></i>Headphones</a></li>
        <li><a href="Catagories/CataTshirt.php"><i class="fas fa-laptop"></i>T-Shirts</a></li>

        <!-- <li><a href="index.php"><i class="fas fa-bed"></i>Furniture</a></li>
        <li><a href="Catagories/CataTshirt.php"><i class="fas fa-book"></i>Books</a></li> -->
        <li><a href="Catagories/CataJacket.php"><i class="fas fa-gamepad"></i>Jackets</a></li>
        <li><a href="Catagories/CataAccessories.php"><i class="fas fa-utensil-spoon"></i>Appliances</a></li>
    </ul>

	<div class="header">
	  <ul>
	    <li><a class = "button hide-on-med-and-down" id = "welcome">WELCOME RUPESH</a></li>
	    <li class = "search-product"><form autocomplete="off"><!-- Search Bar Starting -->
	    <div class="autocomplete">
	    <input id="myInput" type="text" name="myCountry" placeholder="Search">
	    </div>
	    <a href="#"> <i class = "fa fa-search"></i></a>
	    </form></li><!-- Search Bar End -->
      <li class = "right-toggle hide-on-small-only cart-main"><a href="cart.php">
      <span class = "right white red-text cart-style">5</span>
      <i class = "material-icons right">local_grocery_store</i></a></li>
	    <li class = "right-toggle hide-on-med-and-down"><a href="register.php">Register</a></li>
	    <li class = "right-toggle hide-on-small-only"><a href="myaccount.php">Account </a></li>
	    
	    <li class = "right-toggle hide-on-small-only"><a href="login.php">Login</a></li>
	  </ul>
	</div>

<style>
  @media (max-width: 320px){
  }
  #welcome{
    font-size: 12px;
  }
 }
</style>

<script src = "Js/SidenavScript.js"></script>
<script src = "Js/productScript.js"></script>
<script src = "Js/searchBoxScript.js"></script> <!-- search box script -->


