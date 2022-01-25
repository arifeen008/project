<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>

<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h1 class="card-title border-bottom">รายละเอียดสินเชื่อ</h1>
			<table class="table table-borderless">
				<tbody>
					<tr>
						<td>เลขที่สัญญา</td>
						<td><?php echo $loan_select->LCONT_ID ?></td>
					</tr>
					<tr>
						<td>ชื่อสัญญา</td>
						<td><?php if ($loan_select->L_TYPE_CODE === "1" && $loan_select->LSUB_CODE === "1") {
								echo ' ฉุกเฉิน';
							} elseif ($loan_select->L_TYPE_CODE === "2" && $loan_select->LSUB_CODE === "1") {
								echo ' สามัญ ';
							} elseif ($loan_select->L_TYPE_CODE === "3" && $loan_select->LSUB_CODE === "1") {
								echo ' พิเศษ';
							} elseif ($loan_select->L_TYPE_CODE === "3" && $loan_select->LSUB_CODE === "2") {
								echo ' โครงการ';
							} elseif ($loan_select->L_TYPE_CODE === "2" && $loan_select->LSUB_CODE === "2") {
								echo ' สามัญฉุกเฉิน';
							} elseif ($loan_select->L_TYPE_CODE === "3" && $loan_select->LSUB_CODE === "3") {
								echo ' โครงการสินทรัพย์';
							} else {
								echo 'เจ้าหน้าที่';
							}
							?></td>
					</tr>
					<tr>
						<td>วันที่ทำสัญญา</td>
						<td><?php echo thaidate('j M Y ', strtotime($loan_select->LCONT_DATE)) ?></td>
					</tr>
					<tr>
						<td>วันที่หมดสัญญา</td>
						<td><?php echo thaidate('j M Y ', strtotime($loan_select->END_PAYDEPT)) ?></td>
					</tr>
					<tr>
						<td>ยอดอนุมัติสินเชื่อ</td>
						<td><?php echo number_format($loan_select->LCONT_APPROVE_SAL, 2) ?></td>
					</tr>
					<tr>
						<td>จำนวนงวดคงเหลือ</td>
						<td><?php echo $loan_select->LCONT_AMOUNT_INST ?></td>
					</tr>
					<tr>
						<td>จำนวนเงินคงเหลือ</td>
						<td><?php echo number_format($loan_select->LCONT_AMOUNT_SAL, 2) ?> บาท</td>
					</tr>
				</tbody>
			</table>
			<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
				<table>
					<thead>
						<tr>
							<th>วันที่</th>
							<th>งวดที่</th>
							<th>ยอดชำระ</th>
							<th>ยอดคงเหลือ</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($loan_details->result() as $row) { ?>
							<tr>
								<td><?= thaidate('j M Y ', strtotime($row->LPD_DATE)) ?></td>
								<td><?= $row->LPD_NUM_INST ?></td>
								<td><?= number_format($row->SUM_SAL, 2) ?></td>
								<td><?= number_format($row->LCONT_BAL_AMOUNT, 2) ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
