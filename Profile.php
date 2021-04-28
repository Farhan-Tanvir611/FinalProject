<?php
session_start();
?>
 
 
 

<!DOCTYPE html>
<html>
<head>
<title>Button </title>
</head>
<body background= "street.jpg">
 
 <font size="5" color="White">
<center>
<?php
echo "Welcome ". $_SESSION['user'];

?>
</center>
</font>

    <br>
    <br>

 <fieldset >

 <br>
<br>
 
 
<center>
 
  
<button onclick="window.location.href='TCheckInOut.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Check in/Check out</button>
<br>
<br>

<button onclick="window.location.href='TFood.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Food Details</button>
<br>
<br>
 
<button onclick="window.location.href='TUserDetails.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">User Details</button>

<br><br>
<button onclick="window.location.href='Tlogout.php'" style="font-family: 'Cooper Black'; font-size: 16px; width: 200px; height: 40px;  color:yellow;  background:cyan; border-color:black;">Logout</button>
<br>
<br>
 
 
 
</center>
</fieldset></b>
 
 
 
 
 
</body>
</html>
