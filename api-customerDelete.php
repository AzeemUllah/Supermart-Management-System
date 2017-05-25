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

$cat_id = $_GET["customer_id"];
$sql = "delete from customer where CUSTOMER_ID = $cat_id";

if ($conn->query($sql) === TRUE) {
    header("Location:customersList.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>