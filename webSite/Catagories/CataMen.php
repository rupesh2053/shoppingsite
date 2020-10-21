<?php include 'header.php' ?>
<div id = "bread-crumb">Home / Catagories / Men</div>
<div class='row'>
	<div class="col l3 s12 m4 hide-on-small-only">
		<?php include '../SideNav/sideNav.php' ?>
	</div>
<div class="col s12 l9 m8">
<div class="row" style = "margin-top: 7px;">
<?php
    $get_products = "SELECT * FROM product WHERE catagories = 'Men' ORDER BY 1 DESC";
    $run_products = mysqli_query($conn,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        $pro_descount = $row_products['discount'];
        $pro_stock = $row_products['stock'];
        $pro_desc = $row_products['product_desc'];
        $pro_cata = $row_products['product_catagories'];

        
        	echo "<div class='col l3 m6 s6 pro-body'>
        		<div class='prod-contents center'>

        		<div class='card-head right offer'><a>
        			<i class = 'fa fa-heart'></i></a></div>

        			<div class='prod-img'>
        				<img src='../Product_Images/$pro_img1'>
        			</div>
        			<div class='pro-speci'>
        			<div id='pro-cata'>$pro_cata</div>
        			<div id='pro-title'>$pro_title</div>
        			<div id='pro-price'>Rs.$pro_price /- <span>($pro_descount)% off</span></div>
        			<div class = 'rate'><span>Rate: </span>
        				<i class = 'fa fa-star'></i>
        				<i class = 'fa fa-star'></i>
        				<i class = 'fa fa-star'></i>
        				<i class = 'fa fa-star'></i>
        				<i class = 'fa fa-star'></i>
        			</div>
        			<div class = 'size'><span>Size:</span> XL L M S XS </div>
        			<a href = '#' id = 'add-to-cart-btn'>Add to cart</a>
        			</div>
        		</div>
        	</div>";

        } ?>
        </div>
    </div>
</div>
<div class="row" style = "margin-bottom: 80px;">
	<div class="col l12 s12 m12">
		<?php include '../Pagination\pagination.php' ?>
    </div>
</div>

<style>
    #bread-crumb{
      background: #004953;
      color: white;
      padding: 7px;
      margin-top: 5px;
      font-weight: bold;
      letter-spacing: 1px;
    }
    .offer a{
    color: #004953;
    }
    .offer i{
        font-size: 26px;
    }
    .pro-body{
        background: white;
        border-right: 1px solid rgba(0,0,0,0.3);
        border-bottom: 1px solid rgba(0,0,0,0.3);
    }
    .pro-body:hover{
        transform: scale(1.002);
        box-shadow: 1px 1px 1px 1px rgba(0,0,0,.2);
    }
    .prod-img img{
        height: 250px;
        width: 235px;
        transition: .3s ease-in-out;
    }
    .prod-img img:hover{
        transform: scale(1.03);
    }
            
    #pro-cata{
        font-weight: bold;
        color: grey;
    }
    #pro-title{
        font-weight: bold;
        font-size: 18px;
    }
    #pro-price{
        font-weight: bold;
    }
    #pro-price span{
        color: green;
    }
    #add-to-cart-btn{
        background: #126D7A;
        color: white;
        padding: 5px;
        display: block;
        margin-bottom: 7px;
        font-weight: bold;
        border-radius: 2px;
        text-align: center;
    }
    .rate span{
        color: grey;
        font-weight: 500;
    }
    .rate i{
        color: #c62828 ;
    }
            
    @media (max-width: 1280px){
     .prod-img img{
        height: 220px;
        width: 215px;
     }
     #pro-title{
        font-size: 14px;
     }
    }
    @media (max-width: 1080px){
     .prod-img img{
        height: 180px;
        width: 180px;
     }
    }
    @media (max-width: 480px){
        .prod-img img{
            height: 120px;
            width: 170px;
       }
      #pro-title{
       font-size: 14px;
      }
    }
    @media (max-width: 360px){
     .prod-img img{
        height: 120px;
        width: 130px;
     }
     #pro-title{
        font-size: 14px;
     }
    }
    @media (max-width: 320px){
     .prod-img img{
        height: 120px;
        width: 130px;
     }
     #pro-title{
        font-size: 12px;
     }
     #pro-price{
        font-size: 14px;
        font-weight: 600;
     }
    }
</style>

<?php include '../footer.php'; ?>