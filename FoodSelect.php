<?php


$UserName = $_POST['username'];
$FoodType = $_POST['Type'];




 
$details = array('UserName' => $UserName, 'FoodType' => $FoodType);
$details_encoded = json_encode($details);

 $filepath = "food.txt";

 $reg_file = fopen($filepath, "a");
fwrite($reg_file, $details_encoded . "\r\n ");
fclose($reg_file);

header("Location: Button.php ");
exit();


?>