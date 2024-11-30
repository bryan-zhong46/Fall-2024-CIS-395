<!DOCTYPE html>
<html>
<body>

<h2>Insert Request for Book</h2>

<?php
require_once "config.php";

$requestNo = $_POST["requestNo"];
$title = $_POST["title"];
$author = $_POST["author"];
$edition = $_POST["edition"];
$course = $_POST["course"];
// $price = $_POST["price"];
$userId = $_POST["userId"];


$sql = "INSERT INTO Requests (requestNo, title, author, edition, course, userId)
VALUES ('$requestNo', '$title', '$author', '$edition', '$course', '$userId')";


if ($conn->query($sql) == TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<br><br>
<a href="manageRequests.html">Back to Requests</a>
<a href="index.html">Back to main menu</a>

</body>
</html>