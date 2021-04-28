<?php
session_start();
?>
<style >
     table{
         border-collapse: collapse;
         width: 100%;
         color: #483C32;
         font-family: monospace;
         font-size: 20px;
         text-align: left;
     }
     th{
         background-color: #7F525D;
         color: white;

 

    
     }

 


    tr:nth-child(even){
        background-color: #B38481 ;
        width:100px;
    }
    tr:nth-child(odd){
      background-color: #7F4E52 ;
        width:100px;
    }
    

 

</style>
    <?php 

 

    $User ="";
$Usererr ="";

 

 if($_SERVER['REQUEST_METHOD'] == "POST") {

 

 if(empty($_POST['User'])) {
$Usererr = "Please Fill up the Username!";
}
else
{
$User=$_POST['User'];
}

 

 
 

 

if($Usererr ==""){
    ?><table>
<tr>
            <th>User</th>
            <th>Present</th>
            <th>Permanent</th>
            <th>Phone</th>
            <th>Email</th>
        
</tr>
        <?php
 $User = $_POST['User'];

 

    $hostname = "localhost";
    $username = "farhan34";
    $password = "farhan34";
    $dbname = "signup";

 


    $conn1 = new mysqli($hostname, $username, $password, $dbname);

 

    if($conn1->connect_errno) {
        echo "Database Connection Failed!...";
        echo "<br>";
        echo $conn1->connect_error;
    }
    else {

 

        if($_POST['User'] == $_SESSION['user']){

 

        $stmt = $conn1->prepare("SELECT * from sign where User = ?");
        $stmt->bind_param("s", $p1);
        $p1 = $_POST['User'];
        $stmt->execute();
        $result = $stmt->get_result();

 

        echo "<br>";
        echo "<br>";
        if($result->num_rows > 0){

 

              while ($row = $result-> fetch_assoc()) {
        echo  "<tr><td>" .$row["User"] ."<td>" . $row["Present"] ."<td>" . $row["Permanent"] ."<td>" . $row["Phone"] ."<td>" . $row["Email"] . "<td>" . "</td> <td><a href = 'Detailsupdate.php'>Update</td></tr>"; ; 

 

}
}

 

else{

 

    echo "No result";
}
    }

 

    else{
    echo   $User = "Input your own Username!";

 

    }
}

 

    $conn1->close();
}
}
 ?>

 

</table>
</body>
</html>

 


<!DOCTYPE html>
<html>
<head >
<title>Details</title>
<link rel="stylesheet" type="text/css" href="">

 

<body style="height: 100vh; background-size: cover;" background= "Hotel.jpg">

 

<div class="Details">
<center>
<h2 style="color: black;"><b><?php echo "Welcome " . $_SESSION['user'] ?></b> </h2>

<form name="jsForm" onsubmit="return validate()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST"><b>

 

<br>
<br>
<p>User</p>
<label for="User"></label>
<input type="text" name="User" id="User" >
<h5 style="color: #800517">
<?php echo $Usererr; ?></h5>
<br>

 


<input type="submit" value="send">

<h2 style="font-family: cooper black"><p id="errorMsg"></p></h2>

 

 </div>
</font>

 


</form>

 

        
</center>

 

 <script>
        function validate() {
            var isValid = false;
            var User = document.forms["jsForm"]["User"].value;
            

 

            if(User == "" ) {
                document.getElementById('errorMsg').innerHTML = "Please fill up the food form properly";
                document.getElementById('errorMsg').style.color = "#8C001A";
            }
            else {
                isValid = true;
            }

 

            return isValid;
        }
    </script>
</body>
</head>
</html>