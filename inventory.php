<?php
$pageTitle = "Inventory";
$inv = "selected";
include("inc/header.php");
 ?>
       <section id="section">
         <form id="form">
           <table>
               <tr>
                 <td class="tab">Materials <input type="text"></td>
               </tr>
               <tr>
                 <td class="tab">Quantity Purchased <input type="number"></td>
               </tr>
               <tr>
                 <td class="tab">Quantity Sold <input type="number" name="quantity" min="1" max="100"></td>
               </tr>

               <tr>
                 <td class="tab">Quantity in store <input type="number" name="quantity" min="1" max="100"></td>
               </tr>

           </table>

          </form>
        </section>
 <?php
include("inc/footer.php");
 ?>
