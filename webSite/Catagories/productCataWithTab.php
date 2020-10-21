<?php
$conn = mysqli_connect('localhost','root','','testing');
$tab_query = "SELECT DISTINCT(product_brand) FROM product";
$tab_result = mysqli_query($conn, $tab_query);

$tab_menu = '';
$tab_content = '';
$i = 0;
while($row = mysqli_fetch_array($tab_result))
{
 if($i == 0)
 {
  $tab_menu .= '
   <li class="active"><a href="#'.$row["product_brand"].'" data-toggle="tab">'.$row["product_brand"].'</a></li>
  ';

  $tab_content .= '
   <div id="'.$row["product_brand"].'" class="tab-pane fade in active">
  ';

 }
 else
 {
  $tab_menu .= '
   <li><a href="#'.$row["product_brand"].'" data-toggle="tab">'.$row["product_brand"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["product_brand"].'" class="tab-pane fade">
  ';
 }

 $product_query = "SELECT * FROM product WHERE product_brand = '".$row["product_brand"]."'";
 $product_result = mysqli_query($conn, $product_query);
 while($sub_row = mysqli_fetch_array($product_result))
 {
  $tab_content .= '
  <div class="col-md-3" style="margin-bottom:36px; height: 400px; border-right: 2px solid grey;">
   <img src="../Product_Images/11promax.jpg" height = "280px" width = "200px">
   <h4>'.$sub_row["product_name"].'</h4>
  </div>
  ';
 }
 $tab_content .= '<div style="clear:both;"></div></div>';
 $i++;
}
?>


<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
            
 </head>
 <body>
  <div class="container">
   <br />
   <ul class="nav nav-tabs">
   <?php
   echo $tab_menu;
   ?>
   </ul>
   <div class="tab-content">
   <br />
   <?php
   echo $tab_content;
   ?>
   </div>
   </div>
 </body>
</html>