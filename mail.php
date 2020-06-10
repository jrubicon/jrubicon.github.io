<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(isset($_POST['message']) && isset($_POST['email']) && isset($_POST['name'])){
  $to = " ";
  $subject = "GITHUB PORTFOLIO: ".$name;
  $headers = "From: " .$email. "\r\n";

  mail($to,$subject,$message,$headers);

}
else {
  echo "ERROR DETAILS NOT PROVIDED";
}
?>
