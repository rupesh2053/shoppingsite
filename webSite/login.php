<?php include 'header.php' ?>
<div class = "bread-crumb">Home / Login</div>
<div class="row">
    <div class="col s12 m12 l8">
      <div class="card login-form">
      <div class="row">
        <div class="col l7 image-area">
        <img src="Product_Images/logoShop.png" height = "250px" width = "100%">
        </div>
      <div class="col l5">
        <div class="card-content">
          <span class="card-title center" id = "title-1">Member Login</span><hr style="background: #4fc3f7;">
          <div class="social-icons">
            <li><i class = "fa fa-facebook"></i></li>
            <li><i class = "fa fa-twitter"></i></li>
            <li><i class = "fa fa-linkedin"></i></li>
          </div>

          <div class="row">
        	<div class="input-field col s12">
         	<input id="uname" type="text" placeholder="username">
        	</div>
     		</div>

     		<div class="row">
        	<div class="input-field col s12">
         	<input id="password" type="password" placeholder="password">
        	</div>
     		</div>

     		<a class="button-login">Login</a>
        <a href="#" class = "forget-pass">Forget <strong>username</strong>/<strong>password</strong> ?</a> 
			  <!--<a href="register.php" class = "right" id = "no-account">Don't have an account?</a> -->
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col s12 l4 m6 product">
    <div class="card cards">
    <div class="card-head right offer"><a class="btn-floating pulse red center">New</a></div>
    <div class="card-content grey-text">
    <span class="card-title"><img src="Product_Images/laptop1.jpg" width = "100%" height = '235px'></span>
    <p class = "title">Kid's School Backpack</p>
    <p class = "product-price">Rs. 4400/- (<span style = "">12% OFF</span>)</p>
  </div>
  </div>
  </div>
  </div>
</div>
  <style>
    .bread-crumb{
      background: #004953;
      color: white;
      padding: 7px;
      margin-top: 5px;
      font-weight: bold;
      letter-spacing: 1px;
    }
    #title-1{
      font-family: 'Odibee Sans', cursive;
      letter-spacing: 2px;
    }
    .image-area img{
      margin-top: 50px;
    }
    .login-form{
      border-radius: 10px;
      height:470px;
      background-color: #fff;
      margin-bottom: -30px;
    }
    .social-icons{
      text-align: center;
    }
    .social-icons li{
      list-style: none;
      display: inline;
      font-size: 20px;
    }
    .social-icons li i{
      height: 40px;
      width: 40px;
      border: 1px solid rgba(0,0,0,.3);
      padding: 10px;
      border-radius: 50%;
      font-weight: bold;
      margin-top: 10px;
      margin-bottom: 10px;
    }
    .fa-facebook{
      color: blue;
    }
    .fa-twitter{
      color: #4fc3f7;
    }
    .fa-linkedin{
      color: red;
    }
    .social-icons li i:hover{
      color: white;
      cursor: pointer;
    }
    .fa-facebook:hover{
      background: blue;
      border-color: blue;
    }
    .fa-twitter:hover{
      background: #4fc3f7;
      border-color: #4fc3f7;
    }
    .fa-linkedin:hover{
      background: red;
      border-color: red;
    }
    #uname,#password{
      border-radius: 50px;
      background: #C0C0C0;
      outline: none;
      border: none;
      color: black;
      font-weight: bold;
      padding-left: 5px;
      text-align: center;
    }
    #password{
      margin-top: -20px;
    }
  	.row .card-content #title-1{
  		font-weight: bold;
      color: #424242;
  	}
  	.row .button-login{
  		border: none;
  		background: #05A044;
  		border-radius: 50px;
  		color: white;
  		font-size: 17px;
  		font-weight: 600;
  		letter-spacing: 1px;
      display: block;
      text-align: center;
      width: 300px;
      margin-left: 5px;
      margin-top: -30px;    
      padding: 6px 0px;
  	}
    .row .button-login:hover{
      background: #388e3c;
    }
    .forget-pass{
      color: grey;
      text-decoration: none;
      margin-left: 67px;
    }
  	@media only screen and (max-width: 360px) {
  	.row .button-login, .button-login-fb{
  		padding: 5px;
  		letter-spacing: 0px;
  		margin-top: -20px;
  	}
  	.row .button-login{
  		margin-top: -20px;
  		padding: 10px;
  	}
  	.row .card-content #title-1{
  		font-size: 18px;
  		font-weight: bold;
  		letter-spacing: 2px;
  	}
  	.row .card-content #title-2{
  		font-size: 16px;
  		font-weight: bold;
  	}
  	.row .card-content #no-account{
  		margin-top: 8px;
  		font-size: 17px;
  	}
}
@media only screen and (max-width: 420px){
	.row .card-content #no-account{
  		margin-top: 7px;
  		font-size: 17px;
  	}
}
</style>
<?php include 'footer.php' ?>