<?php                   //RUPINDER KAUR / 8622297

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
<!-- Adding style to the page -->
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
<!-- Navigation Bar -->
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <!-- Displaying Home page with LOGO -->
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
        <!-- Adding CART to the right side of navigation bar -->
      <ul class="nav navbar-nav navbar-right">
          <li><a href="cart.php"><span class="glyphicon glyphicon-log-in"></span> Cart </a>
        <?php $cart_count=''; echo $cart_count; ?>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
  <div class="col-sm-14">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- To Show Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="slider/slide3.jpg" alt="error">
          <div class="carousel-caption">
            <h3>16 BEST ALOUD NOVELS</h3>
            <p>Starting At $20 ONLY..</p>
          </div>      
        </div>

        <div class="item">
          <img src="slider/slide11.jpg" alt="error">
          <div class="carousel-caption">
            <h3>VARIETY OF PUBLICATIONS</h3>
            <p>CHOOSE HERE >></p>
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
        <!-- Previous and Next Button  -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-14">
    <div class="well">
    <h5 class="card-title">BEST BOOKS OF A DECADE!</h5>
        <p class="card-text"><p>
        Our company help you to find the best Book Here!
Select and Buy Your favourite Book. It’s easy!
Buying books can be expensive, especially if you like to read a lot! Here at Book Outlet, we know everyone loves a good bargain. That’s why we have made it our mission to offer you a huge selection of books at fantastic discounted prices of 50-90% off the original list price.</p>
        <a href="inventory.php" class="btn btn-primary">Explore Now</a>
      </div>

    </div>
    
    <div class="well">
    <h5 class="card-title">WE ARE HERE TO SERVE YOU!</h5>
        <p class="card-text"><p>
        We believe that being the bestseller in bargain books is about much more than providing you with great selection and value. We want you to have an enjoyable shopping experience from start to finish! If you have a question or concern, give us a call during business hours, or send us an email—you can expect to speak or correspond with a friendly customer service representative who is ready to help you.</p>
        <a href="inventory.php" class="btn btn-primary">Explore Now</a>

    </div>
    <div class="well">
    <h5 class="card-title">MEET YOUR NEXT FAVOURITE BOOK: READ MORE, SPEND LESS</h5>
        <p class="card-text">Wondering how we manage those discounts? Here’s our secret: our books are marked down because most of them are marked with a small line or dot on the edge by publishers who sell us their returns and excess inventory. The books we sell are new, unread, and in good condition.</p>
        <a href="inventory.php" class="btn btn-primary">BUY HERE</a>

    </div>
  </div>
</div>
<hr>


<div class="container text-center">    
  <h2>What We Have Now..</h2>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <img src="slider/s9.jpg" class="img-responsive" alt="Image">
      <p><h1>Current Popular Trend</h1></p>
    </div>
    <div class="col-sm-4"> 
      <img src="slider/s10.jpg" class="img-responsive" alt="Image">
      <p><h1> The Best Collection </h1></p>    
    </div>
<div class="col-sm-4"> 
      <img src="slider/s11.jpg" class="img-responsive" alt="Image">
      <h1> On Demand.. </h1>   
    </div>
    <div class="col-sm-12">
      <div class="well">
       <p>Used books are often treasures that are out-of-print or rare. With Wish Lists you can choose to be notified the instant we find a copy, see how often we find rare titles, and see who else is interested.</p>
      </div>
      <div class="well">
       <p> We have New and Trending books. Even, You can check the Most Popular Book by State.<br>Some books have just arrived on our shelves</p>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="well">
       <p>
We have more than 13 million titles to choose from, from the earliest board books to the all-time classics of literature.</p>
      </div>
      <div class="well">
       <p>When you've found the books you want we'll ship qualifying orders to your door for FREE in 100% recyclable packaging. If there is no demand for a book, we will donate it to charity, or we'll recycle it.</p>
      </div>
    </div>  
  
  <hr>


<div class="container text-center">    
  <h3>JUST ARRIVED </h3>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <img src="images/s1.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Publication 1</p>
    </div>
    <div class="col-sm-4"> 
      <img src="images/s8.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Publication 2</p>    
    </div>
    <div class="col-sm-4"> 
      <img src="images/s3.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Publication 3</p>
    </div>
    <div class="col-sm-4"> 
      <img src="images/s4.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Publication 4</p>
    </div> 
    <div class="col-sm-4"> 
      <img src="images/s7.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Publication 5</p>
    </div>     
    <div class="col-sm-4"> 
      <img src="images/s2.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Publication 6</p>
    </div> 
  </div>
</div><br>

<footer class="container-fluid text-center">
    <p> Copyright &copy; 2020 TriStar Books
       
<img  src="logo.jpg" margin="auto" height="100px";/>

  </p>
</footer>

</body>
</html>