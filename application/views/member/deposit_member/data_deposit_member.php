<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="card mt-3">
		<div class="card-body text-dark">
			<h3 class="card-title border-bottom">รายการเงินฝาก</h3>
			<table class="table table-bordered border-success border-top table-hover text-center my-4" id="myTable">
				<thead>
					<tr>
						<td>วันที่</td>
						<td>เงินฝาก</td>
						<td>เงินถอน</td>
						<td>ยอดเงินคงเหลือ</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($result->result() as $row) { ?>
						<tr>
							<td><?= thaidate('j M Y ', strtotime($row->F_TIME)) ?></td>
							<td><?= number_format($row->F_DEP, 2) ?></td>
							<td><?= number_format($row->F_WDL, 2) ?></td>
							<td><?= number_format($row->F_BALANCE, 2) ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
