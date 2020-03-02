
<?php
//RUPINDER KAUR / 8622297 

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key 
            => $value) {
		if($_POST["book_unique_value"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		} //removes product form cart
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['book_unique_value'] === $_POST["book_unique_value"]){
        $value['book_quantity'] = $_POST["book_quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<link rel='stylesheet' href='style.css' type='text/css' media='all' />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>TriStar Books</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
body {
  font-family: Helvetica;
  font-size: 20px;
  background: #a6adba;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #ffffff;
  padding: 5px 20px 15px 20px;
  border: 1px solid #2e2d2d;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #273b5e;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #2a2b2b;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #9c9a9a;
}

a {
  color: #ffffff;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">
      <img src="logo.jpg" alt="logo" style="width:40px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="inventory.php">Books List</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="checkout.php">Checkout</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="cart.php"><span class="glyphicon glyphicon-log-in"></span>  Cart </a></li>
      </ul>
    </div>
  </div>
</nav>
<div style="width:700px; margin:50 auto;">

<h1> Shopping Cart</h1>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<span><?php echo $cart_count; ?></span>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>
    
<table class="table" align="center">
<tbody>
<tr>
<td></td>
<td>Book Name</td>
<td>Your Total Collection</td>
<td>Book Price</td>
<td>Your Total Payment</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["book_image"]; ?>' width="350" height="340" /></td>
<td><?php echo $product["book_name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='book_unique_value' value="<?php echo $product["book_unique_value"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='book_unique_value' value="<?php echo $product["book_unique_value"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='book_quantity' class='book_quantity' onchange="this.form.submit()">
<option <?php if($product["book_quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["book_quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["book_quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["book_quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["book_quantity"]==5) echo "selected";?> value="5">5</option>
<option <?php if($product["book_quantity"]==6) echo "selected";?> value="5">6</option>
<option <?php if($product["book_quantity"]==7) echo "selected";?> value="5">7</option>
</select>
</form>
</td>
    <!-- Getting book price and multiply with book quantity -->
    <!-- Getting total of each product differently after multiplying quantity -->
<td><?php echo "$".$product["book_price"]; ?></td>
<td><?php echo "$".$product["book_price"]*$product["book_quantity"]; ?></td>
</tr>
<?php

//Getting Grand Total
$total_price += ($product["book_price"]*$product["book_quantity"]);
}
?>
<tr>
<td colspan="12">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>	
    </div>
  <?php
  //if there is no product in cart
}else{
	echo "<h1>Please select at least one Product!</h1>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:50px 10px;">
<?php echo $status; 

?>
</div>

<button type='index' class="btn-lg btn-primary active" onClick="location.href='inventory.php'">Go Back To Inventory</button>
<button type='Checkout' class="btn-lg btn-success active" onClick="location.href='checkout.php'">Move For Checkout</button>
<footer class="container-fluid text-center">
    <p> Copyright &copy; 2020 TriStar Books
       
<img  src="logo.jpg" margin="auto" height="100px";/>

  </p>
</footer>
</body>
</html>