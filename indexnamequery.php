<?php

require_once("inc/connect.php");

if(isset($_GET['submit_search_1'])){
    $search_customer = mysqli_real_escape_string($conn,$_GET['search_customer']);

    $sql = "SELECT * FROM customers";
    $res = mysqli_query($conn, $sql);

    $sql = "SELECT * FROM customers WHERE customerName LIKE '%$search_customer%'";


    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) > 0){
       while($row=mysqli_fetch_assoc($res)){
         echo "<p>Name :".$row['customerName']."</p>"
         ."<p>".$row['customerPhoneNumber']."</p>"
         ."<p>".$row['customerAddress']."</p>";
       }
    }else{
      die("Your search did not return any Name!!!");
    }

  }

?>
