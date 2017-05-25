<?php

			$servername = "localhost";

					$username = $_SESSION["username"];
					$password = $_SESSION["password"];
$dbname = "supermart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
//echo $_POST["studentId"];

$prodName=$_POST["prodName"];
$prodQuantity=$_POST["prodQuantity"];
$unitPrice=$_POST["unitPrice"];
$expiryDate=$_POST["expiryDate"];
$imageURL=$_POST["imageURL"];
$id=$_POST["id"];


//$sClass = $_POST["studentClass"];

$sql = "update product set name = '$name', QUANTITY_OF_SUB_UNITS = '$prodQuantity', UNIT_PRICE = '$unitPriceS', EXPIRY_DATE = '$expiryDate', imageUrl = '$imageURL' where id = $id";


if ($conn->query($sql) === TRUE) {
    header("Location:products.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>