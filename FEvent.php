<?php

  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
</head>
<body>
    <center>
    <h1 style=" color: cyan;text-align:centre; font-size : 70px;">Event</h1>
    </center>
 <h1 style=" color: cyan; text-align:center; ;font-size : 25px;;">
    <?php
    
 echo "<b>  Welcome " . $_SESSION['user']."</b>";
 ?>
</h1>

<table border="2">
    <tr>
      <th> UserName</th>
      <th> BookingDate</th>
      <th> EventType</th>
     
    </tr>

 <h1 style=" color: white; text-align:right ;font-size : 15px;">



<?php
 $conn= mysqli_connect("localhost","farhan34","farhan34","user");
if($conn->connect_error){

  die("Connection failed:". $conn-> connect_error);
}


$sql = "SELECT UserName,BookingDate,EventType from event ";
$result = $conn-> query($sql);

if($result-> num_rows > 0){

  while ($row = $result-> fetch_assoc()){
    echo"<tr><td>". $row["UserName"] . "</td><td>". $row["BookingDate"] . "</td><td>". $row["EventType"]  . "</td> </tr>";

    


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

                   


</h1>
</table>
</body>
</html>