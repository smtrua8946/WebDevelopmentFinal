<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	</body>
	<div>
		<center><strong><h1>SEE THE AVAILABLE PRODUCTS</h1></strong></center>
		<table>
			
		</table>
    </div>
</html>