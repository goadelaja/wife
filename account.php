<?php
$PageTitle = "Account";
$acc = "selected";
include("inc/header.php");
?>
      <form method="POST" action="accountquery.php" id="form">
          <table>
            <tr>
              <td class="tab">Date <input class="tab" name="transactionDate" type="date"></td>
            </tr>

            <tr>
              <td class="tab">Name <input name="customerName" type="text"></td>
            </tr>
            <tr>
              <td class="tab">material

                <select class="tab" name="material">
                    <option   value = "Select Materials">Select Materials</option>
                    <option  value = "Ankara(small 1)">Ankara(small 1)</option>
                    <option value = "Ankara(small 2)">Ankara(small 2)</option>
                    <option value = "Ankara(small 3">Ankara(small 3)</option>
                    <option value = "Ankara(Big 1)">Ankara(Big 1)</option>
                    <option value = "Ankara(Big 2)">Ankara(Big 2)</option>
                    <option value = "Ankara(Big 3)">Ankara(Big 3)</option>
                    <option value = "Atiku(Small 1)">Atiku(Small 1)</option>
                    <option value = "Atik(Small 2)">Atiku(Small 2)</option>
                    <option value = "Atiku(Small 3)">Atiku(Small 3)</option>
                    <option value = "Atiku(Small 4)">Atiku(Small 4)</option>
                    <option value = "Atiku (Big 1)">Atiku (Big 1)</option>
                    <option value = "Atiku (Big 2)">Atiku (Big 2)</option>
                    <option value = "Atiku (Big 3)">Atiku (Big 3)</option>
                    <option value = "Atiku (Big 4)">Atiku (Big 4)</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="tab">Quantity Purchased <input type="number" name="quantityPurchased" min="1" ></td>
            </tr>
            <tr>
              <td class="tab">Amount Paid <input name="amountPaid" type="number" ></td>
            </tr>
            <tr>
              <td class="tab">Amount owed <input name="amountOwed" type="number" ></td>
            </tr>
          </table>
              <button  class="search" type="submit" >Submit</button>

<?php
include("inc/footer.php");
?>
