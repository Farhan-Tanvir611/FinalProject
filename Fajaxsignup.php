<?php 

 

if($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $user = $_POST["user"];
     $myname = $_POST["myname"];
   
    $dateOfBirth = $_POST["dateOfBirth"];
    $fathername = $_POST["fathername"];
    $mothername = $_POST["mothername"];
    $paddress = $_POST["paddress"];
    $permaddress = $_POST["permaddress"];
     $phone = $_POST["phone"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $Confirmpass = $_POST["Confirmpass"];
    

    $conn = new mysqli("localhost", "farhan34", "farhan34", "signup");

 

    if(empty($user) ||empty($myname) || empty($dateOfBirth)||empty($fathername)||empty($mothername)  || empty($paddress) || empty($permaddress) || empty($phone)||empty($email)||empty($pass)  || empty($Confirmpass)) {
        echo "Fill up the form properly";
    }
    else {

 

        if($conn -> connect_error) {
            echo "Failed to connect database!";
        }
        else {


            $stmt = $conn -> prepare("INSERT into sign (User,Name,DOB,Father,Mother,Present,Permanent,Phone,Email,Password) values (?, ?, ?, ?, ?, ?,?,?,?,?)");
        mysqli_stmt_bind_param($stmt, "ssssssssss", $user,$myname,$dateOfBirth , $fathername ,$mothername, $paddress ,$permaddress, $phone,$email,$pass);
            $status = $stmt -> execute();

 

            if($status) {
                echo "Successfully saved!";
            }
            else {
                echo "Username already existed!";
            }
            

        }
          
           $conn -> close();  
    }    
    
 
}

 

?>
