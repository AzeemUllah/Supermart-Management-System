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
 
//echo $_POST["studentId"];

$supName=$_POST["supName"];
$supPhone=$_POST["supPhone"];
$supAddress=$_POST["supAddress"];
$supEmail=$_POST["supEmail"];
$supType=$_POST["supType"];
$id=$_POST["id"];


//$sClass = $_POST["studentClass"];

$sql = "update supplier set SUPPLIER_NAME = '$supName', SUPPLIER_PHONE = '$supPhone', SUPPLIER_ADDRESS = '$supAddress', SUPPLIER_EMAIL = '$supEmail', SUPPLIER_TYPE = '$supType' where SUPPLIER_ID = $id";


if ($conn->query($sql) === TRUE) {
    header("Location:suppliersList.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>