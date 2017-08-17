<?php
$PageTitle = "Customer Registration";
$cust = "selected";
include("inc/header.php");
?>

  <section id="section">
    <form action="custregquery.php" method="POST" id="form">
      <table>
          
          <tr>
            <td class="tab">Customer Name <input name="customerName" type="text"></td>
          </tr>
          <tr>
            <td class="tab"> Address <input name="customerAddress" type="text"></td>
          </tr>
          <tr>
            <td class="tab">Phone Number <input  name="customerPhoneNumber" type="text"></td>
          </tr>
      </table>
      <button  class="search" type="submit">Submit</button>
  </form>
  </section>

<?php
include("inc/footer.php");
?>
