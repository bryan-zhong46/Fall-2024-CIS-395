<!DOCTYPE html>
<html>
<body>

<h2>Update Client</h2>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "bmcc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$clientNo = $_POST["clientNo"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$age = $_POST["age"];
$email = $_POST["email"];

$sql = "SELECT clientNo, name, age, email FROM Clients WHERE clientNo = '$clientNo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Update row   	  
	$sql = "UPDATE Clients SET name = '$name', age = '$age', sex = '$sex', email = '$email' WHERE clientNo = '$clientNo'";
	$result = $conn->query($sql);
	echo "Record updated successfully"; 
} else {
  echo "Client does not exist!";
}

$conn->close();
?>

<br><br>
<a href="index.html">Back to main menu</a>

</body>
</html>
