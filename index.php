<?php
$PageTitle = "Heritage Place";
$ind = "selected";
include("inc/header.php");
 ?>
		<section id="section">
			<form id="form">
				<table id="tab">
					<tr>
						<td class="tab">Date of Transaction <input type="date" value="<?php echo date('Y-m-d')?>"></td>
					</tr>
					<tr>
						<td class="tab">Customer Name <input type="text" name="customername"></td>
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
						<td class="tab">Amount Paid <input type="text" name="amountpaid"></td>
					</tr>
					<tr>
						<td class="tab">Debt owed <input type="text" name="debt"></td>
					</tr>

				</table>
				<button  class="search" type="submit">Search</button>
			</form>
		</section>
		<?php
include("inc/footer.php");
    ?>
