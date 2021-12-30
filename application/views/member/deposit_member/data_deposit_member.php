<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="card mt-3">
		<div class="card-body text-dark">
			<h3 class="card-title border-bottom">รายการเงินฝาก</h3>
			<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
				<table class="text-center text-dark">
					<thead>
						<tr>
							<th class="th-sm">วันที่</td>
							<th class="th-sm">เงินฝาก</td>
							<th class="th-sm">เงินถอน</th>
							<th class="th-sm">ยอดเงินคงเหลือ</th>
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
</div>
