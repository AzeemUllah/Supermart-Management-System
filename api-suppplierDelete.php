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

$sup_id = $_GET["suppplier_id"];
$sql = "delete from supplier where SUPPLIER_ID = $sup_id";

if ($conn->query($sql) === TRUE) {
    header("Location:suppliersList.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>