<!DOCTYPE html>
<html>
<body>

<h2>Update Book Request</h2>

<?php
require_once "config.php";

$requestNo = $_POST["requestNo"];
$title = $_POST["title"];
$author = $_POST["author"];
$edition = $_POST["edition"];
$course = $_POST["course"];
// $price = $_POST["price"];
$userId = $_POST["userId"];

$sql = "SELECT requestNo, title, author, edition, course, userId FROM Requests WHERE requestNo = '$requestNo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Update row   	  
	$sql = "UPDATE Requests SET title = '$title', author = '$author', edition = '$edition', course = '$course', userId = '$userId' WHERE requestNo = '$requestNo'";
	$result = $conn->query($sql);
	echo "Record updated successfully"; 
} else {
  echo "Request does not exist!";
}

$conn->close();
?>

<br><br>
<a href="manageRequests.html">Back to Requests</a>
<a href="index.html">Back to main menu</a>

</body>
</html>