<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="accordion my-3" id="accordionPanelsStayOpenExample">
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingOne">
				<button class="accordion-button" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
					<b class="text-dark">ข้อมูลส่วนตัว</b>
				</button>
			</h2>
			<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
				<div class="accordion-body">
					<div class="row">
						<div class="col-md-6 my-2">
							ชื่อ : <?php echo $data_member->FNAME ?>
						</div>
						<div class="col-md-6 my-2">
							นามสกุล : <?php echo $data_member->LNAME ?>
						</div>
						<div class="col-md-6 my-2">
							เลขบัตรประจำตัวประชาชน : <?php echo $data_member->ID_CARD ?>
						</div>
						<div class="col-md-6 my-2">
							วันเกิด : <?php echo thaidate('j F Y ', strtotime($data_member->DMY_BIRTH))  ?>
						</div>
						<div class="col-md-6 my-2">
							เพศ : <?php if ($data_member->SEX === "1") {
										echo "ชาย";
									} else {
										echo "หญิง";
									} ?>
						</div>
						<div class="col-md-6 my-2">
							ชื่อบิดา : <?php echo $data_member->FATHER ?>
						</div>
						<div class="col-md-6 my-2">
							ชื่อมารดา : <?php echo $data_member->MOTHER ?>
						</div>
						<div class="col-md-6 my-2">
							สถานะ : <?php echo $data_member->MARRIAGE_STATUS ?>
						</div>
						<div class="col-md-6 my-2">
							กรุ๊ปเลือด : <?php echo $data_member->BLO_GROUP ?>
						</div>
						<div class="col-md-6 my-2">
							เลขที่บ้าน : <?php echo $data_member->ADDRESS ?>
						</div>
						<div class="col-md-6 my-2">
							หมู่ที่ : <?php echo $data_member->MOO_ADDR ?>
						</div>
						<div class="col-md-6 my-2">
							ตำบล : <?php echo $data_member->TUMBOL ?>
						</div>
						<div class="col-md-6 my-2">
							LINE ID : <?php echo $data_member->LINE_ID ?>
						</div>
						<div class="col-md-6 my-2">
							EMAIL : <?php echo $data_member->EMAIL ?>
						</div>
						<div class="col-md-6 my-2">
							โทรศัพท์ : <?php echo $data_member->MOBILE_TEL ?>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingTwo">
					<button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
						<b class="text-dark">เงินฝากในบัญชี</b>
					</button>
				</h2>
				<div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
					<div class="accordion-body">
						<table class="table">
							<thead>
								<tr>
									<th>เลขบัญชี</th>
									<th>ชื่อบัญชี</th>
									<th>ยอดคงเหลือ</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($deposit_member->result() as $row) { ?>
									<tr>
										<td><?= BankAccount($row->ACCOUNT_NO) ?></td>
										<td><?= $row->ACCOUNT_NAME ?></td>
										<td><?= number_format($row->BALANCE, 2) ?></td>
										<td><a href="<?php echo site_url('officer/account_details/' . $row->ACCOUNT_NO) ?>" class="btn btn-info"><i class="fas fa-file-alt"></i></a></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingThree">
					<button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
						<b class="text-dark">สินเชื่อ</b>
					</button>
				</h2>
				<div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
					<div class="accordion-body">
						<div class="datatable" data-mdb-hover="true" data-mdb-bordered="true" data-mdb-full-pagination="true">
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
										<th>รายละเอียด</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($opened_credit_member->result() as $row) { ?>
										<tr>
											<td><?= $row->LCONT_ID ?></td>
											<td>
												<?php if ($row->L_TYPE_CODE === "1" && $row->LSUB_CODE === "1") {
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
											<td><a href="<?php echo site_url('officer/opened_loan_details/' . $row->CODE . '/' . $row->BR_NO) ?>" class="btn btn-success"><i class="far fa-file-alt"></i></a></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingFive">
					<button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
						<b class="text-dark">สินเชื่อที่ปิดแล้ว</b>
					</button>
				</h2>
				<div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
					<div class="accordion-body">
						<div class="datatable" data-mdb-hover="true" data-mdb-bordered="true" data-mdb-full-pagination="true">
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
										<th>รายละเอียด</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($closed_credit_member->result() as $row) { ?>
										<tr>
											<td><?= $row->LCONT_ID ?></td>
											<td>
												<?php if ($row->L_TYPE_CODE === "1" && $row->LSUB_CODE === "1") {
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
											<td><a href="<?php echo site_url('officer/closed_loan_details/' . $row->CODE . '/' . $row->BR_NO) ?>" class="btn btn-success"><i class="far fa-file-alt"></i></a></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingThree">
					<button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
						<b class="text-dark">หุ้น</b>
					</button>
				</h2>
				<div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
					<div class="accordion-body">
						<table class="table table-bordered">
							<tr align="center">
								<td>เลขที่สมาชิก</td>
								<td>สาขาที่สังกัด</td>
								<td>เงินคงเหลือ</td>
								<td>คะแนนสะสมคงเหลือ</td>
							</tr>

							<tr align="center">
								<td><?= $stock_select->MEM_ID ?></td>
								<td><?= $stock_select->BR_NAME ?></td>
								<td><?= number_format($stock_select->SHR_SUM_BTH, 2) ?></td>
								<td><?= number_format($stock_select->POINT_SHR, 2)  ?></td>
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
									<?php foreach ($stock_details->result() as $row) { ?>
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
		</div>

	</div>
