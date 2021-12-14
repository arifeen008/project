<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="card mt-3">
		<div class="card-body text-dark">
			<h3 class="card-title border-bottom">สัญญาสินเชื่อที่ปิดไปแล้ว</h3>
			<table class="table table-hover text-center my-4" id="myTable">
				<thead>
					<tr>
						<td>เลขที่สัญญา</td>
						<td>ชื่อสัญญา</td>
						<td>วันที่ทำสัญญา</td>
						<td>วันที่หมดสัญญา</td>
						<td>ยอดอนุมัติสินเชื่อ</td>
						<td>จำนวนงวดคงเหลือ</td>
						<td>ยอดคงเหลือ</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($result->result() as $row) { ?>
						<tr>
							<td><?= $row->LCONT_ID ?></td>
							<td><?php if ($row->L_TYPE_CODE === "1" && $row->LSUB_CODE === "1") {
									echo 'ฉุกเฉิน';
								} elseif ($row->L_TYPE_CODE === "2" && $row->LSUB_CODE === "1") {
									echo 'สามัญ ';
								} elseif ($row->L_TYPE_CODE === "3" && $row->LSUB_CODE === "1") {
									echo 'พิเศษ';
								} elseif ($row->L_TYPE_CODE === "3" && $row->LSUB_CODE === "2") {
									echo 'โครงการ';
								} elseif ($row->L_TYPE_CODE === "2" && $row->LSUB_CODE === "2") {
									echo 'สามัญฉุกเฉิน';
								} elseif ($row->L_TYPE_CODE === "3" && $row->LSUB_CODE === "3") {
									echo 'โครงการสินทรัพย์';
								} else {
									echo 'เจ้าหน้าที่';
								}
								?>
							</td>
							<td><?= thaidate('j M Y ', strtotime($row->LCONT_DATE))  ?></td>
							<td><?= number_format($row->LCONT_APPROVE_SAL, 2); ?> </td>
							<td><?= number_format($row->LCONT_AMOUNT_SAL, 2);  ?></td>
							<td><a href="<?php echo site_url('member/credit_member_close_detail/' . $row->CODE . '')  ?>" class="btn btn-success">ดูข้อมูล</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
