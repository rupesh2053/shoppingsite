<?php include 'header.php'; ?>
<div class = "bread-crumb">Home / Cart</div>

<div class="row">
  <div class="col s12 m12 l12">
  <div class="card">
    <div class="card-head left">
      <a href="index.php">
        <i class = "grey white-text fa fa-long-arrow-left btn-shopping"></i>
      </a>
    </div>
    <div class="card-content cart-items">
      <span class="card-title center" id = "cart-name">Shopping Cart</span>
      <span class="card-title center" id = "total-cart-item">You currently have 2 item(s) in your cart.
      </span>

  <table class="centered responsive-table">
    <thead>
      <tr>
        <th>Image</th>
          <th>Product</th>
          <th>Quantity</th>
          <th>Unit Price</th>
          <th>Color</th>
          <th>Size</th>
          <th>Delete</th>
          <th>Edit</th>
          <th>Sub-total</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td><img src="Product_Images/myShoes.jpg"></td>
        <td>Nike Air Shoes(Men)</td>
        <td>
          <i class = "fa fa-plus-circle"></i>
          <span>1</span>
          <i class = "fa fa-minus-circle"></i>
        </td>
        <td>Rs.2700 /- <span id = "discount"> 12% off</span></td>
        <td>Red</td>
        <td>Medium</td>
        <td><i class = "fa fa-trash"></i></td>
        <td><i class = "fa fa-edit"></i></td>
                
        <td>Rs.2700 /-</td>
      </tr>

    <tr>
      <td><img src="Product_Images/wair13.jpg"></td>
      <td>Nike Air Shoes(Women)</td>
      <td>
        <i class = "fa fa-plus-circle"></i>
        <span>1</span>
        <i class = "fa fa-minus-circle"></i>
      </td>
      <td>Rs.3350 /- <span id = "discount"> 15% off</span></td>
      <td>Pink</td>
      <td>Medium</td>
      <td><i class = "fa fa-trash"></i></td>
      <td><i class = "fa fa-edit"></i></td>
              
      <td>Rs.3350 /-</td>
    </tr>

    <tr>
      <td><img src="Product_Images/watch.jpg"></td>
      <td>Apple watch (Series 4)</td>
      <td>
        <i class = "fa fa-plus-circle"></i>
        <span>1</span>
        <i class = "fa fa-minus-circle"></i>
      </td>
      <td>Rs.10000 /- <span id = "discount"> 10% off</span></td>
      <td>White</td>
      <td>Medium</td>
      <td><i class = "fa fa-trash"></i></td>
      <td><i class = "fa fa-edit"></i></td>
              
      <td>Rs.10000 /-</td>
    </tr>
    </tbody>
  </table>
      </div>
    </div>
  </div>
</div>


<div class="row">
    <div class="col s12 l8 m12">
      <div class="card">
        <div class="card-content order-summary">
          <span class="card-title">Order Summary</span>
          <p>Shipping and additional costs are calculated based on value you have entered.</p>
          <hr>
          <p>Sub-Total+Shipping charge<span class = "right">Rs.4550 /-</span></p>
          <hr>
          <p>Shipping and Handling <span class = "right">Rs.50 /-</span></p>
          <hr>
          <p>Tax <span class = "right"> Rs.0 /-</span></p>
          <hr>
          <p id = "total-cost">Total <span class = "right">Rs.4550 /-</span></p>
          <hr>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l4">
      <div class="card">
        <div class="card-content cart-checkout-section">
          <span class="card-title" id = "total-items">Subtotal (2 items): <span class = "red-text">Rs.5000 /-</span></span>
          <a href="shop.php"><div class = "checkout white-text center">Checkout</div></a>
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
  .cart-items #cart-name{
    text-transform: uppercase; 
    font-weight: 600;
    font-family: 'Galada', cursive;
  }
  .cart-items #total-cart-item{
    font-size: 18px;
  }
  .fa-plus-circle,.fa-minus-circle {
    font-size: 22px;
    color: green;
    padding: 7px;
  }
  .fa-minus-circle{
    color: red;
  }
  .fa-trash,.fa-edit{
    font-size: 24px;
    color: red;
  }
  .fa-edit{
    color: green;
  }
  td span{
    border: 2px solid rgba(0,0,0,0.5); 
    padding: 3px 10px; 
    font-weight: bold;
  }
  th{
    text-transform: uppercase;
    font-family: 'Galada', cursive;
    color: rgba(0,0,0,0.7);
  }
  td img{
    height: 100px;
    transition: .3s ease-in-out;
  }
  td img:hover{
    transform: scale(1.2);
  }
  td{
    font-weight: 600;
  }
  td #discount{
    color: green;
    font-weight: 600;
    border-color: #388e3c;
    padding: 4px 6px;
    font-family: 'Galada', cursive;
  }
  .row .btn-shopping,.btn-checkout{
    margin: 5px;
    padding: 7px;
    font-size: 22px;
  }
  .order-summary #total-cost{
    font-size: 18px;
    font-weight: bold;
    font-family: 'Galada', cursive;
    color: #3e2723;
  }
  .cart-checkout-section #total-items{
    font-size: 16px; font-weight: 600;
  }
  .cart-checkout-section #total-items{
    font-size: 16px; font-weight: 600;
  }
  .checkout{
    padding: 6px;
    margin-top: 15px;
    font-weight: bold; 
    letter-spacing: 2px;
    font-family: 'Galada', cursive;
    background: rgba(0,0,0,0.8);
  }
  .checkout:hover{
    background: black;
  }
  @media screen and (max-width: 1000px) {
  img {
    height: 40px;
  }
  thead{
    margin-top: 25px;
  }
 }
</style>
<?php include 'footer.php'; ?>