<?php
require_once("inc/connect.php");

      if(isset($_GET['submit_search'])){
        $search = mysqli_real_escape_string($conn, $_GET['search']);

        $sql = "SELECT * FROM materials WHERE material_types LIKE '%$search%'";



          $res = mysqli_query($conn, $sql);
          if(mysqli_num_rows($res) >= 0){
            while($row = mysqli_fetch_assoc($res)){
                echo "<p><strong> Material Type: </strong>".$row['material_types']."</p>"
              ."<p><strong>Amount in Naira: </strong></p>"  .$row['amount']
              ."<p><strong>Quantities Purchased : </strong></p>".$row['quantities'] . "</p>";
            }
          }else{
            echo "your search did't return any result";
          }
      }
      // header("Location: index.php");
       ?>
