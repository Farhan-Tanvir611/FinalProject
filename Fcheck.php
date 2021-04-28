<!DOCTYPE html>
<html>
<head>
<body>
<table>
<tr>
	
<th>RoomId</th>
<th>UserName</th>
<th>CheckIn</th>

<th>CheckOut</th>

</tr>
<?php

 $conn = mysqli_connect("localhost","farhan34","farhan34","user");

if($_SERVER["REQUEST_METHOD"] == "GET") {

$searchKey = $_GET['searchKey'];
$sql = "SELECT * FROM roomav WHERE Roomid = " . $searchKey;

 if(empty($searchKey)) {
$sql = "SELECT * FROM roomav ";
}
$conn = mysqli_connect("localhost","farhan34","farhan34","user");

if($conn -> connect_error) {
echo "Failed to connect database!";
}
else {
$result = $conn -> query($sql);

 if($result -> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
echo "<tr><td>" .$row["Roomid"] ."<td>" . $row["UserName"] ."<td>" .$row["CheckIn"] ."<td>". $row["CheckOut"] ."<td>" ;
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