<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo site_url('index/index_member') ?>"><img src="<?php echo base_url('picture/lo.png'); ?>" width="300"></a>
		<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			</ul>
			<span class="navbar-text">
				ภาษา <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark">EN</button> | <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark">TH</button>
			</span>
		</div>
	</div>
</nav>
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #25d321;">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
			<ul class="navbar-nav mb-2 mb-lg-0">
				<div class="row">
					<div class="col">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
								เกี่ยวกับเรา
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo site_url('index/history_member') ?>">ประวัติความเป็นมา</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/vision_member') ?>">วิสัยทัศน์ พันธกิจ วัตถุประสงค์</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/board_member') ?>">คณะกรรมการและผู้บริหาร</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/office_member') ?>">สำนักงาน</a></li>
							</ul>
						</li>
					</div>
					<div class="col">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
								บริการของสหกรณ์
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo site_url('index/register_member') ?>">สมัครสมาชิก</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/deposit_member') ?>">บริการเงินฝาก</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/credit_member') ?>">บริการสินเชื่อ</a></li>
							</ul>
						</li>
					</div>
					<div class="col">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
								สวัสดิการของสมาชิก
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo site_url('index/marry_member') ?>">สวัสดิการแต่งงาน</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/maternity_member') ?>">สวัสดิการคลอดบุตร</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/oldage_member') ?>">สวัสดิการเงินสมทบยามชรา</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/medical_member') ?>">สวัสดิการช่วยเหลือค่ารักษาพยาบาล</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/dead_member') ?>">สวัสดิการเสียชีวิต</a></li>
							</ul>
						</li>
					</div>
					<div class="col">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
								ข่าวสาร/อัพเดต
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo site_url('index/promotion_member') ?>">โปรโมชั่น</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/activity_member') ?>">กิจกรรม</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/calendar_member') ?>">ปฏิทินสหกรณ์</a></li>
							</ul>
						</li>
					</div>
					<div class="col">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
								โครงการของสหกรณ์
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo site_url('index/stadium_member') ?>">โครงการสนามหญ้าเทียม SKF Stadium</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/village_member') ?>">โครงการหมู่บ้านษะกอฟะฮ์</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/gasstation_member') ?>">โครงการปั้มน้ำมันเซลล์</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/orphan_member') ?>">โครงการศูนย์อุปถัมภ์เลี้ยงดูเด็กกำพร้า</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/sakofahmarket_member') ?>">โครงการ Sakofah Market</a></li>
							</ul>
						</li>
					</div>
					<div class="col">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
								ดาวน์โหลด
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo site_url('index/document_member') ?>">เอกสารสำหรับสมาชิก</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/report_member') ?>">รายงานกิจการ</a></li>
							</ul>
						</li>
					</div>
					<div class="col">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
								ติดต่อเรา
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="https://docs.google.com/forms/d/1Ze7m2Q6Jr25YafvvBhpU9BiVXpwMNrWwvmWs6yJjTDY/viewform?edit_requested=true">แบบประเมินการให้บริการ</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/withus_member') ?>">ร่วมงานกับเรา</a></li>
							</ul>
						</li>
					</div>
				</div>
			</ul>
		</div>
		<ul class="nav justify-content-end">
			<span class="navbar-text">
				<div class="dropdown">
					<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;<?php echo $FNAME ?> <?php echo $LNAME ?>&nbsp;&nbsp;&nbsp;
					</a>
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('member/data_member') ?>"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;ดูข้อมูลของผู้ใช้</a></li>
						<li><a class="dropdown-item" href="#"><i class="fas fa-key"></i>&nbsp;&nbsp;&nbsp; เปลี่ยนรหัสผ่าน</a></li>
						<div class="dropdown-divider"></div>
						<li><a class="dropdown-item" href="<?php echo site_url('member/logout_member') ?>"><i class="fas fa-door-open"></i>&nbsp;&nbsp;&nbsp;ออกจากระบบ</a></li>
					</ul>
				</div>
			</span>
		</ul>

	</div>
	<!-- Container wrapper -->
</nav>
