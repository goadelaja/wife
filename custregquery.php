<?php
        require_once("inc/connect.php");

        if($_POST[''] = !null){
        $customerName = mysqli_real_escape_string($conn, $_POST['customerName']);
        $customerAddress = mysqli_real_escape_string($conn, $_POST['customerAddress']);
        $customerPhoneNumber = mysqli_real_escape_string($conn, $_POST['customerPhoneNumber']);
        }

        $sql = "INSERT INTO customers (customerName, customerAddress,customerPhoneNumber ) 
                VALUES ('$customerName',' $customerAddress','$customerPhoneNumber');";
        $res = mysqli_query($conn, $sql);

        if(!$res){
          die("Query failed");
        }
      
      header("Location: custreg.php");
      ?>