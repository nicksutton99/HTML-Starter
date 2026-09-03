<html>
	<head>
		<title>
			Hello World
		</title>
	</head>
	<body>
		<h1>Hello World</h1>
		<?php
			for ($x = 0; $x <= 10; $x++) {
  				echo "The number is: $x <br>";
			}
			$servername = "localhost";
			$username = "sales";
			$password = "1pptrb23";
			$dbname = "contacts2";
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
  				die("Connection failed: " . $conn->connect_error);
			}
			echo "Connected successfully";
			$sql = "SELECT name, number FROM people";
			// Execute the SQL query
			$result = $conn->query($sql);
  			while($row = $result->fetch_assoc()) {
    				echo "Name: " . $row["name"]. " - Number: " . $row["number"]. "<br>";
  			}
		?>
	</body>
</html>