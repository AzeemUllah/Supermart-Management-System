<?php
session_start();

$servername = "localhost";
$username = $_SESSION["username"];
					$password = $_SESSION["password"];

$dbname = "supermart";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$cat_id = $_GET["product_category_id"];
$sql = "delete from product_category where PRODUCT_CATEGORY_ID = $cat_id";


if ($conn->query($sql) === TRUE) {
    header("Location:categoryList.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>