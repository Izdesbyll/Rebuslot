 <?php
$servername = "localhost";
$username = "izdesbyll";
$password = "q14103755.";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 
	
