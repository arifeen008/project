<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>

<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h1 class="card-title border-bottom">สินเชื่อ คุณ <?php echo $name->FNAME ?> <?php echo $name->LNAME ?></h1>
			<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
				<table>
					<thead>
						<tr>
							<th>เลขที่สัญญา</ะ>
							<th>ชื่อสัญญา</th>
							<th>วันที่ทำสัญญา</td>
							<th>วันที่หมดสัญญา</th>
							<th>ยอดอนุมัติสินเชื่อ</th>
							<th>จำนวนงวดคงเหลือ</th>
							<th>ยอดคงเหลือ</th>
							<th></th>
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
								<td><?= thaidate('j M Y ', strtotime($row->END_PAYDEPT)) ?></td>
								<td><?= number_format($row->LCONT_APPROVE_SAL, 2); ?> </td>
								<td><?= $row->LCONT_AMOUNT_INST ?></td>
								<td><?= number_format($row->LCONT_AMOUNT_SAL, 2);  ?></td>
								<td><a href="<?php echo site_url('officer/credit_officer_detail/' . $row->CODE . '/' . $row->BR_NO)  ?>" class="btn btn-success"><i class="far fa-file-alt"></i></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
