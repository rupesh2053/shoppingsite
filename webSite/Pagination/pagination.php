
<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

.wrapper{
  list-style: none;
  font-family: 'Josefin Sans', sans-serif;
  margin-top: 20px;
  position: absolute;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 480px;
  height: 50px;
  padding: 15px 35px;
  background: #fff;
  border-radius: 50px;
  box-shadow: 0 0 5px rgba(0,0,0,0.125);
}

.wrapper ul{
  display: flex;
  text-align: center;
  margin-top: -10px;
}

.wrapper ul li{
  width: 50px;
  height: 40px;
  line-height: 40px;
  margin: 0 8px;
  background: #fff;
  color: #000;
  box-shadow: 0 0 2px rgba(0,0,0,0.5);
  cursor: pointer;
  border-radius: 5px;
}

.wrapper ul li:last-child, .wrapper ul li:first-child{
  border-radius: 0;
  border-top-right-radius: 20px;
  border-bottom-left-radius: 20px;
  padding: 0px 10px;
  box-shadow: 0px 0px 0px 0px black;
  font-weight: 700;
  color: #e53935;
}

.wrapper ul li:hover,
.wrapper ul li.active{
  background: #e53935;
  color: #fff;
}
@media (min-width: 481px) and (max-width: 1023px){
 .wrapper{
  width: 370px;
  height: 65px;
  }
  .wrapper ul{
  margin-top: 0px;
  }
 .wrapper ul li{
	width: 40px;
	height: 35px;
	line-height: 40px;
	margin: 0 5px;
	font-size: 18px;
 }
 .wrapper ul li:last-child, .wrapper ul li:first-child{
  font-weight: 500;
  padding: 0;
 }
}
@media (max-width: 480px){
 .wrapper{
  margin-top: 25px;
  width: 300px;
  height: 65px;
  }
  .wrapper ul{
  margin-top: 0px;
  }
 .wrapper ul li{
	width: 40px;
	height: 35px;
	line-height: 40px;
	margin: 0 5px;
	font-size: 18px;
 }
 .wrapper ul li:last-child, .wrapper ul li:first-child{
  font-weight: 500;
  padding: 0;
 }
}
</style>


<div class="wrapper">
    <ul>
        <li><<</li>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li>6</li>
        <li>7</li>
        <li>>></li>  
    </ul>
</div>	
	
