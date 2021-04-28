
<!DOCTYPE html>
<html>
<head>
<title>PROFILE OF  MANAGER</title>
</head>
<body background="4717561.jpg" >
<center>
	
<?php

 $USERID = $NAME = $FATHERNAME =$MOTHERNAME = $PADDRESS = $PERADDRESS = $PHONE=  $EMAIL = $PASSWORD = $CONFIRMPASSWORD= "";
$USERIDERR = $NAMEERR = $FATHERNAMEERR =$MOTHERNAMEERR = $PADDRESSERR = $PERADDRESSERR = $PHONEERR=$EMAILERR =$PASSWORDERR=$CONFIRMPASSWORDERR= "";

 if($_SERVER['REQUEST_METHOD'] == "POST") {
if(empty( $_POST['user'])) {
$USERIDERR = "Please fill up ID";
}
else {
$USERID = $_POST['user'];
}
if(empty($_POST['myname'])) {
$NAMEERR = "Fill up your Name";
}
else {
$NAME = $_POST['myname'];
}

 if(empty($_POST['fathername'])) {
$FATHERNAMEERR = "Fill up your Father name";
}
else {
$FATHERNAME = $_POST['fathername'];
}

 if(empty($_POST['mothername'])) {
$MOTHERNAMEERR = "Please Fill up Your Mother name";
}
else {
$MOTHERNAME = $_POST['mothername'];
}

 if(empty($_POST['paddress'])) {
$PADDRESSERR = "Please Fill up Your Present Address";
}
else {
$PADDRESS = $_POST['paddress'];
}

 if(empty($_POST['permaddress'])) {
$PERADDRESSERR = "Please Fill up Your Permanent Address";
}
else {
$PERADDRESS = $_POST['permaddress'];
}
if(empty($_POST['phone'])) {
$PHONEERR = "Please fill up the Phone Number";
}

 else {
$PHONE = $_POST['phone'];
}
if(empty($_POST['email'])) {
$EMAILERR = "Please fill up with your Email";
}
else {
$EMAIL = $_POST['email'];
}

if(empty($_POST['pass'])) {
$PASSWORDERR = "Please fill up with your PASSWORD";
}
else {
$PASSWORD = $_POST['pass'];
}

if(empty($_POST['Confirmpass'])) {
$CONFIRMPASWORDERR = "Please fill up with your confirm PASSWORD";
}
else {
$CONFIRMPASSWORD= $_POST['Confirmpass'];
}




if( $USERIDERR=="" && $NAMEERR=="" && $FATHERNAMEERR=="" &&$MOTHERNAMEERR=="" && $PADDRESSERR=="" && $PERADDRESSERR =="" && $PHONEERR=="" && $EMAILERR =="" && $PASSWORD=="" && $CONFIRMPASSWORDERR=="") {

$User_Id = $_POST['user'];
$Name = $_POST['myname'];
$Gender = $_POST['gender'];
$Date_of_Birth = $_POST['dateOfBirth'];

$Father_Name= $_POST['fathername'];
$Mother_Name= $_POST['mothername'];
$Present_Address= $_POST['paddress'];
$Permanent_Address= $_POST['permaddress'];
$Phone_Number= $_POST['phone'];
$Email_Address= $_POST['email'];
$Password= $_POST['pass'];
$Confirm_Password = $_POST['Confirmpass'];

if($Password == $Confirm_Password){

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
      
    
    
         $stmt2 = mysqli_prepare($conn2, "insert into sign (User,Name,Gender,DOB,Father,Mother,Present,Permanent,Phone,Email,Password) values (?, ?, ?, ?, ?, ?, ?,?,?,?,?)");
        mysqli_stmt_bind_param($stmt2, "sssssssssss", $usr,$mname, $Gnder , $db , $father ,$mother, $padd ,$pradd, $phn,$eml,$psswrd);
      $usr = $_POST['user'];
        $mname = $_POST['myname'];
       $Gnder = $_POST['gender'];
       $db = $_POST['dateOfBirth'];
       $father=$_POST['fathername'];
       $mother=$_POST['mothername'];
       $padd=$_POST['paddress'];
       $pradd=$_POST['permaddress'];
       $phn = $_POST['phone'];
       $eml = $_POST['email'];
       
       $psswrd = $_POST['pass'];
        $res = mysqli_stmt_execute($stmt2);

 

 

 

        if($res) {
            echo " <br> Data Insert Successful!";
          //  header("Location: CoverPage.html ");
           // exit();
        }
        else {
            echo "Data Insertion Failed.";
            echo "<br>";
            $USERIDERR= "Check The Email and Userid" ;
}


        }
     

        //$_SESSION['username'] = $Lastname;
      }
    }

             else {
echo " Incorrect Password ";
}

}

?>
</center>
</body>
</html>
<html><head>
<title>REGISTRATION FORM OF MANAGER</title>
</head>
<body background="4717561.jpg">
<font color="Black"> <h1> <marquee> WELCOME TO SIGN UP PAGE OF MANAGER
</marquee> </h1> </font>
<hr>
<br>
<font size="4" color="White">
<form  name ="jsForm"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" onsubmit="return validate()" method="post"><b>
<b>
<center>

<label for="user"> User Id:</label>
<input type="text" name="user" id="user" color="Rainbow"value="<?php echo $USERID ?>">
<p><?php echo $USERIDERR; ?></p>
<br>

<label for="myname">Enter your name:</label>
<input type="text" name="myname" id="myname" color="Rainbow"value="<?php echo $NAME ?>">
<p><?php echo $NAMEERR; ?></p>
<br>

<!-- Radio -->
<label for="Gender">Gender: </label>
<input type="radio" name="gender" id="male" value="male" checked>
<label for="male">Male</label>

<input type="radio" name="gender" id="female" value="female">
<label for="female">Female</label>

<input type="radio" name="gender" id="other" value="other">
<label for="other">Other</label>
<br>
<br>
<!--date-->
<label for="dob">Date of Birth: </label>

<input type="date" id="dob" name="dateOfBirth" value="2021-02-15" min="1980-01-01" max="2025-12-31">

<br><br>
<!-- Input Text Field -->
<label for="fathername">Father's Name:</label>
<input type="text" name="fathername" id="fathername" value="<?php echo $FATHERNAME ?>">
<p><?php echo $FATHERNAMEERR; ?></p>

<br>

<!-- Input Text Field -->
<label for="mothername">Mother's Name:</label>
<input type="text" name="mothername" id="mothername" value="<?php echo $MOTHERNAME ?>">
<p><?php echo $MOTHERNAMEERR; ?></p>

<br>

<label for="paddress">Present Address: </label>
<input type="text" name="paddress" id="paddress" value="<?php echo $PADDRESS ?>">
<p><?php echo $PADDRESSERR; ?></p>

<br>
<label for="permaddress">Permanent Address: </label>
<input type="text" name="permaddress" id="permaddress" value="<?php echo $PERADDRESS ?>">
<p><?php echo $PERADDRESSERR;?></p>

<br>
<!--Phone/tel -->
<label for="phone">Phone number: </label>
<input type="tel" id="phone" name="phone" value="<?php echo $PHONE ?>">
<p><?php echo $PHONEERR; ?></p>
<br>
<!--Email/email-->
<label for="email">Email Address: </label>
<input type="email" id="email" name="email" value="<?php echo $EMAIL ?>">
<p><?php echo $EMAILERR; ?></p>
<br>

<label for="pass">Password</label>
<input type="password" id="pass" name="pass"    value="<?php echo $PASSWORD ?>">
<p><?php echo $PASSWORDERR; ?></p>
<br>
<br><br>

<label for="Confirmpass">Confirm Password:</label>
<input type="password" id="Confirmpass" name="Confirmpass"  value="<?php echo $CONFIRMPASSWORD ?>">
<p><?php echo $CONFIRMPASSWORDERR; ?></p>
<br>
<p id = "errorMsg"></p>

</font>
<input style="color: black; size: 1500px" type="submit" value="Submit">
<br>

</center>
</b>
</form>



<script>
    function validate(){
        var isValid= false;
        var user= document.forms["jsForm"]["user"].value;

        var myname= document.forms["jsForm"]["myname"].value;
             var gender= document.forms["jsForm"]["gender"].value;
                  var dateOfBirth= document.forms["jsForm"]["dateOfBirth"].value;
                       var fathername= document.forms["jsForm"]["fathername"].value;
                            var mothername= document.forms["jsForm"]["mothername"].value;
                                 var paddress= document.forms["jsForm"]["paddress"].value;
                                      var permaddress= document.forms["jsForm"]["permaddress"].value;
                                           var phone= document.forms["jsForm"]["phone"].value;
                                                var email= document.forms["jsForm"]["email"].value;
                                                     var pass= document.forms["jsForm"]["pass"].value;
                                                          var Confirmpass= document.forms["jsForm"]["Confirmpass"].value;

if (user == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up USERNAME Properly </b>";


document.getElementById('errorMsg').style.color="red";

}

else if (myname == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up your Name Properly </b>";


document.getElementById('errorMsg').style.color="red";

}
else if (gender== ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up your Gender Properly </b>";


document.getElementById('errorMsg').style.color="red";

}

else if (dateOfBirth == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up your Birthdate Properly </b>";


document.getElementById('errorMsg').style.color="red";

}

else if (fathername == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up your Father Name Properly </b>";


document.getElementById('errorMsg').style.color="red";

}

else if (mothername == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up your MOther Name Properly </b>";


document.getElementById('errorMsg').style.color="red";

}

else if (paddress== ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up your Address Properly </b>";


document.getElementById('errorMsg').style.color="red";

}

else if (permaddress == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up your Permanent Properly </b>";


document.getElementById('errorMsg').style.color="red";

}

else if (phone == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up your Mobile number Properly </b>";


document.getElementById('errorMsg').style.color="red";

}


else if (email == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up your Email Properly </b>";


document.getElementById('errorMsg').style.color="red";

}

        else if (pass == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up Password Properly </b>";


document.getElementById('errorMsg').style.color="red";

}


 else if (Confirmpass== ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up Confirm Password Properly </b>";


document.getElementById('errorMsg').style.color="red";

}


else{
    isValid = true;
}

        return isValid;
    }

</script>




</body>
</html>