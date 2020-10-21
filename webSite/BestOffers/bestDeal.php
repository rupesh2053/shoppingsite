<!-- customer wises -->
<div class="row">
<div class="col s12 l4 m6">
<div class="card deal-card c1">
<div class="card-content  center">

  <div class="properties">
  <div class="names">iPhone 11 all varient</div><hr style = "background: white;">
  <div class="disc">Space grey, Midnight green, Glod...</div>
  </div>

  <button href = "cart.php" class = "left deals">Under 1145$</button>
  <button class = "right shop-now">Shop now</button>
</div>
</div>
</div>

<div class="col s12 l4 m6">
<div class="card deal-card c2">
<div class="card-content  center">
  <div class="properties">
  <div class="names">Simple cell phones collections</div><hr style = "background: white;">
  <div class="disc">Nokia, Samsung, Vivo...</div>
  </div>
  <button class = "left deals">Under 50$</button>
  <button href = "cart.php" class = "right shop-now">Shop now</button>
</div>
</div>
</div>

<div class="col s12 l4 m6">
<div class="card deal-card c3">
<div class="card-content center">
  <div class="properties">
  <div class="names">Phone accessories collections</div><hr style = "background: white;">
  <div class="disc">Power bank, Chargers, Earphones...</div>
  </div>
  <button href = "cart.php" class = "left deals">Under 100$</button>
  <button class = "right shop-now">Shop now</button>
</div>
</div>
</div>
</div><!-- customer wises ends -->

<style>
/* Best deal Style Start */
  @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
  .deal-card{
    background-size: cover;height: 270px;
  }
  .c1{
    background-image: url('Product_Images/phone.jpg');
  }
  .c2{
    background-image: url('Product_Images/cellPhone.jpg');
  }
  .c3{
    background-image: url('Product_Images/our.jpg');
  }
  .properties{
    background: #004d40;
    border-radius: 3px;
    color: white;
  }
  .names{
    letter-spacing: 1px;
    margin-top: 20px;
    font-family: 'Tangerine', serif;
    font-size: 22px;
    font-weight: 900;
  }
  .disc{
    font-family: sans-serif;
    font-weight: bold;
    font-size: 14px;
  }
  .deals, .shop-now{
    border: none;
    background: #006064 ;
    color: white;
    font-weight: 750;
    padding: 7px 10px;
    margin-top: 20px;
    border-radius: 2px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: .3s ease-in-out;
  }
  .deals{
    background: orange;
  }
  .shop-now:hover{
    transform: scale(1.1);
  }

  /*responsive style*/
  @media (max-width: 1024px){
    .names{
      font-size: 18px;
    }
    .disc{
      font-size: 15px;
      margin-top: -5px;
    }
    .deals, .shop-now{
      font-size: 15px;
    }
  }
  @media (max-width: 800px){
    .names{
      font-size: 16px;
    }
    .disc{
      font-size: 13px;
      margin-top: -5px;
    }
    .deals, .shop-now{
      font-size: 13px;
    }
  }
  /* Best deal Style End */
</style>
