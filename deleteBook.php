<!DOCTYPE html>
<html>
<body>

<h2>Delete Book For Sale</h2>

<form action="" method="post">
	BookNo: <input type="text" name="bookNo"><br><br><br>
	<input type="submit" name="submit">
</form>
<br>

<?php
require_once "config.php";

if (isset($_POST["submit"])) {
	$bookNo = $_POST["bookNo"];
	$sql1 = "SELECT bookNo, title, author, edition, course, price, userId FROM BooksForSale WHERE bookNo = '$bookNo'";
	$result1 = $conn->query($sql1);

	if ($result1->num_rows > 0) {
	// delete row   	  
		$sql2 = "DELETE FROM BooksForSale WHERE bookNo = '$bookNo'";
		$result2 = $conn->query($sql2);
	
		$row = $result1->fetch_row();	
		echo "<b>The book below was deleted successfully:</b> <br><br>BookNo: " .$row[0]. 
		" <br> Title: $row[1] <br> Author: $row[2] <br> Edition: $row[3] <br> Course: $row[4] <br> Price: $row[5] <br> Seller's UserId: $row[6] <br> ";	 
	} else {
	echo "Book does not exist!";
	}
	$conn->close();
}
?>

<br><br>
<a href="manageBooks.html">Back to Books</a>
<a href="index.html">Back to main menu</a>

</body>
</html>