<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h1 class="card-title border-bottom">ข้อมูลส่วนตัว</h1>
			<p class="card-text">
			<div class="row">
				<div class="col-md-6 my-2">
					ชื่อ : <?php echo $result->FNAME ?>
				</div>
				<div class="col-md-6 my-2">
					นามสกุล : <?php echo $result->LNAME ?>
				</div>
				<div class="col-md-6 my-2">
					เลขบัตรประจำตัวประชาชน : <?php echo $result->ID_CARD ?>
				</div>
				<div class="col-md-6 my-2">
					วันเกิด : <?php echo thaidate('j F Y ', strtotime($result->DMY_BIRTH))  ?>
				</div>
				<div class="col-md-6 my-2">
					เพศ : <?php if ($result->SEX === "1") {
								echo "ชาย";
							} else {
								echo "หญิง";
							} ?>
				</div>
				<div class="col-md-6 my-2">
					ชื่อบิดา : <?php if ($result->FATHER == null) {
									echo "ไม่มีข้อมูล";
								} ?>
				</div>
				<div class="col-md-6 my-2">
					ชื่อมารดา : <?php if ($result->MOTHER == null) {
									echo "ไม่มีข้อมูล";
								} ?>
				</div>
				<div class="col-md-6 my-2">
					สถานะ : <?php if ($result->MARRIAGE_STATUS == null) {
								echo "โสด";
							} else {
								echo $result->MARRIAGE_STATUS;
							}
							?>
				</div>
				<div class="col-md-6 my-2">
					กรุ๊ปเลือด : <?php if ($result->BLO_GROUP == null) {
										echo "ไม่มีข้อมูล";
									} else {
										echo $result->BLO_GROUP;
									} ?>
				</div>
				<div class="col-md-6 my-2">
					เลขที่บ้าน : <?php echo $result->ADDRESS ?>
				</div>
				<div class="col-md-6 my-2">
					หมู่ที่ : <?php echo $result->MOO_ADDR ?>
				</div>
				<div class="col-md-6 my-2">
					ตำบล : <?php echo $result->TUMBOL ?>
				</div>
				<div class="col-md-6 my-2">
					LINE ID : <?php if ($result->LINE_ID == null) {
									echo "ไม่มีข้อมูล";
								} else {
									echo $result->LINE_ID;
								} ?>
				</div>
				<div class="col-md-6 my-2">
					EMAIL : <?php if ($result->EMAIL == null) {
								echo "ไม่มีข้อมูล";
							} else {
								echo $result->EMAIL;
							} ?>
				</div>
				<div class="col-md-6 my-2">
					โทรศัพท์ : <?php if ($result->MOBILE_TEL == null) {
									echo "ไม่มีข้อมูล";
								} else {
									echo $result->MOBILE_TEL;
								}
								?>
				</div>
			</div>
			</p>
		</div>
	</div>
</div>
