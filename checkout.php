<!DOCTYPE html>             <!-- RUPINDER KAUR / 8622297 -->
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
  padding: 25px 20px 25px 20px;
  border: 2px solid #2e2d2d;
  border-radius: 70px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 2px solid #273b5e;
  border-radius: 45px;
}

label {
  margin-bottom: 30px;
  display: block;
}

.icon-container {
  margin-bottom: 30px;
  padding: 0px 0;
  font-size: 24px;
}

.btn {
  background-color: #2a2b2b;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 40px;
  cursor: pointer;
  font-size: 50px;
}

.btn:hover {
  background-color: #9c9a9a;
}

a {
  color: #ffffff;
}

hr {
  border: 11px solid lightgrey;
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
    margin-bottom: 120px;
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
      <img src="logo.jpg" alt="logo" style="width:50px;"></a></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="inventory.php">Books List</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="checkout.php">Checkout</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li> <a href="cart.php"><span class="glyphicon glyphicon-log-in"></span> Cart<span>
                <?php $cart_count=''; echo $cart_count; ?></span></a> 
      </ul>
    </div>
   
     <div class="cart_div">
            
        </div> 
</nav>
<br><br>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="thankyou.php">
      
        <div class="row">
          <div class="col-50">
            <h1>Please Fill Your Details Here!</h1>
            <label for="fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="firstname" name="firstname" placeholder="eg-Rupi"  pattern="[A-Za-z]{1,50}" required="required">
            <label for="fname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text" id="lastname" name="lastname" placeholder="eg-Kaur"  pattern="[A-Za-z]{1,50}" required="required">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="eg-rupinder@demoaccount.com" required="required">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="eg-234 Linden Drive.">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="eg-Cambridge">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="eg-ON">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="eg-00000">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h1>Ready For Payment?</h1>
            <label for="fname">Pay by Visa/Master Card </label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:yellow;"></i>
              <i class="fa fa-cc-amex" style="color:brown;"></i>
              <i class="fa fa-cc-mastercard" style="color:darkblue;"></i>
              <i class="fa fa-cc-discover" style="color:blue;"></i>
            </div>
            <p><label for="">Payment method: </label><input type="radio" name="payment" value="debit" required="required"> Debit <input type="radio" name="payment" value="credit"> Credit</p>
            <label for="cname">Name(Same as on payment Card)</label>
            <input type="text" id="cname" name="cardname" placeholder="eg-Rupinder Kaur" pattern="[A-Za-z]{1,50}" required="required">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="16 digit card number(without space)" pattern="[0-9]{16,16}" required="required">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="eg-Feb">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="eg- 2024">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="payment" placeholder="111(backside of your card)" required="required" pattern="[0-9]{3,3}">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr">To be Delievered on my Address
        </label>
        <input type="submit" value="Place Order" name="submit" class="btn" href="thankyou.php">
        
      </form>

    </div>
  </div>
    </div>
    <footer class="container-fluid text-center">
    <p> Copyright &copy; 2020 TriStar Books
       
<img  src="logo.jpg" margin="auto" height="100px";/>

  </p>
</footer>
</body>
</html>