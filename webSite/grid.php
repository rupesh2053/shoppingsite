<div class="row">
<div class="col m3 s6">
    <div class="product-grid">
    <div class="product-image">
    <a href="#"><img class="pic-1" src="Product_Images/img-1.jpg" width = "100%"><img class="pic-2" src="Product_Images/img-2.jpg" width = "100%"></a>
    <span class="product-trend-label">Trending</span>
    <ul class="social">
        <li><a href="details.php" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
        <li><a href="#" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
        <li><a data-tip="Quick View" class="modal-trigger" href="#modal1"><i class="fa fa-search"></i></a></li>
    </ul>
    </div>
    <div class="product-content">
        <h3 class="title"><a href="#">Men's Blazer</a></h3>
    <div class = "white-text">$21.00</div>
    </div>
    </div>
</div>


<div class="col m3 col s6">
    <div class="product-grid">
    <div class="product-image">
    <a href="#"><img class="pic-1" src="Product_Images/img-3.jpg" width = "100%"><img class="pic-2" src="Product_Images/img-4.jpg" width = "100%"></a>
    <span class="product-trend-label">Trending</span>
    <span class="product-discount-label">-20%</span>
    <ul class="social">
        <li><a href="details.php" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
        <li><a href="#" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
        <li><a data-tip="Quick View" class="modal-trigger" href="#modal1"><i class="fa fa-search"></i></a></li>
    </ul>
    </div>
    <div class="product-content">
        <h3 class="title"><a href="#">Women's Button Top</a></h3>
    <div class = "white-text"><strike class = "red-text"><span class = "white-text">$17.00</span></strike> $13.60</div>
    </div>
    </div>
</div>
           
           
<div class="col m3 col s6">
    <div class="product-grid">
    <div class="product-image">
    <a href="#"><img class="pic-1" src="Product_Images/img-5.jpg" width = "100%"><img class="pic-2" src="Product_Images/img-6.jpg" width = "100%"></a>
    <span class="product-trend-label">Trending</span>
    <span class="product-discount-label">-20%</span>
    <ul class="social">
        <li><a href="details.php" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
        <li><a href="#" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
        <li><a data-tip="Quick View" class="modal-trigger" href="#modal1"><i class="fa fa-search"></i></a></li>
    </ul>
    </div>
    <div class="product-content">
    <h3 class="title"><a href="#">Women's Button Top</a></h3>
    <div style = "color: white;"><strike class = "red-text"><span class = "white-text">$17.00</span></strike> $13.60</div>
    </div>
    </div>
</div>
           
            
<div class="col m3 col s6">
    <div class="product-grid">
    <div class="product-image">
    <a href="#"><img class="pic-1" src="Product_Images/img-7.jpg"><img class="pic-2" src="Product_Images/img-8.jpg"></a>
    <span class="product-trend-label">Trending</span>
    <span class="product-discount-label">-20%</span>
    <ul class="social">
        <li><a href="details.php" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
        <li><a href="#" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
        <li><a data-tip="Quick View" class="modal-trigger" href="#modal1"><i class="fa fa-search"></i></a></li>
    </ul>
    </div>
    <div class="product-content">
    <h3 class="title"><a href="#">Women's Button Top</a></h3>
    <div style = "color: white;"><strike class = "red-text"><span class = "white-text">$17.00</span></strike> $13.60</div>
    </div>
    </div>
</div>

</div>
</div>
</div>


<!-- Model Design -->
<div id="modal1" class="modal myModal white">
    <div class="modal-content">
    <div class="row">
    <div class="col l6 s12 m6">
        <img src="Product_Images/myShoes.jpg" width = "100%" class = "modal-close">
    </div>
    <div class="col l6 s12 m6">
    <div class="product-details">
        <p id = "pname">Original Shoes</p>
        <p id = "pdesc">Awsome shoes for man.</p>
        <p id = "desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
    </div>

    <div class="product-sizes">
        <p>sizes</p>
        <li>X</li>
        <li>L</li>
        <li>XL</li>
        <li>XXL</li>
        </div><br>

    <div class="product-color">
        <li id = "red"></li>
        <li id = "green"></li>
        <li id = "blue"></li>
        <li id = "black"></li>
        <li id = "pink"></li>
    </div><br>

    <div>
        <span  class="product-price">Price: <span>90$</span></span>
        <a href = "details.php" class = "right btn-flat cart">Add to cart</a>
        </div>

    </div>
    </div>
    </div>
</div>

<style>
    .myModal{
        border-radius: 7px;
    }
    .product-details #pname{
        font-size: 24px;
        font-weight: 700;
        text-transform: uppercase;
        color:#ff1744;
    }

    .product-details #pdesc{
        text-transform: uppercase;
        color:lightgrey;
        margin-top: -25px;
    }

    .product-details #desc{
        color: #d7ccc8;
    }

    .product-sizes p{
        text-transform: uppercase;
        font-weight: 600;
        color: grey;
    }

    .product-color li{
        list-style: none; 
        display: inline; 
        margin: 5px;
        padding: 4px 14px;
        border-radius: 50%;
    }
    .product-color #red{
        background: red;
    }
    .product-color #green{
        background: green;
    }
    .product-color #pink{
        background: pink;
    }
    .product-color #black{
        background: black;
    }
    .product-color #blue{
        background: blue;
    }
    .product-color #red:hover, #green:hover, #blue:hover, #black:hover, #pink:hover{
        border: 1px solid rgba(0,0,0,0.4);
    }
    .product-sizes li{
        list-style: none; 
        display: inline; 
        margin: 5px;
        border: 2px solid rgba(0,0,0,0.4);
        padding: 3px;
        border-radius: 5px;
    }
    .product-price{
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: grey;
    }
    .product-price span{
        color: #e53935;
        font-weight: 800;
        font-size: 17px;

    }
    .cart{
        background: #ff1744;
        border: none;
        color: white;
        border-radius: 4px;
        font-family: sans-serif;
        font-weight: 600;
        text-transform: uppercase;
        transition: .3s ease-in-out;
    }
    .cart:hover{
        transform: scale(1.1);
        background: #c62828;
    }
    .row img{
        transition: .3s ease-in-out;
    }
    .row img:hover{
        transform: scale(1.1);
    }

    @media only screen and (max-width:375px){
     .product-image .product-trend-label{
        font-size: 12px;
        margin-left: -10px;
        margin-top: -10px;
     }
     .product-image  .product-discount-label{
        font-size: 12px;
        margin-top: -10px;
        margin-right: -9px;
     }
     .product-content .title{
        font-size: 12px;
        font-weight: 300;
     }
     .product-grid .social li a{
        font-size: 15px;
        color: red;
     }
    }

    @media only screen and (max-width:600px){
    .row img {
        margin-top: -50px;
        height: 250px;

       }
    .product-details #pname{
        font-size: 20px;
        margin-top: -35px;
    }
    .cart{
        font-size: 13px;
    }
    }
    @media only screen and (max-width: 798px) and (min-width: 601px){
    .row img {
        margin-top: -80px;
    }
    .product-details #pname{
        margin-top: -20px;
        font-size: 16px;
    }
    .product-price{
        font-size: 16px;
    }

    .product-price span{
        font-size: 16px;

    }
    .product-details #desc{
        margin-top: 10px;
    }
    .cart{
        font-size: 12px;
        padding: 0 5px;
    }
    }
</style>