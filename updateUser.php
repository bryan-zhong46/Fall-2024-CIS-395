<!DOCTYPE html>
<html>
<body>

<h2>Update User</h2>

<?php
require_once "config.php";

$userId = $_POST["userId"];
$name = $_POST["name"];
$major = $_POST["major"];
$email = $_POST["email"];
$phoneNo = $_POST["phoneNo"];

$sql = "SELECT userId, name, major, email, phoneNo FROM Users WHERE userId = '$userId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Update row   	  
	$sql = "UPDATE Users SET name = '$name', major = '$major', email = '$email', phoneNo = '$phoneNo' WHERE userId = '$userId'";
	$result = $conn->query($sql);
	echo "Record updated successfully"; 
} else {
  echo "User does not exist!";
}

$conn->close();
?>

<br><br>
<a href="manageUsers.html">Back to Users</a>
<a href="index.html">Back to main menu</a>

</body>
</html>