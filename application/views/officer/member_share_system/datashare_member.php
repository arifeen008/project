<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>

<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h1 class="card-title border-bottom">ข้อมูลหุ้น</h1>
			<table class="table table-bordered">
				<tr align="center">
					<td>เลขที่สมาชิก</td>
					<td>สาขาที่สังกัด</td>
					<td>เงินคงเหลือ</td>
					<td>คะแนนสะสมคงเหลือ</td>
				</tr>

				<tr align="center">
					<td><?= $resume->MEM_ID ?></td>
					<td><?= $resume->BR_NAME ?></td>
					<td><?= $resume->SHR_SUM_BTH ?></td>
					<td><?= $resume->POINT_SHR  ?></td>
				</tr>
			</table>
			<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
				<table>
					<thead>
						<tr>
							<th>เลขที่ใบเสร็จ</th>
							<th>ประเภทหุ้น</th>
							<th>จำนวนหุ้น</th>
							<th>จำนวนเงิน</th>
							<th>วันที่ทำรายการ</th>
							<th>จำนวนเงินคงเหลือ</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result->result() as $row) { ?>
							<tr>
								<td><?= $row->SLIP_NO ?></td>
								<td><?= $row->SHR_NA ?></td>
								<td><?= $row->TMP_SHARE_QTY ?></td>
								<td><?= number_format($row->TMP_SHARE_BHT, 2) ?></td>
								<td><?= thaidate('j M Y ', strtotime($row->TMP_DATE_TODAY)) ?></td>
								<td><?= number_format($row->SHR_SUM_BTH, 2) ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
