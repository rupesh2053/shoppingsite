<?php include 'header.php' ?>
    <style>
    	#second,#third,#result{
    		display: none;
    	}
    	#name,#username,#email,#phone,#pass,#cpass{
    		border: none;
    		border: 1px solid rgba(0,0,0,0.4);
    		outline: none;
    		padding-left: 2px;
    		border-radius: 3px;
    		background: grey;
    		color: white;
    	}
    	#name:hover,#username:hover,#email:hover,#phone:hover,#pass:hover,#cpass:hover,
    	#username:focus,#name:focus,#email:focus,#phone:focus,#pass:focus,#cpass:focus{
    		border-color: green;
    		cursor: pointer;
    	}
    	.result-section{
    		border-radius: 3px;
    		font-weight: 370;
    	}
    	.progress{
    		height: 30px; 
    		border-radius: 3px;
    	}
    	#progressBar{
    		width: 30%; 
    		font-weight: bold;
    		letter-spacing: 1px;
    	}
    	h5{
    		font-weight: 400; 
    		padding: 5px; 
    		border-radius: 3px;
    	}
    	#card-main-body{
    		height: 400px;
    	}
    	#social-signup{
      			padding: 10px;
      			background: rgba(0,0,0,0.8);
      			height: 400px;
      			color: white;
      		}
      		#page-title{
      			font-size: 16px;
      			padding: 20px 0px;
      			font-weight: 500;
      		}
      		#social-signup li{
      			list-style: none;
      			display: block;
      			color: white;
      			margin-top: 4px;
      			padding: 7px;
      			border-radius: 4px;
      			padding-left: 40px;
      			font-weight: bold;
      			font-size: 18px;
      			transition: .2s ease;
      		}
      		#social-signup li:hover{
      			transform: scale(1.04);
      		}
      		#social-signup li span{
      			padding-left: 7px;
      		}
      		#social-signup #facebook{
      			background: #3b5998;
      		}
      		#social-signup #google-plus{
      			background: #d34836;
      		}
      		#social-signup #twitter{
      			background: #00acee;
      		}
          @media (max-width: 480px){
            #social-signup{
              height: 230px;
            }
          }
    </style>    

	<div class="row">

    <div class="col s12 l8 m12">
      <div class="card" id = "card-main-body">
    	<div class="row">
    	<div class="col l7 s12 m6">
        <div class="card-content">
        	<div class="result-section green center">
        	<span class = "card-title white-text" id = "result"></span>
        	</div>

          <div class="progress">
          	<div class="determinate red center" id = "progressBar">
          	<span class = "white-text" id = "progressText">step - 1</span> </div>
          </div>
          <form action="" method="post" id = "form-data">
          	<div id="first">
          		<h5 class = "center green white-text">Personal Info</h5>
          		<div>
          			<input type="text" name="name" placeholder="full name" id = "name">
          			<b class = "red-text" id = "nameError"></b>
          		</div>

          		<div>
          			<input type="text" name="username" placeholder="Username" id = "username">
          			<b class = "red-text" id = "usernameError"></b>
          		</div>

          		<div>
          			<a href="#" class = "btn" id = "next-1">Next</a>
          		</div>
          	</div>

          	<div id="second">
          		<h5 class = "center green white-text">Contact Info</h5>

          		<div>
          			<input type="email" name="email" placeholder="E-mail" id = "email">
          			<b class = "red-text" id = "emailError"></b>
          		</div>

          		<div>
          			<input type="tel" name="phone" placeholder="Phone" id = "phone">
          			<b class = "red-text" id = "phoneError"></b>
          		</div>

          		<div>
          			<a href="#" class = "btn red" id = "prev-2">Previous</a>
          			<a href="#" class = "btn" id = "next-2">Next</a>
          		</div>
          	</div>

          	<div id="third">
          		<h5 class = "center green white-text">Choose Password</h5>

          		<div>
          			<input type="password" name="pass" placeholder="Password" id = "pass">
          			<b class = "red-text" id = "passError"></b>
          		</div>

          		<div>
          			<input type="password" name="cpass" placeholder="Confirm password" id = "cpass">
          			<b class = "red-text" id = "cpassError"></b>
          		</div>

          		<div>
          			<a class = "btn red" id = "prev-3">Previous</a>
          			<input type="submit" name="submit" value = "Submit" id = "submit" class = "btn green">
          		</div>
          	</div>

          </form>
        </div>
      </div>

      <div class="col l5 s12 m6">
      	<div id = "social-signup">
      		<div class="center hide-on-small-only">
      		<img src="Product_Images/logoShop.png" height = "120px">
      		</div>
      		<div id = "page-title"> login using social media to get quick access </div>
      		<a href="#"><li id = "facebook"><i class = "fa fa-facebook"></i><span>Signup with facebook</span></li></a>
      		<a href="#"><li id = "google-plus"><i class = "fa fa-google-plus"></i><span>Signup with google</span></li></a>
      		<a href="#"><li id = "twitter"><i class = "fa fa-twitter"></i><span>Signup with twitter</span></li></a>
      	</div>
      </div>

  	</div>
	</div>
</div>

<div class="col l4">
	<div class="card">
        <div class="card-content center">
        	<?php 
        		$get_products = "SELECT * FROM product ORDER BY 1 DESC limit 1";
			    $run_products = mysqli_query($conn,$get_products);
			    while($row_products=mysqli_fetch_array($run_products)){
			        $pro_id = $row_products['product_id'];
			        $pro_title = $row_products['product_title'];
			        $pro_price = $row_products['product_price'];
			        $pro_img1 = $row_products['product_img1'];
			        $pro_descount = $row_products['discount'];
			    }
        	 ?>
        	 <div class="product-img"><img src="Product_Images/<?php echo $pro_img1;?>" height = "180px"></div>
        	 <span class="card-title" style = "font-size: 20px; font-weight: bold;"><?php echo $pro_title; ?></span>
        	 <p style = "color: red; font-weight: 700; font-size: 18px">Rs.<?php echo $pro_price; ?> /-</p>
        	 <p style = "color: green; font-weight: 500; font-size: 16px"><?php echo $pro_descount; ?>% off</p>
        	 <a style = "display: block; background: red;padding: 7px; color: white; margin: 5px 0px; border-radius: 30px; font-weight: bold;letter-spacing: 1px;">View</a>
        	 <a style = "display: block; background: green;padding: 7px; color: white; margin: 5px 0px; border-radius: 30px; font-weight: bold;letter-spacing: 1px;">Add to cart</a>
        </div>
    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src = "Js/signUpFormScript.js"></script>

<?php include'footer.php'; ?>