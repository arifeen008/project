<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>

<main id="content" style="margin-top: 10px">
	<div class="container pt-4 pt-lg-5">
		<div class="card my-3">
			<div class="card-body text-dark">
				<h1 class="card-title border-bottom">ยอดเงินในบัญชี</h1>
				<div class="datatable" data-mdb-bordered="true" data-mdb-striped="true">
					<table>
						<thead>
							<tr>
								<th>วันที่</th>
								<th>เงินฝาก</th>
								<th>เงินถอน</th>
								<th>ยอดเงินคงเหลือ</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($account_details->result() as $row) { ?>
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
</main>