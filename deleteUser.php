<!DOCTYPE html>
<html>
<body>

<h2>Delete User</h2>

<form action="" method="post">
	UserId: <input type="text" name="userId"><br><br><br>
	<input type="submit" name="submit">
</form>
<br>

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

if (isset($_POST["submit"])) {
	$userId = $_POST["userId"];
	$sql1 = "SELECT userId, name, major, email, phoneNo FROM Users WHERE userId = '$userId'";
	$result1 = $conn->query($sql1);

	if ($result1->num_rows > 0) {
	// delete row   	  
		$sql2 = "DELETE FROM Users WHERE userId = '$userId'";
		$result2 = $conn->query($sql2);
	
		$row = $result1->fetch_row();	
		echo "<b>The user below was deleted successfully:</b> <br><br>UserId: " .$row[0]. 
		" <br> Name: $row[1] <br> Major: $row[2] <br> E-mail: $row[3] <br> Phone: $row[4] <br> ";	 
	} else {
	echo "User does not exist!";
	}
	$conn->close();
}
?>

<br><br>
<a href="manageUsers.html">Back to Users</a>
<a href="index.html">Back to main menu</a>

</body>
</html>