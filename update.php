<?php
include ("Fbookingap.php");
/*
echo $rn = $_GET['rn'];
echo $rm = $_GET['rm'];
*/


?>
<?php


 $hostname = "localhost";
$username = "farhan34";
$password = "farhan34";
$dbname = "user";

 // Mysqli Procedural
$conn2 = mysqli_connect($hostname, $username, $password, $dbname);

if($_SERVER['REQUEST_METHOD'] == "POST") {

 $username = $_POST['username'];
$roomNo = $_POST['roomNo'];
$Approve= $_POST['Approve'];

$query= mysqli_query($conn2,"Select * from bookingap where UserName = '$username' ");
$num = mysqli_fetch_array($query);
if($num>0){
if(mysqli_connect_error()) {
echo "2. Database Connection Failed!...";
echo "<br>";
echo mysqli_connect_error();
}
else {
echo "2. Database Connection Successful!";



$stmt2 = mysqli_prepare($conn2, "update bookingap set  roomNo = ? , Approve = ? where UserName = ? ");
mysqli_stmt_bind_param($stmt2, "sss", $p3, $p4 ,$p5 );

$p3 = $_POST['roomNo'];
$p4 = $_POST['Approve'];

$p5 = $_POST['username'];
$res = mysqli_stmt_execute($stmt2);

 if($res) {
echo "Data Update Successful!";
header("Location: Fbookingap.php ");
exit();
}
else {
echo "Failed to Update Data.";
echo "<br>";
echo $conn2->error;
}

}
}

else{

	echo "Please give correct USERNAME";
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


		<?php
		$UserName = $ApproveMent = "";

			$UserNameERR = $ApproveMentERR = "";
			if($_SERVER['REQUEST_METHOD']=="POST"){

				if(empty($_POST['username'])){
					$UserNameERR="Please Fill up Username";
				}

				else{
					$UserName = $_POST['username'];

}
					if(empty($_POST['Approve'])){
					$ApproveMentERR="Please Fill up Approve";
				}

				else{
					$ApproveMent = $_POST['Approve'];
				}

if($UserNameERR=="" && $ApproveMentERR==""){

	$UserName=$_POST['username'];
	$ApproveMent= $_POST['Approve'];
}



				
			}
?>

<form  name ="jsForm"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" onsubmit="return validate()" method="post">
	<table border="0" bgcolor="cyan" align="center" cellspacing="20">
		<tr>

			<td>User Name</td>
			<td><input type = "text"  name="username" value="<?php echo $UserName ?>">
<p><?php echo $UserNameERR; ?></p> </td>

			<td>roomNO</td>
			<td><input type = "text"  name="roomNo" ></td>
		</tr>

		<tr>
			<td>Approve</td>
			<td><input type = "text" name="Approve" value="<?php echo $ApproveMent ?>">
<p><?php echo $ApproveMentERR; ?></p></td>
		</tr>

<tr>
	<td colspan="2" align="center"> <input type="submit" id="button"name="submit" value="Submit">
		<a href="Profilesave.php">BACK</a></a></td>


</tr>
</form>



<p id = "errorMsg"></p>
<script>
    function validate(){
        var isValid= false;
        var username= document.forms["jsForm"]["username"].value;

        var Approve= document.forms["jsForm"]["Approve"].value;
if (username == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up USERNAME Properly </b>";


document.getElementById('errorMsg').style.color="red";

}

        else if (Approve == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up Approve Properly </b>";


document.getElementById('errorMsg').style.color="red";

}
else{
    isValid = true;
}

        return isValid;
    }

</script>





</table>

</body>
</html>

