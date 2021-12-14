<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h5 class="card-title border-bottom">ข้อมูลส่วนตัว</h5>
			<p class="card-text">
			<div class="row">
				<div class="col-md-6 my-2">
					ชื่อ : <?php echo $FNAME ?>
				</div>
				<div class="col-md-6 my-2">
					นามสกุล : <?php echo $LNAME ?>
				</div>
				<div class="col-md-6 my-2">
					เลขบัตรประจำตัวประชาชน : <?php echo $ID_CARD ?>
				</div>
				<div class="col-md-6 my-2">
					วันเกิด : <?php echo thaidate('j F Y ', strtotime($DMY_BIRTH))  ?>
				</div>
				<div class="col-md-6 my-2">
					เพศ : <?php if ($SEX === "1") {
								echo "ชาย";
							} else {
								echo "หญิง";
							} ?>
				</div>
				<div class="col-md-6 my-2">
					ชื่อบิดา : <?php if ($FATHER == null) {
									echo "ไม่มีข้อมูล";
								} ?>
				</div>
				<div class="col-md-6 my-2">
					ชื่อมารดา : <?php if ($MOTHER == null) {
									echo "ไม่มีข้อมูล";
								} ?>
				</div>
				<div class="col-md-6 my-2">
					สถานะ : <?php if ($MARRIAGE_STATUS == null) {
								echo "โสด";
							} else {
								echo $MARRIAGE_STATUS;
							}
							?>
				</div>
				<div class="col-md-6 my-2">
					กรุ๊ปเลือด : <?php if ($BLO_GROUP == null) {
										echo "ไม่มีข้อมูล";
									} else {
										echo $BLO_GROUP;
									} ?>
				</div>
				<div class="col-md-6 my-2">
					เลขที่บ้าน : <?php echo $ADDRESS ?>
				</div>
				<div class="col-md-6 my-2">
					หมู่ที่ : <?php echo $MOO_ADDR ?>
				</div>
				<div class="col-md-6 my-2">
					ตำบล : <?php echo $TUMBOL ?>
				</div>
				<div class="col-md-6 my-2">
					LINE ID : <?php if ($LINE_ID == null) {
									echo "ไม่มีข้อมูล";
								} else {
									echo $LINE_ID;
								} ?>
				</div>
				<div class="col-md-6 my-2">
					EMAIL : <?php if ($EMAIL == null) {
								echo "ไม่มีข้อมูล";
							} else {
								echo $EMAIL;
							} ?>
				</div>
				<div class="col-md-6 my-2">
					โทรศัพท์ : <?php if ($MOBILE_TEL == null) {
									echo "ไม่มีข้อมูล";
								} else {
									echo $MOBILE_TEL;
								}
								?>
				</div>
			</div>

			</p>
		</div>
	</div>
</div>





