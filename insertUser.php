<!DOCTYPE html>
<html>
<body>

<h2>Insert User</h2>

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

$userId = $_POST["userId"];
$name = $_POST["name"];
$major = $_POST["major"];
$email = $_POST["email"];
$phoneNo = $_POST["phoneNo"];


$sql = "INSERT INTO Users (userId, name, major, email, phoneNo)
VALUES ('$userId', '$name', '$major', '$email', '$phoneNo')";


if ($conn->query($sql) == TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<br><br>
<a href="manageUsers.html">Back to Users</a>
<a href="index.html">Back to main menu</a>

</body>
</html>