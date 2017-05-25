<html>
<head><title>Looging in</title>
</head>

<body>	
    <?php 
	session_start();
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;
 

	$conn = new mysqli("localhost", $username, $password, "supermart");
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	
	header('Location: dashboard.php');
?>
</body>
</html>