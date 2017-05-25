<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "rach";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			 
			$sql = "SELECT * from table_to_be_loaded where COMBOBOX_TABLE_ID='".$selectedValueID."';";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
			while($row = mysqli_fetch_array($result))
			{
				echo $selectedValueID;
			}

			} else {
				echo "N";
			}

			$conn->close();
			
?>
	