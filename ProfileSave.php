<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head><meta charset="utf-8">
<title></title>
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link rel="stylesheet" href="FproSave.css" />
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<div class = "wrapper">
	<nav class= "navbar">
		

		<ul>

	

			<li><h1>WELCOME TO MANAGER <?php
echo  $_SESSION['user'];
?></h1></li>


<li><a class="active"href="Alogin1.php">
<i class= "fa fa-home"></i> Home </a></li>

<li><a href="#"> <i class = "fa fa-user"> </i> Services</a>
<div class = "sub-menu-1">
	<ul>
		<li><a href="Frmodify.php">Room Modification</a></li>
		<br>


        <li><a href="FEvent.php">Event Management</a></li>
<br>
        <li><a href="Frcheck.html">Check Room</a></li>
   </ul>
</div>

</li>


<li><a href="Fcontact.php"> <i class="fa fa-phone-square"></i>   Contact</a></li>
<li><a href="Fchpass.php">Change Password</a></li>
<li><a href="Details.php"> <i class="fa fa-info"></i>  Profile Details</a></li>


</div>

</ul>
	</nav>
	












 
<center>
<div class = "buttons">


 <button onclick="window.location.href='Tsignup.php'">Add Receptionist</button>
 <br>
 <br>


<button onclick="window.location.href='Fprofileview.php'" >Receptionist details</button>
<br>
<br>

 

<button onclick="window.location.href='Fpayment.html'">Payment List</button>
<br>
<br>

<button onclick="window.location.href='Fbookingap.php'">Booking  Approval</button>
<br>
<br>

<button onclick="window.location.href='Fuserinfo.html'" >User Information</button>
<br>
<br>

<button onclick="window.location.href='Flogout.php'" >Logout</button>
<br>
<br>


 </div>
 </div>

</center>
</b>

 
<footer>
	<div class = "footer-content">
		<ul class="socials">
			<li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
<li><a href="https://plus.google.com/"><i class="fab fa-google-plus"></i></a></li>
<li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
<li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>


		</ul>
	</div>
	<div class="footer-bottom">
		<p>copyright &copy;2021.designed by<span>Farhan</span></p>
	</div>
</footer>
 

</body>
</html>