<?php session_start();?>
<?php 
 const TITLE = "Ranking";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>


<?php require_once 'controllers/connect2.php'; 


$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, RANK() OVER (ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
	JOIN tbl_gods g ON c.god_id = g.id
	JOIN tbl_ashrams a ON c.ashram_id = a.id
	JOIN tbl_charstats cs ON c.charstats_id = cs.id
	JOIN tbl_tribes t ON c.tribe_id = t.id
	JOIN tbl_castesystem csm ON cs.caste_id = csm.id";


$data = "<table class='table mydatatable table-dark table-ranking text-center'>
			<thead class='thead-dark table-ranking-header'>
				<tr class='ranking-subheader'>
					<th scope='col'>Rank</th>
					<th scope='col'>Tribe</th>
					<th scope='col'>Player</th>
					<th scope='col'>Masterpoints</th>
					<th scope='col'>Caste</th>
					<th scope='col'>Ashram</th>
					<th scope='col'>God</th>
				</tr>
			</thead>
			<tbody class='ranking-data'>";


$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);


if ($count > 0) {
	while ($rowmain = mysqli_fetch_assoc($result)) {
		$rank = $rowmain['result_ranking'];
		$tribe_icon_path = $rowmain['tribe_icon_path'];
		$tribe_name = $rowmain['tribe_name'];
		$player = $rowmain['charname'];
		$masterpoints = $rowmain['masterpoint'];
		$caste = $rowmain['caste_name'];
		$ashram = $rowmain['ashram_name'];
		$god_icon_path = $rowmain['god_icon_path'];
		$god_name = $rowmain['god_name'];


		$data .= "
				<tr>
					<td>$rank</td>
					<td><img src='$tribe_icon_path' alt='$tribe_name' title='$tribe_name'></td>
					<td>$player</td>
					<td>$masterpoints</td>
					<td>$caste</td>
					<td>$ashram</td>
					<td><img src='$god_icon_path' alt='$god_name' title='$god_name'></td>
				</tr>";
		}

	}

else {
	$data .= "Error: " . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

<div class="bg-ranking">
<div class="bg-ranking-overlay">
<br>
<article>
	<div class="container ranking-table-bg">
		<div class="">
			<h1>Ranking</h1>
		</div>
		<div class="">
		<div class="">
			<div class="row">
				<div class="col-12">
					<div class="table-responsive table-ranking">
						<table class="table table-dark">
							<thead class="thead-dark">
								<tr>
									<th scope="col">
										<label for="selectgod">God&nbsp</label>
										<select class="mr-2" id="selectgod">
											<option selected value="all">All</option>
											<option value="brahma">Brahma</option>
											<option value="shiva">Shiva</option>
											<option value="vishnu">Vishnu</option>
										</select>
										<label for="selecttribe">Tribe&nbsp</label>
										<select id="selecttribe" class="mr-2">
											<option selected value="all">All</option>
											<option value="naga">Naga</option>
											<option value="kimnara">Kimnara</option>
											<option value="asura">Asura</option>
											<option value="rakshasa">Rakshasa</option>
											<option value="yaksa">Yaksa</option>
											<option value="gandharva">Gandharva</option>
											<option value="deva">Deva</option>
											<option value="garuda">Garuda</option>
										</select>
										<button class="btn btn-primary btn-sm px-2 ml-2" onclick="rankingBySelect()">Go</button>
									</th>
								</tr>
							</thead>
						</table>
					</div>
					<div class="table-responsive table-ranking" id="ranking_result">

						<!-- result -->
						<?php echo $data?>

						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
		</div>
	<br>
	</div>

</article>
<br>
<br>
</div>
</div>

<!-- <script type="text/javascript">
	$(document).ready(function(){
	    $('.mydatatable').DataTable({
	        "lengthMenu": [[10, 25, -1], [10, 25, "All"]],
	        "columnDefs": [
    { orderable: false, targets: [1,2,4,6] }
  ]

	    });
	});
</script> -->

<?php require_once 'partials/footer.php'; ?>