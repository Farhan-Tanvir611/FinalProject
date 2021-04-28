<?php
session_start();

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>




 	<?php

$msger="";
if( $_SERVER['REQUEST_METHOD']=="POST"){
  
$hostname = "localhost";
    $username = "farhan34";
    $password = "farhan34";
    $dbname = "signup";

    // Mysqli Procedural
    $conn2 = mysqli_connect($hostname, $username, $password, $dbname);

	if(mysqli_connect_error()) {
        echo "Database Connection Failed!...";
        echo "<br>";
        echo mysqli_connect_error();
    }
    else {
   
    if($_SESSION['user']  == $_POST['username']){
    
         $stmt2 = mysqli_prepare($conn2, "insert into roommod (User,Textbox) values (?, ?)");
        mysqli_stmt_bind_param($stmt2, "ss", $usr,$txtbox);
      $usr = $_POST['username'];
        $txtbox = $_POST['room'];
       
        $res = mysqli_stmt_execute($stmt2);


        if($res) {
            echo " <br> Data Insert Successful!";
            header("Location: ProfileSave.php ");
            exit();
        }
        else {
            echo "Data Insertion Failed.";
            echo "<br>";
           
}


}

else{
	$msger= "Give your own username";

   }
}
}

?>
   <?php include "DateTime.php" ?>

 <?php
echo "<br><b>Welcome ". $_SESSION['user'];
?>


  	

 

 
</font>

<form  name ="jsForm"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" onsubmit="return validate()" method="post">

 <label for="username">Username:</label>
<input  style="color: blue; font-size : 10px; width: 90px; height: 20px;" type="text" name="username" id="username"> </input>

<br>

<br><br>
<label for="room">Comment Box</label>
<input style="color: blue; font-size : 25px; width: 700px; height: 100px;"  type="text" name="room" id="room"  placeholder="If any modification required, inform here.."> </input>

<br>
<br>
</font>


</center>
<p> <?php  echo $msger?></p>

 </fieldset></b>
<center>
	<br>
<input style="font-family: 'Cooper Black'; color: black; font-size : 15px; width: 80px; height: 30px;" type="submit" value="Send">

</center>
</form>
<p id = "errorMsg"></p>
<script>
	function validate(){
        var isValid= false;
		var username= document.forms["jsForm"]["username"].value;

		var room= document.forms["jsForm"]["room"].value;
if (username == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up USERNAME Properly </b>";


document.getElementById('errorMsg').style.color="red";

}

		else if (room == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up CommentBoxs Properly </b>";


document.getElementById('errorMsg').style.color="red";

}
else{
	isValid = true;
}

		return isValid;
	}

</script>
</font>




</body>
</html>