<?php
include ("Details.php");

/*
echo $rn = $_GET['rn'];
echo $rm = $_GET['rm'];
*/


?>
<?php


 $hostname = "localhost";
$username = "farhan34";
$password = "farhan34";
$dbname = "signup";

 // Mysqli Procedural
$conn2 = mysqli_connect($hostname, $username, $password, $dbname);

if($_SERVER['REQUEST_METHOD'] == "POST") {

 
$Present = $_POST['Present'];
$Permanent = $_POST['Permanent'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];

;

$query= mysqli_query($conn2,"Select * from sign ");
$num = mysqli_fetch_array($query);
if($num>0){
if(mysqli_connect_error()) {
echo "2. Database Connection Failed!...";
echo "<br>";
echo mysqli_connect_error();
}
else {
echo "2. Database Connection Successful!";



$stmt2 = mysqli_prepare($conn2, "update sign set  Present = ? , Permanent = ?
Phone = ? , Email = ?  ");
mysqli_stmt($stmt2, "ssss", $p3, $p4 ,$p5,$p6 );

$p3 = $_POST['Present'];
$p4 = $_POST['Permanent'];
$p5 = $_POST['Phone'];
$p6 = $_POST['Email'];
$res = mysqli_stmt_execute($stmt2);

 if($res) {
echo "Data Update Successful!";
header("Location: Details.php ");
exit();
}
else {
echo "Failed to Update Data.";
echo "<br>";
echo $conn2->error;
}

}
}


mysqli_close($conn2);

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<center>



					




				
			


<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  method="post">
	<table border="0" bgcolor="cyan" align="center" cellspacing="20">
		<tr>

		

			<td>Present</td>
			<td><input type = "text"  name="Present"   value="<?php echo $Present ?>">></td>
		</tr>

		<tr>
				<td>Permanent</td>
			<td><input type = "text"  name="Permanent"   value="<?php echo $Permanent ?>">></td>
			

        </tr>
			

<tr>
				<td>Phone</td>
			<td><input type = "text"  name="Phone"  value="<?php echo $Phone ?>">></td>
			

</tr>




<tr>
				<td>Email</td>
			<td><input type = "text"  name="Email"  value="<?php echo $Email ?>"> ></td>
			

</tr>

<tr>
	<td colspan="2" align="center"> <input type="submit" id="button"name="submit" value="Submit">
		<a href="Profilesave.php">BACK</a></a></td>


</tr>
</form>


<!--
<p id = "errorMsg"></p>
<script>
    function validate(){
        var isValid= false;
        var User= document.forms["jsForm"]["User"].value;

if (User == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up USER Properly </b>";


document.getElementById('errorMsg').style.color="red";

}

      
}
else{
    isValid = true;
}

        return isValid;
    }

</script>

-->


</table>

</body>
</html>

