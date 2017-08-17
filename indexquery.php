<?php
require_once("inc/connect.php");

      if(isset($_POST['$search'])){
        $materials = mysqli_real_escape_string($conn, $_POST['materials']);
        
        $sql = "SELECT * FROM materials
              WHERE material_types LIKE '%".$materials."%'
              OR amount LIKE '%".$materials."%'
              OR quantities LIKE '%".$materials."%'
            ";



          $res = mysqli_query($conn, $sql);
          if(mysqli_num_rows($res)>=0){
            while($row = mysqli_fetch_assoc($res)){
                echo $row['material_types'] .$$row['amount'].$row['quantities'];
            }
          }else{
            echo "your search did't return any result";
          }
      }
        header("Location: index.php");
       ?>