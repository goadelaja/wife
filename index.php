<?php
$PageTitle = "Heritage Place";
$ind = "selected";
include("inc/header.php");

 ?>
		<section id="section">
			<form id="form" method="POST" action="indexquery.php">
				<table id="tab">
					<tr>
						<td class="tab">Selected Material

							<select name="materials" class="materials">
									<option   value = "Select">Select Materials</option>
									<option  value = "Ankara">Ankara(small 1)</option>
					                 <option value = "Ankara">Ankara(small 2)</option>
					                 <option value = "Ankara">Ankara(small 3)</option>
									<option value = "Ankara2">Ankara(Big 1)</option>
				                    <option value = "Ankara2">Ankara(Big 2)</option>
				                    <option value = "Ankara2">Ankara(Big 3)</option>
									<option value = "Atiku">Atiku(Small 1)</option>
					                <option value = "Atiku">Atiku(Small 2)</option>
					                <option value = "Atiku">Atiku(Small 3)</option>
					                <option value = "Atiku">Atiku(Small 4)</option>
									<option value = "Atiku2">Atiku (Big 1)</option>
				                    <option value = "Atiku2">Atiku (Big 2)</option>
				                    <option value = "Atiku2">Atiku (Big 3)</option>
				                    <option value = "Atiku2">Atiku (Big 4)</option>
									
							</select>
						</td>
          			</tr>
          
				</table>
				<button  name="search" class="search" type="submit">Search</button>
			</form>

      
		</section>
		<?php
include("inc/footer.php");
    ?>
