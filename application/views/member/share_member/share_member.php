<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h5 class="card-title border-bottom">เงินหุ้น</h5>
			<table class="table table-bordered border-success border-top table-hover text-center my-4">
				<thead>
					<tr>
						<td>เลขที่สมาชิก</td>
						<td>สาขาที่สังกัด</td>
						<td>เงินคงเหลือ</td>
						<td>คะแนนสะสมคงเหลือ</td>
					</tr>
				</thead>
				<tr>
					<td><?= $result->MEM_ID ?></td>
					<td><?= $result->BR_NAME ?></td>
					<td><?= number_format($result->SHR_SUM_BTH, 2); ?></td>
					<td><?= $result->POINT_SHR ?></td>
				</tr>
			</table>
			<hr>
			<div class="datatable">
				<table class="table table-bordered border-success table-hover text-center my-4">
					<thead>
						<tr>
							<td>เลขที่ใบเสร็จ</td>
							<td>ประเภทหุ้น</td>
							<td>วันที่ทำรายการ </td>
							<td>จำนวนหุ้น</td>
							<td>จำนวนเงิน</td>
							<td>เงินคงเหลือ </td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($detail->result() as $row) { ?>
							<tr>
								<td><?= $row->SLIP_NO ?></td>
								<td><?= $row->SHR_NA ?></td>
								<td><?= thaidate('j M Y ', strtotime($row->TMP_DATE_TODAY)) ?></td>
								<td><?= $row->TMP_SHARE_QTY; ?></td>
								<td><?= number_format($row->TMP_SHARE_BHT, 2)  ?></td>
								<td><?= number_format($row->SHR_SUM_BTH, 2)  ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
