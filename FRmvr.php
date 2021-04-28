
<?php
include ("Fprofileview.php");

$rn = $_GET['rn'];


//$User= $_GET['rn'];
$conn= mysqli_connect("localhost","farhan34","farhan34","check");
mysqli_select_db($conn,'check1');

$sql= "DELETE FROM check1 WHERE User = '$rn'";



if(mysqli_query($conn,$sql)){
	header ("refresh:1; url=FRmvr.php");
}
else{
	echo "NOT DELETED";

}


?>
<form>

<a href="ProfileSave.php">BACK</a></a></td>
</form>




