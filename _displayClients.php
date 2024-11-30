<!DOCTYPE html>
<html>
<body>

<h2>Clients List</h2>

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

$sql = "SELECT clientNo, name, sex, age, email FROM Clients";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {    
	echo "$row[clientNo] - $row[name] ($row[sex], $row[age]) - $row[email] <br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<br><br>
<a href="index.html">Back to main menu</a>

</body>
</html>