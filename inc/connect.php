<?php
$erroMessage = 'Connection Failed';


$db_host = 'localhost';
$db_user = 'root';
$db = 'HeritagePlace';
$db_pwd = '';

$conn = mysqli_connect($db_host, $db_user, $db_pwd, $db );

if(mysqli_connect_errno()){
  die($erroMessage + mysqli_connect_error());
}//else{
  //echo "connected";
//}
?>
