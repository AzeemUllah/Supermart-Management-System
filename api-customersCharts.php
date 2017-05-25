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
$sql="select SALES_ORDER_ID from SALES_ORDER where CUSTOMER_ID='1';";



$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "[";

	while($row = mysqli_fetch_array($result))
	{
		
		//echo $row['SALES_ORDER_ID'];
		$sql2="select product.PRODUCT_NAME, sales_order_details.PRODUCT_ID, sales_order_details.QUANTITY_OF_SUB_UNITS FROM sales_order_details
INNER JOIN product where SALES_ORDER_ID='".$row['SALES_ORDER_ID']."' AND product.PRODUCT_ID = sales_order_details.PRODUCT_ID;";
		$result2 = $conn->query($sql2);

		if ($result2->num_rows > 0) {
			
		while($row2 = mysqli_fetch_array($result2))
			{
				echo "{label: '" . $row2['PRODUCT_NAME'] . "', value:'" . $row2['QUANTITY_OF_SUB_UNITS']. "'},";
				
			}
				
		}
	
		
	}
	echo "]";
}
$conn->close();

?>