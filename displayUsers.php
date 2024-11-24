<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: cyan;}
</style>
</head>
<body>

<h2>Users List</h2>

<?php
// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $dbname = "bmcc";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

require_once "config.php";

$sql = "SELECT userID, name, major, email, phoneNo FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table><tr><th>UserID</th><th>Name</th><th>Major</th><th>Email</th></tr>";
  while($row = $result->fetch_assoc()) {    
	echo "<tr><td>$row[userID]</td><td>$row[name]</td><td>$row[major]</td><td>$row[email]</td><td>$row[phoneNo]</td></tr>";	
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

<br><br>
<a href="manageUsers.html">Back to Users</a>
<a href="index.html">Back to main menu</a>

</body>
</html>