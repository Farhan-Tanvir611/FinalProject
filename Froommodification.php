<?php



$Room = $_POST['room'];

$username = $_POST['username'];


 
$details = array('username' => $username ,  'Needs to modify' => $Room);
$details_encoded = json_encode($details);

 $filepath = "Frmodify.txt";

 $reg_file = fopen($filepath, "a");
fwrite($reg_file, $details_encoded . "\r\n ");
fclose($reg_file);

header("Location: ProfileSave.php ");
exit();


?>