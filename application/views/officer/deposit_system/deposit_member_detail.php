<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>

<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h1 class="card-title border-bottom">ยอดเงินในบัญชี</h1>

			<table class="table table-striped">
				<tr>
					<td>เลขบัญชี</td>
					<td><?= BankAccount($result->ACCOUNT_NO)   ?></td>
				</tr>
				<tr>
					<td>ชื่อบัญชี</td>
					<td><?= $result->ACCOUNT_NAME ?></td>
				</tr>
				<tr>
					<td>ยอดคงเหลือ</td>
					<td><?= number_format($result->BALANCE) ?> บาท</td>
				</tr>
				<tr>
					<td>ยอดที่ถอนได้</td>
					<td><?= number_format($result->AVAILABLE) ?> บาท</td>
				</tr>
			</table>
			<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
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
