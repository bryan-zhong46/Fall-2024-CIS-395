<!DOCTYPE html>
<html>
<body>

<h2>Insert Book For Sale</h2>

<?php
require_once "config.php";

$bookNo = $_POST["bookNo"];
$title = $_POST["title"];
$author = $_POST["author"];
$edition = $_POST["edition"];
$course = $_POST["course"];
$price = $_POST["price"];
$userId = $_POST["userId"];


$sql = "INSERT INTO BooksForSale (bookNo, title, author, edition, course, price, userId)
VALUES ('$bookNo', '$title', '$author', '$edition', '$course', '$price', '$userId')";


if ($conn->query($sql) == TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<br><br>
<a href="manageBooks.html">Back to Users</a>
<a href="index.html">Back to main menu</a>

</body>
</html>