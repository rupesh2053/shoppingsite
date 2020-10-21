<?php include 'header.php' ?>
  <div class="row">
    <div class="col s12 l3">
      <div class="card">
        <div class="card-content">

        <p>BRAND</p><hr>
        <div>
        <?php
        $conn = mysqli_connect('localhost','root','','ecom_db');
        $query = "SELECT DISTINCT(product_brand) FROM product";
        $run_query = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($run_query)){
        $pro_cata = $row['product_brand'];
        echo "<label><input type='checkbox' class='filled-in common_selector'><span>$pro_cata</span></label><br>";
        } ?>
        </div><br>

        <p>RAM</p><hr>
        <div>
        <?php
        $conn = mysqli_connect('localhost','root','','ecom_db');
        $query = "SELECT DISTINCT(product_ram) FROM product";
        $run_query = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($run_query)){
        $pro_cata = $row['product_ram'];
        echo "<label><input type='checkbox' class='filled-in common_selector product_catagorie'><span>$pro_cata</span> GB</label><br>";
        } ?>
        </div><br>

        <p>STORAGE</p><hr>
        <div>
        <?php
        $conn = mysqli_connect('localhost','root','','ecom_db');
        $query = "SELECT DISTINCT(product_storage) FROM product ORDER BY product_storage ASC";
        $run_query = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($run_query)){
        $pro_cata = $row['product_storage'];
        echo "<label><input type='checkbox' class='filled-in common_selector product_catagorie'><span>$pro_cata</span> GB</label><br>";
        } ?>
        </div><br>

        <p>CAMERA</p><hr>
        <div>
        <?php
        $conn = mysqli_connect('localhost','root','','ecom_db');
        $query = "SELECT DISTINCT(product_camera) FROM product";
        $run_query = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($run_query)){
        $pro_cata = $row['product_camera'];
        echo "<label><input type='checkbox' class='filled-in common_selector product_catagorie' value = '$pro_cata'><span>$pro_cata</span> MP</label><br>";
        } ?>
        </div>

        <p>Battry Capacity</p><hr>
        <div>
        <?php
        $conn = mysqli_connect('localhost','root','','ecom_db');
        $query = "SELECT DISTINCT(battry_capacity) FROM product";
        $run_query = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($run_query)){
        $pro_cata = $row['battry_capacity'];
        echo "<label><input type='checkbox' class='filled-in common_selector product_catagorie'><span>$pro_cata</span> mah</label><br>";
        } ?>
        </div>

        <p>Screen Size</p><hr>
        <div>
        <?php
        $conn = mysqli_connect('localhost','root','','ecom_db');
        $query = "SELECT DISTINCT(screen_size) FROM product";
        $run_query = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($run_query)){
        $pro_cata = $row['screen_size'];
        echo "<label><input type='checkbox' class='filled-in common_selector product_catagorie'><span>$pro_cata</span> inch</label><br>";
        } ?>
        </div>

        <p>Network Type</p><hr>
        <div>
        <?php
        $conn = mysqli_connect('localhost','root','','ecom_db');
        $query = "SELECT DISTINCT(network_type) FROM product";
        $run_query = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($run_query)){
        $pro_cata = $row['network_type'];
        echo "<label><input type='checkbox' class='filled-in common_selector product_catagorie'><span>$pro_cata</span></label><br>";
        } ?>
        </div>
        </div>
        </div>
    </div>


<div class="col l9"> 	
<div class='row'>

    <?php
    $conn = mysqli_connect('localhost','root','','ecom_db');
    $get_products = "SELECT * FROM product";
    $run_products = mysqli_query($conn,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){
        $pro_title = $row_products['product_name'];
        $pro_price = $row_products['product_price'];
        $pro_camera = $row_products['product_camera'];
        $pro_ram = $row_products['product_ram'];
        $pro_storage = $row_products['product_storage'];
        $pro_brand = $row_products['product_brand'];
    echo "
        <div class='col l6 s12 m6'>
        <div class='card product-cards'>
        <div class = 'card-head right green white-text product-discount'>-0%</div>
        <div class='card-content'>

        <div class='row'>
        <div class='col l5 s6 m6'>
        <img src='../Product_Images/6scase.jpg' height = '160px' width = '160px'>

        <div class='color center'>
        <li><img src='../Product_Images/6scase.jpg' width = '40px' style = 'margin-top: 5px;'></li>

        <li><img src='../Product_Images/6scase.jpg' width = '40px' style = 'margin-top: 5px;'></li>

        <li><img src='../Product_Images/6scase.jpg' width = '40px' style = 'margin-top: 5px;'></li>
        </div></div>

        <div class='col l7 s6 m6 right right-contents'>
        <div class='prices'>$pro_brand</div>
        <span id = 'name'>$pro_title<hr></span>
        <div class='prices'>Rs.$pro_price /-</div>
        <div class='prices'>Camera: $pro_camera MP</div>
        <div class='prices'>RAM: $pro_ram GB</div>
        <div class='prices'>Internal Storage: $pro_storage GB</div>

        <a href='#'><div class='card-head add-to-cart-btn'>Add to cart</div></a>
        </div>
        </div>
        </div>
        </div>
        </div>";
}?>
</div>
</div>
</div>
<?php include '../footer.php' ?>
<style>
	*{
		list-style: none;
	}
	.color li{
		display: inline-flex;
	}
</style>