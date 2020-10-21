<?php $conns = mysqli_connect('localhost','root','','testing'); ?>
<?php include 'header.php'; ?>

<div class="row">
 <div class="col s12 l3 m3">
  <div class="card">
   <div class="card-content">

        <p>BRAND</p><hr>
        <div>
        <?php
        $query = "SELECT DISTINCT(product_brand) FROM product ORDER BY product_brand";
        $run_query = mysqli_query($conns, $query);
        while($row = mysqli_fetch_array($run_query)) { ?>

        <label>
        <input type='checkbox' class='filled-in product_check' value = "<?= $row['product_brand']; ?>"  id = 'brand'>
            <span><?= $row['product_brand']; ?></span>
        </label><br>

         <?php } ?>
        </div><br>

        <p>RAM</p><hr>
        <div>
        <?php
        $query = "SELECT DISTINCT(product_ram) FROM product ORDER BY product_ram";
        $run_query = mysqli_query($conns, $query);
        while($row = mysqli_fetch_array($run_query)) { ?>

        <label>
        <input type='checkbox' class='filled-in product_check' id = 'ram' value = '<?= $row['product_ram']; ?>'>
            <span><?= $row['product_ram']; ?> GB</span>
        </label><br>

         <?php } ?>
        </div><br>

        <p>STORAGE</p><hr>
        <div>
        <?php
        $query = "SELECT DISTINCT(product_storage) FROM product ORDER BY product_storage";
        $run_query = mysqli_query($conns, $query);
        while($row = mysqli_fetch_array($run_query)) { ?>

        <label>
        <input type='checkbox' class='filled-in product_check' id = 'storage' value = '<?= $row['product_storage']; ?>'>
            <span><?= $row['product_storage']; ?> GB</span>
        </label><br>

         <?php } ?>
        </div><br>


        <p>CAMERA</p><hr>
        <div>
        <?php
        $query = "SELECT DISTINCT(product_camera) FROM product ORDER BY product_camera";
        $run_query = mysqli_query($conns, $query);
        while($row = mysqli_fetch_array($run_query)) { ?>

        <label>
        <input type='checkbox' class='filled-in product_check' id = 'camera' value = '<?= $row['product_camera']; ?>'>
            <span><?= $row['product_camera']; ?> MP</span>
        </label><br>

         <?php } ?>
        </div><br>


        <p>BATTRY CAPACITY</p><hr>
        <div>
        <?php
        $query = "SELECT DISTINCT(battry_capacity) FROM product ORDER BY battry_capacity";
        $run_query = mysqli_query($conns, $query);
        while($row = mysqli_fetch_array($run_query)) { ?>

        <label>
        <input type='checkbox' class='filled-in product_check' id = 'battry' value = '<?= $row['battry_capacity']; ?>'>
            <span><?= $row['battry_capacity']; ?> mah</span>
        </label><br>

         <?php } ?>
        </div><br>

        <p>NETWORK TYPES</p><hr>
        <div>
        <?php
        $query = "SELECT DISTINCT(network_type) FROM product ORDER BY network_type";
        $run_query = mysqli_query($conns, $query);
        while($row = mysqli_fetch_array($run_query)) { ?>

        <label>
        <input type='checkbox' class='filled-in product_check' id = 'network' value = '<?= $row['network_type']; ?>'>
            <span><?= $row['network_type']; ?></span>
        </label><br>

         <?php } ?>
        </div><br>
</div>
</div>
</div>

<div class="col l9 m9">

        <div class="card" style = "padding: 5px;">
        <h5 class = "center" id = "txtChange" style = "font-weight: bold;">All Products</h5>
        </div>

    <div class="center">
    <img src="Product_Images/loader.gif" id = "loader" style = "display: none;height: 60px;">
    </div>

<div class="row" id = "result">

    <?php
        $query = "SELECT * FROM product";
        $run_query = mysqli_query($conns, $query);
        while($row = mysqli_fetch_array($run_query)) 
    {?>

    <div class="col s12 l4 m6">
    <div class="card" style = "height: 500px;">
    <div class="card-content center">
        <div id="pro-img">
        <img src="Product_Images/img1.jpg" height = "230px" width = "200px">
        </div>
        <div class="product-specification">
            <h6><?= $row['product_name']; ?></h6>
            <h6><?= $row['product_brand']; ?></h6>
            <h6>RAM: <?= $row['product_ram']; ?> GB</h6>
            <h6>STORAGE: <?= $row['product_storage']; ?> GB</h6>
            <h6>Camera: <?= $row['product_camera']; ?> MP</h6>
        </div>
        <div class="add-to-cart green white-text" style = "padding: 5px">
            <a href="#" style = "color: white;">Add to cart</a>
        </div>
    </div>
    </div>
    </div>
    <?php } ?>
  </div>
</div>
</div>

<div class="row" style = "margin-bottom: 80px;">
    <div class="col l12 s12 m12">
        <?php include 'Pagination\pagination.php' ?>
    </div>
</div>

<script>
    $(document).ready(function(){
    $('.product_check').click(function(){
        $('#loader').show();
        var action = 'data';
        var storage = get_filter_text('storage');
        var brand = get_filter_text('brand');
        var ram = get_filter_text('ram');
        var camera = get_filter_text('camera');
        var battry = get_filter_text('battry');
        var network = get_filter_text('network');

        $.ajax({
            url:'phoneFilterAction.php',
            method: 'POST',
            data:{action:action,brand:brand,ram:ram,storage:storage,camera:camera,battry:battry,network:network},
            success:function(response){
                $("#result").html(response);
                $('#loader').hide();
                $('#txtChange').text("Filtered Products");
            }
        });
    });

    function get_filter_text(text_id){
        var filterData = [];
        $('#'+text_id+':checked').each(function(){
            filterData.push($(this).val());
        });
        return filterData;
    }
    });
</script>


<style>
    @media (min-width: 600px) and (max-width: 640px){
        #pro-img img{
            width: 170px;
        }
    }
    @media (min-width: 320px) and (max-width: 480px){
        #pro-img img{
            width: 220px;
        }
    }
</style>
<?php include 'footer.php'; ?>
