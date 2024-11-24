<!DOCTYPE html>
<html>
<body>

<h2>Update Book For Sale</h2>

<?php
require_once "config.php";

$bookNo = $_POST["bookNo"];
$title = $_POST["title"];
$author = $_POST["author"];
$edition = $_POST["edition"];
$course = $_POST["course"];
$price = $_POST["price"];
$userId = $_POST["userId"];

$sql = "SELECT bookNo, title, author, edition, course, price, userId FROM BooksForSale WHERE bookNo = '$bookNo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Update row   	  
	$sql = "UPDATE BooksForSale SET title = '$title', author = '$author', edition = '$edition', course = '$course', price = '$price', userId = '$userId' WHERE bookNo = '$bookNo'";
	$result = $conn->query($sql);
	echo "Record updated successfully"; 
} else {
  echo "Book does not exist!";
}

$conn->close();
?>

<br><br>
<a href="manageBooks.html">Back to Books</a>
<a href="index.html">Back to main menu</a>

</body>
</html>