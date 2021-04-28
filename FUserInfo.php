<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<table border="2">
		<tr>
			<th>id</th>
			<th> FirstName</th>
			<th> LastName</th>
			<th> BirthDate</th>
			<th> Gender</th>
			<th> Address</th>
			<th> Phone</th>
			<th>Email</th>
			<th>UserName</th>
		</tr>

<?php
$conn= mysqli_connect("localhost","farhan34","farhan34","user");



if($_SERVER["REQUEST_METHOD"] == "GET") {

$searchKey = $_GET['searchKey'];
$sql = "SELECT * FROM user1 WHERE id = " . $searchKey;

 if(empty($searchKey)) {
$sql = "SELECT * FROM user1 ";
}
$conn = mysqli_connect("localhost","farhan34","farhan34","user");

if($conn -> connect_error) {
echo "Failed to connect database!";
}
else {
$result = $conn -> query($sql);

 if($result -> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
echo"<tr><td>"  . $row["id"] . "</td><td>". $row["FirstName"] . "</td><td>". $row["LastName"] . "</td><td>". $row["BirthDate"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Address"] . "</td><td>". $row["Phone"] . "</td><td>". $row["Email"] . "</td><td>". $row["UserName"] . "</td> </tr>";
}
echo "<br>";

 }
else {
echo "NO RECORD FOUND" ;
}
}
$conn -> close();
}

?>
</table>

</body>
</head>
</html>




