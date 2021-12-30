<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="card mt-3">
		<div class="card-body text-dark">
			<h3 class="card-title border-bottom">รายละเอียดสินเชื่อ</h3>
			<div class="card">
				<div class="row">
					<div class="col-md-6">
						เลขที่สัญญา
					</div>
					<div class="col-md-6">
						<?php echo $select->LCONT_ID ?>
					</div>
					<div class="col-md-6">
						ชื่อสัญญา
					</div>
					<div class="col-md-6">
						<?php if ($select->L_TYPE_CODE === "1" && $select->LSUB_CODE === "1") {
							echo ' ฉุกเฉิน';
						} elseif ($select->L_TYPE_CODE === "2" && $select->LSUB_CODE === "1") {
							echo ' สามัญ ';
						} elseif ($select->L_TYPE_CODE === "3" && $select->LSUB_CODE === "1") {
							echo ' พิเศษ';
						} elseif ($select->L_TYPE_CODE === "3" && $select->LSUB_CODE === "2") {
							echo ' โครงการ';
						} elseif ($select->L_TYPE_CODE === "2" && $select->LSUB_CODE === "2") {
							echo ' สามัญฉุกเฉิน';
						} elseif ($select->L_TYPE_CODE === "3" && $select->LSUB_CODE === "3") {
							echo ' โครงการสินทรัพย์';
						} else {
							echo 'เจ้าหน้าที่';
						}
						?>
					</div>
					<div class="col-md-6">
						วันที่ทำสัญญา
					</div>
					<div class="col-md-6">
						<?php echo thaidate('j M Y ', strtotime($select->LCONT_DATE)) ?>
					</div>
					<div class="col-md-6">
						วันที่หมดสัญญา
					</div>
					<div class="col-md-6">
						<?php echo thaidate('j M Y ', strtotime($select->END_PAYDEPT)) ?>
					</div>
					<div class="col-md-6">
						ยอดอนุมัติสินเชื่อ
					</div>
					<div class="col-md-6">
						<?php echo number_format($select->LCONT_APPROVE_SAL, 2) ?>
					</div>
					<div class="col-md-6">
						จำนวนงวดคงเหลือ
					</div>
					<div class="col-md-6">
						<?php echo $select->LCONT_AMOUNT_INST ?>
					</div>
					<div class="col-md-6">
						จำนวนเงินคงเหลือ
					</div>
					<div class="col-md-6">
						<?php echo number_format($select->LCONT_AMOUNT_SAL, 2) ?> บาท
					</div>
				</div>
			</div>
			<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
				<table>
					<thead>
						<tr>
							<td>วันที่</td>
							<td>งวดที่</td>
							<td>ยอดชำระ</td>
							<td>ยอดคงเหลือ</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result->result() as $row) { ?>
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
