<!DOCTYPE html>
<html>
    

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Finalc.css" >
</head>

<?php
session_start();
if(!isset($_SESSION['login']))
{
header("Location: login.php");
}
?>

<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Soda Shopper</a>
    </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="Final.html">HOME</a></li>
        <li class="active"><a href="products.php">PRODUCTS</a></li>
        <li class="active"><a href="wishlist.php">WISHLIST</a></li>
		<li class="active"><a href="signin.php">SIGN IN</a></li>
      </ul>
  </div>
</nav>

<div class="container">
    <img src="people%20Drink.jpg" class= "together" alt=stuff/>
  <h2>History of Soda Shopper</h2>
  <p> Soda Shopper Was founded in 2018, when the founders Ben, Seth and Manuel<br> had a sudden realization they could be making money from selling Soda. They <br>have since created a monopoly in the Soda market across the world selling various <br>soft drinks. In the products tab you will be able to see the various products offered <br>by Soda Shopper along with deals that'll make anyone buy a thousand cans. </p>
</div>

    
    <footer>
        <p> Copy Right</p>
    
    </footer>
    
</body>
    
    
    
</html>