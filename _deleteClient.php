<!DOCTYPE html>
<html>
<body>

<h2>Delete Client</h2>

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
$sql1 = "SELECT clientNo, name, sex, age, email FROM Clients WHERE clientNo = '$clientNo'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // delete row   	  
	$sql2 = "DELETE FROM Clients WHERE clientNo = '$clientNo'";
	$result2 = $conn->query($sql2);
	
	$row = $result1->fetch_row();	
	echo "<b>The client below was deleted successfully:</b> <br><br>ClientNo: " .$row[0]. 
	" <br> Name: $row[1] <br> Sex: $row[2] <br> Age: $row[3] <br> E-mail: $row[4] <br>";	 
} else {
  echo "Client does not exist!";
}

$conn->close();
?>

<br><br>
<a href="index.html">Back to main menu</a>

</body>
</html>
