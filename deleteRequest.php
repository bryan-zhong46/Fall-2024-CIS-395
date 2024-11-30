<!DOCTYPE html>
<html>
<body>

<h2>Delete Book Request</h2>

<form action="" method="post">
	RequestNo: <input type="text" name="requestNo"><br><br><br>
	<input type="submit" name="submit">
</form>
<br>

<?php
require_once "config.php";

if (isset($_POST["submit"])) {
	$requestNo = $_POST["requestNo"];
	$sql1 = "SELECT requestNo, title, author, edition, course, userId FROM Requests WHERE requestNo = '$requestNo'";
	$result1 = $conn->query($sql1);

	if ($result1->num_rows > 0) {
	// delete row   	  
		$sql2 = "DELETE FROM Requests WHERE requestNo = '$requestNo'";
		$result2 = $conn->query($sql2);
	
		$row = $result1->fetch_row();	
		echo "<b>The request below was deleted successfully:</b> <br><br>requestNo: " .$row[0]. 
		" <br> Title: $row[1] <br> Author: $row[2] <br> Edition: $row[3] <br> Course: $row[4] <br> Requester's UserId: $row[5] <br> ";	 
	} else {
	echo "Request does not exist!";
	}
	$conn->close();
}
?>

<br><br>
<a href="manageRequests.html">Back to Requests</a>
<a href="index.html">Back to main menu</a>

</body>
</html>