
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<h1> Select the items to add to your shopping cart</h1>

<?php
session_start();
if(!isset($_SESSION['login']))
{
header("Location: login.php");
}
?>

<form action="wishlist.php" method="post">
<select name="list">
<option>Sprite</option>
<option>Coke</option>
<option>Cherry Coke</option>
<option>Fanta Grape</option>
<option>Fanta Orange</option>
<option>Mellow Yellow</option>
<option>Poweraid</option>
<option>Root Beer</option>
<option>Vanilla Coke</option>
<option>Coke Cranberry</option>
</select>
<input type="submit" name="submit" value="Get Selected Values" />
</br>
<input type="radio" name="amt" value="1">1</input>
<input type="radio" name="amt" value="12">12</input>
<p>Stock remaining for this product: <span value="<?php echo $result ?>"></span></p>
</form>

<?php

$servername= "localhost";
$username="root";
$password="";
$dbName="webdevdatabase";

$conn= new mysqli($servername, $username, $password, $dbName);
$result="";
if(isset($_POST['submit'])){
$selected_val = $_POST['list']; 

$sql="SELECT stock
	  FROM products
	  WHERE DrnkName=?;";

$stmt = $conn->prepare($sql);
$stmt-> bind_param('sd', $selected_val);
$stmt->execute();
$stmt->bind_result($result);
$stmt->fetch();

}

?>

</body>
</html>