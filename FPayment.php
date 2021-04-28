
<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

 $UserName = $_POST["UserName"];
$BedType = $_POST["BedType"];
$PaymentType = $_POST["PaymentType"];
 if(empty($UserName)|| empty($BedType)|| empty($PaymentType)) {
echo "Fill up the form properly";
}
else {

 $conn = new mysqli("localhost", "farhan34", "farhan34", "user");

 if($conn -> connect_error) {
echo "Failed to connect database!";
}
else {

 $stmt = $conn -> prepare("INSERT INTO payment (UserName,BedType,PaymentType) VALUES(?,?,?)");
$stmt -> bind_param("sss", $UserName,$BedType,$PaymentType);

 $status = $stmt -> execute();

 if($status) {
echo "Successfully saved!";
}
else {
echo "Failed to save data!";
}
$conn -> close();
}
}

}

if($_SERVER["REQUEST_METHOD"] == "GET") {

 $searchKey = $_GET['searchKey'];
$sql = "SELECT id,UserName,BedType,PaymentType FROM payment WHERE id = " . $searchKey;

 if(empty($searchKey)) {
$sql = "SELECT id, UserName,BedType,PaymentType FROM payment";
}
$conn = new mysqli("localhost", "farhan34", "farhan34", "user");

 if($conn -> connect_error) {
echo "Failed to connect database!";
}
else {
$result = $conn -> query($sql);

 if($result -> num_rows > 0) {

 echo "<br>";

 while($row = $result -> fetch_assoc()) {

 echo "<br>";
echo $row["id"] . " " . $row["UserName"] . " " . $row["BedType"]. " " . $row["PaymentType"];
echo "</br>";
}

 echo "</br>";
}
else {
echo "No record found!";
}
}
$conn -> close();
}

?>

