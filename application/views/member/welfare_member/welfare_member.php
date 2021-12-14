<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h5 class="card-title border-bottom">สวัสดิการสมาชิก</h5>
			<table class="table table-bordered border-success table-hover text-center my-4">
				<thead>
					<tr>
						<td>เลขสมาชิก</td>
						<td>สาขา</td>
						<td>วันครบกำหนดต่อตะกาฟุล</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?= $result->MEM_ID ?></td>
						<td><?= $result->BR_NAME ?></td>
						<td><?php echo thaidate('j M Y', strtotime($result->EXCHG_DATE))  ?> </td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
