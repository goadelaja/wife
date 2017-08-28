<?php
$PageTitle = "Heritage Place";
$ind = "selected";
include("inc/header.php");

 ?>
		<section id="section">
			<form id="form" method="GET" action="indexquery.php">
				<table id="tab">
					<tr>
						<td class="tab">Selected Material

							<select name="search" class="materials">
									<option name="search"  value = "Select">Select Materials</option>
									<option name="search" value = "Ankara(small 1)">Ankara(small 1)</option>
					                 <option name="search" value = "Ankara(small 2)">Ankara(small 2)</option>
					                 <option value = "Ankara(small 3)">Ankara(small 3)</option>
									<option name="search" value = "Ankara(Big 1)">Ankara(Big 1)</option>
				                    <option name="search" value = "Ankara(Big 2)">Ankara(Big 2)</option>
				                    <option name="search" value = "Ankara(Big 3)">Ankara(Big 3)</option>
									<option name="search" value = "Atiku(Small 1)">Atiku(Small 1)</option>
					                <option name="search" value = "Atiku(Small 2)">Atiku(Small 2)</option>
					                <option name="search" value = "Atiku(Small 3)">Atiku(Small 3)</option>
					                <option name="search" value = "Atiku(Small 4)">Atiku(Small 4)</option>
									<option name="search" value = "Atiku (Big 1)">Atiku (Big 1)</option>
				                    <option name="search" value = "Atiku (Big 2)">Atiku (Big 2)</option>
				                    <option name="search" value = "Atiku (Big 3)">Atiku (Big 3)</option>
				                    <option name="search" value = "Atiku (Big 4)">Atiku (Big 4)</option>

							</select>
						</td>
          			</tr>

				</table>
				<button  name="submit_search" class="search" type="submit">Search Price</button>
			</form>

      <form method="GET" action="indexnamequery.php">
              <input class="cust_2" type="text" name = "search_customer" placeholder="Customer Name"><br>
              <button  name="submit_search_1" class="search1" type="submit">Search Names</button>
      </form>

		</section>
		<?php
include("inc/footer.php");
    ?>
