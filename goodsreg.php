<?php
$PageTitle = "Goods Register";
$good = "selected";
include("inc/header.php");
?>
      <section id="section">
        <form id="form" action="goodsregquery.php" method="POST" >
          <table>
              <tr>
                <td class="tab">Materials 
                  <select name="material_types" class="materials">
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
                <td class="tab">Cost <input  type="number" name = "amount"></td>
              </tr>
              <tr>
                <td class="tab">Quantity <input  type="number" name="quantities" ></td>
              </tr>

          </table>
          <button class="search" type="submit">Submit</button>
      </form>
      </section>
<?php
include("inc/footer.php");
?>
