<?php
//RUPINDER KAUR / 8622297
session_start();
//Required db.php
include('db.php');
$status="";


if (isset($_POST['book_unique_value']) && $_POST['book_unique_value']!=""){
$book_unique_value = $_POST['book_unique_value'];
    
    //SQL Query for getting all data from bookinventorytable
$result = mysqli_query($con,"SELECT * FROM `bookinventorytable` WHERE `book_unique_value`='$book_unique_value'");
$row = mysqli_fetch_assoc($result);
$book_name = $row['book_name'];
$book_unique_value = $row['book_unique_value'];
$book_price = $row['book_price'];
$book_image = $row['book_image'];

    
    
    //array for cart
$cartArray = array(
	$book_unique_value=>array(
	'book_name'=>$book_name,
	'book_unique_value'=>$book_unique_value,
	'book_price'=>$book_price,
	'book_quantity'=>1,
	'book_image'=>$book_image)
);
    

    //shows msg when item is added to cart
if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
    
    //shows msg if item is already in cart
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($book_unique_value,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Your Product is added to the CART!</div>";
	}

	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

.btn1 {
  background-color: #2a2b2b;
  color: white;
  padding: 2px;
  margin: 10px 0;
  border: none;
  width: auto;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
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
.btn1:hover {
  background-color: #62656e;
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
      <li><a href="cart.php"><span class="glyphicon glyphicon-log-in"></span>  Cart </a> </li>
      </ul>
    </div>
    </div>
</nav> 

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<?php
}

    //displaying products from DATABASE
$result = mysqli_query($con,"SELECT * FROM `bookinventorytable`");

while($row = mysqli_fetch_assoc($result)){
   //<div class='col-md-2'>
   
   echo "<form method='post' action=''>
   
<input type='hidden' name='book_unique_value' value=".$row['book_unique_value']." />
<div ><img src='".$row['book_image']."' height=450px width=300px/></div>
<div class='book_name'>".$row['book_name']."</div>
<div class='book_price'>$".$row['book_price']."</div>
<button type='submit' class='btn1'>Buy Now</button>
</form>
</div>";
echo "</div>";
}
mysqli_close($con);

?>
    
<div style="clear:both;"></div>

<div class="message_box" style="margin:250px 210px;">
<?php echo $status; ?>
</div>


<br /><br />
<footer class="container-fluid text-center">
    <p> Copyright &copy; 2020 TriStar Books
       
<img  src="logo.jpg" margin="auto" height="100px";/>

  </p>
</footer>
</body>
</html>