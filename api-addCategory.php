<?php
session_start();

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
	 
	$cat_name = $_POST["categoryName"];
	$cat_desc = $_POST["categoryDescription"];
	
$sql = "INSERT INTO product_category (PRODUCT_NAME,PRODUCT_DESCRIPTION)
VALUES ('$cat_name','$cat_desc')";

if ($conn->query($sql) === TRUE) {
    header("Location:categoryList.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>