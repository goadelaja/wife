<?php
$PageTitle = "Customer Registration";
$cust = "selected";
include("inc/header.php");
?>

  <section id="section">
    <form id="form">
      <table>
          <tr>
            <td class="tab">Date <input type="date"></td>
          </tr>
          <tr>
            <td class="tab">Customer Name <input type="text"></td>
          </tr>
          <tr>
            <td class="tab"> Address <input type="text"></td>
          </tr>
          <tr>
            <td class="tab">Phone Number <input type="text"></td>
          </tr>
      </table>
      <button class="search" type="submit">Search</button>
  </form>
  </section>

<?php
include("inc/footer.php");
?>
