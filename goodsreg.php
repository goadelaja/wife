<?php
$PageTitle = "Goods Register";
$good = "selected";
include("inc/header.php");
?>
      <section id="section">
        <form id="form">
          <table>
              <tr>
                <td class="tab">Materials <input type="text"></td>
              </tr>
              <tr>
                <td class="tab">Cost <input type="number"></td>
              </tr>
              <tr>
                <td class="tab">Quantity <input type="number" name="quantity" min="1" max="100"></td>
              </tr>

          </table>
          <button class="search" type="submit">Search</button>
      </form>
      </section>
<?php
include("inc/footer.php");
?>
