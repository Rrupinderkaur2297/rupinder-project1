<!DOCTYPE html>
<html lang="en">                             <!-- RUPINDER KAUR / 8622297 -->
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
      <img src="logo.jpg" alt="logo" style="width:40px;"></a></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="inventory.php">Books List</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="checkout.php">Checkout</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="cart.php"><span class="glyphicon glyphicon-log-in"></span> Cart </a> </li>
      </ul>
    </div>
 
</nav>
<div style="width:700px; margin:50 auto;">
      <img src="images/thankyou.jpg" class="img-fluid" alt="Responsive image">
 <div style=text-align:center><h1>For Shopping with TriStar Books!</h1>
 
  <h3>Your Order Will Be Delivered Soon!</h3> <br>

 <h4>We Love Our Customers Dearly And Your Feedback Is So Helpful To Hear!</h4><br>
 <h1>Congratulations! Today You got Some Special Offers For You! </h1> <br>
 
     <a href="inventory.php" class="btn-lg btn-primary active">Here You Can Check Your Discounted Products!</a>
    </div></div>
        <footer class="container-fluid text-center">
    <p> Copyright &copy; 2020 TriStar Books
       
<img  src="logo.jpg" margin="auto" height="100px";/>

  </p>
</footer>
</body>
        </html>