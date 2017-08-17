<?php
        require_once("inc/connect.php");

        if($_POST[''] = !null){
        $material_types = mysqli_real_escape_string($conn, $_POST['material_types']);
        $amount = mysqli_real_escape_string($conn, $_POST['amount']);
        $quantities = mysqli_real_escape_string($conn, $_POST['quantities']);
        }

        $sql = "INSERT INTO materials (material_types, amount,quantities ) 
                VALUES ('$material_types',' $amount','$quantities');";
        $res = mysqli_query($conn, $sql);

        if(!$res){
          die("Query failed");
        }
      
      header("Location: goodsreg.php");
      ?>