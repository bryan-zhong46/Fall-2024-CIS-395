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

<h2>Book Requests List</h2>

<?php
require_once "config.php";

$sql = "SELECT requestNo, title, author, edition, course, userID FROM Requests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table><tr><th>requestNo</th><th>Title</th><th>Author</th><th>Edition</th><th>Course</th><th>Requester's userID</th></tr>";
  while($row = $result->fetch_assoc()) {    
	echo "<tr><td>$row[requestNo]</td><td>$row[title]</td><td>$row[author]</td><td>$row[edition]</td><td>$row[course]</td><td>$row[userID]</td></tr>";	
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

<br><br>
<a href="manageRequests.html">Back to Requests</a>
<a href="index.html">Back to main menu</a>

</body>
</html>