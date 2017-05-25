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

$custName=$_POST["custName"];
$custPhone=$_POST["custPhone"];
$custAddress=$_POST["custAddress"];
$custEmail=$_POST["custEmail"];
$custType=$_POST["custType"];
$id=$_POST["id"];


//$sClass = $_POST["studentClass"];

$sql = "update customer set CUSTOMER_NAME = '$custName', CUSTOMER_PHONE = '$custPhone', CUSTOMER_ADDRESS = '$custAddress', CUSTOMER_EMAIL = '$custEmail', CUSTOMER_TYPE = '$custType' where CUSTOMER_ID = $id";


if ($conn->query($sql) === TRUE) {
    header("Location:customersList.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>