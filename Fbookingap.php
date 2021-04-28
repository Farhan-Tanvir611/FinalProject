


<?php
session_start();
?>


<html>
<head>
	<link rel = "stylesheet" href="main.css">

</head>



<body>

	<div class ="filter">
	</div>


	<table border="0">

		<center><h3>Booking Request From Users</h3></center>
		<tr>

			<th>roomNo</th>
			<th> UserName</th>
			<th> BedType</th>
			<th> BookingDate</th>
			<th> LeavingDate</th>
		<th> Approve</th>

		<th colspan="2" align="center"> Operation</th>
		</tr>
		<?php echo  $_SESSION['user'];?>

<?php
$conn= mysqli_connect("localhost","farhan34","farhan34","user");
if($conn->connect_error){

	die("Connection failed:". $conn-> connect_error);
}


$sql = "SELECT  roomNo,UserName,BedType,BookingDate,LeavingDate,Approve from bookingap ";
$result = $conn-> query($sql);

if($result-> num_rows > 0){

	while ($row = $result-> fetch_assoc()){
		echo"<tr><td>". $row["roomNo"] . "</td><td>". $row["UserName"] . "</td><td>". $row["BedType"] . "</td><td>". $row["BookingDate"] . "</td><td>". $row["LeavingDate"] . 
		"</td><td>". $row["Approve"] . "</td> <td><a href = 'update.php'>Update</td></tr>";


		


	}
	echo "</table>";
}
else{
	echo "0 result";
}
$conn-> close();













?>





</table>
</body>
</html>
