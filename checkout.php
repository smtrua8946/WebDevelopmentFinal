<!DOCTYPE html>
<html>
    

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Finalc.css" >
    
</head>

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
	<center><strong><h1>CHECKOUT</h1></strong></center>
	<p>Here are the products that you have ordered:	</p>
	<?php
		$firstname = filter_input(INPUT_POST, 'firstname');
		$lastname = filter_input(INPUT_POST, 'lastname');

		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "webdevdatabase";

		$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

		if (mysqli_connect_error()) {
			die('Connect Error (' . mysqli_connect_errno()) . ')' . mysqli_connect_error();
		} else { 

			$passwordhash = hash('sha256', $rawpassword);

			$sql = "INSERT INTO iarenadbtable (firstname, lastname, username, password)
			values ('$firstname', '$lastname', '$username', '$passwordhash')";
			if ($conn->query($sql)) {
				echo "new record inserted";
			} else {
				echo "Error" . $sql . "<br>" . $conn->error;
			}
			$conn->close();
		}

		header('Location: ../html/loginiArena.html');
		exit;
	?>
	
	<table>
		
	</table>

    
    <footer>
        <p> Copy Right</p>
    
    </footer>
    
</body>
    
    
    
</html>