<?php 
	$conns = mysqli_connect('localhost','root','','testing');
	if(isset($_POST['action'])){
		$sql = "SELECT * FROM product WHERE product_brand !=''";

		if(isset($_POST['brand'])){
			$brand = implode("','",$_POST['brand']);
			$sql .="AND product_brand IN('".$brand."')";
		}

		if(isset($_POST['ram'])){
			$ram = implode("','",$_POST['ram']);
			$sql .="AND product_ram IN('".$ram."')";
		}

		if(isset($_POST['storage'])){
			$storage = implode("','",$_POST['storage']);
			$sql .="AND product_storage IN('".$storage."')";
		}

		if(isset($_POST['camera'])){
			$camera = implode("','",$_POST['camera']);
			$sql .="AND product_camera IN('".$camera."')";
		}

		if(isset($_POST['battry'])){
			$battry = implode("','",$_POST['battry']);
			$sql .="AND battry_capacity IN('".$battry."')";
		}

		if(isset($_POST['network'])){
			$network = implode("','",$_POST['network']);
			$sql .="AND network_type IN('".$network."')";
		}

		$result = $conns->query($sql);
		$output='';
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$output .= '
				    <div class="col s12 l4 m3">
				    <div class="card" style = "height: 520px;">
				    <div class="card-content center">
				        <img src="Product_Images/img1.jpg" height = "230px" height = "230px">
				        <div class="product-specification">
				            <h6>'.$row['product_name'].'</h6>
				            <h6>'.$row['product_brand'].'</h6>
				            <h6>RAM: '.$row['product_ram'].' GB</h6>
				            <h6>STORAGE: '.$row['product_storage'].' GB</h6>
				            <h6>Camera: '.$row['product_camera'].' MP</h6>
				            <h6>Battry: '.$row['battry_capacity'].' mah</h6>
				        </div>
				        <div class="add-to-cart green white-text" style = "padding: 5px">
				            <a href="#" style = "color: white;">Add to cart</a>
				        </div>
				    </div>
				    </div>
				    </div>';
			}
		}
		else{
			$output = '<h5>No products found!</h5>';
		}
		echo $output;
	}
 ?>