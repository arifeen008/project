<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="card mt-3">
		<div class="card-body text-dark">
			<h3 class="card-title border-bottom">เงินฝาก</h3>
			<table class="table table-bordered border-success table-hover text-center my-4">
				<thead>
					<tr>
						<th>ชื่อบัญชี</th>
						<th>เลขบัญชี</th>
						<th>ประเภทบัญชี</th>
						<th>สาขา</th>
						<th>ยอดเงินคงเหลือ</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($result->result() as $row) { ?>
						<tr>
							<td><?= $row->ACCOUNT_NAME ?></td>
							<td><?= BankAccount($row->ACCOUNT_NO) ?></td>
							<td><?= $row->ACC_DESC ?></td>
							<td><?= $row->BR_NAME ?></td>
							<td><?= number_format($row->BALANCE, 2) ?></td>
							<td><a href="<?php echo site_url('member/data_deposit_member/' . $row->ACCOUNT_NO)  ?>" class="btn btn-success">ดูข้อมูล</a>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
