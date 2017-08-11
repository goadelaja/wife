<?php
$PageTitle = "Account";
$acc = "selected";
include("inc/header.php");
?>
      <section id="section">
        <form id="form">
          <table>
              <tr>
                <td class="tab">Date <input type="date"></td>
              </tr>
              <tr>
                <td class="tab">Name <input type="text"></td>
              </tr>
              <tr>
                <td class="tab">Selected Material

                  <select>
                      <option value = "Select">Select Materials</option>
                      <option value = "Ankara">Ankara(small)</option>
                      <option value = "Ankara2">Ankara(Big)</option>
                      <option value = "Atiku">Atiku(Small)</option>
                      <option value = "Atiku2">Atiku (Big)</option>
                      <option value = "others">Others</option>
                  </select>

                </td>
              </tr>

              <tr>
                <td class="tab">Quantity Purchased <input type="number" name="quantity" min="1" max="100"></td>
              </tr>
              <tr>
                <td class="tab">Amount Paid <input type="number" ></td>
              </tr>
              <tr>
                <td class="tab">Amount owed <input type="number" ></td>
              </tr>

          </table>
          <button  class="search" type="submit" >Search</button>
        </form>
      </section>
<?php
include("inc/footer.php");
?>
