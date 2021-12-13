<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo site_url('index') ?>"><img src="<?php echo base_url('picture/lo.png'); ?>" width="300"></a>
		<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars text-dark"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			</ul>
			<span class="navbar-text">
				ภาษา&nbsp;&nbsp; <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark">EN</button> | <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark">TH</button>
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
			<ul class="navbar-nav">
				<div class="row">
					<div class="col">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
								เกี่ยวกับเรา
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo site_url('index/history') ?>">ประวัติความเป็นมา</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/vision') ?>">วิสัยทัศน์ พันธกิจ วัตถุประสงค์</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/board') ?>">คณะกรรมการและผู้บริหาร</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/office') ?>">สำนักงาน</a></li>
							</ul>
						</li>
					</div>
					<div class="col">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
								บริการของสหกรณ์
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo site_url('index/register') ?>">สมัครสมาชิก</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/deposit') ?>">บริการเงินฝาก</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/credit') ?>">บริการสินเชื่อ</a></li>
							</ul>
						</li>
					</div>
					<div class="col">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
								สวัสดิการของสมาชิก
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo site_url('index/marry') ?>">สวัสดิการแต่งงาน</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/maternity') ?>">สวัสดิการคลอดบุตร</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/oldage') ?>">สวัสดิการเงินสมทบยามชรา</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/medical') ?>">สวัสดิการช่วยเหลือค่ารักษาพยาบาล</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/dead') ?>">สวัสดิการเสียชีวิต</a></li>
							</ul>
						</li>
					</div>
					<div class="col">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
								ข่าวสาร/อัพเดต
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo site_url('index/promotion') ?>">โปรโมชั่น</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/activity') ?>">กิจกรรม</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/calendar') ?>">ปฏิทินสหกรณ์</a></li>
							</ul>
						</li>
					</div>
					<div class="col">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
								โครงการของสหกรณ์
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo site_url('index/stadium') ?>">โครงการสนามหญ้าเทียม SKF Stadium</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/village') ?>">โครงการหมู่บ้านษะกอฟะฮ์</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/gasstation') ?>">โครงการปั้มน้ำมันเซลล์</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/orphan') ?>">โครงการศูนย์อุปถัมภ์เลี้ยงดูเด็กกำพร้า</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/sakofahmarket') ?>">โครงการ Sakofah Market</a></li>
							</ul>
						</li>
					</div>
					<div class="col">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
								ดาวน์โหลด
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo site_url('index/document') ?>">เอกสารสำหรับสมาชิก</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('index/report') ?>">รายงานกิจการ</a></li>
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
								<li><a class="dropdown-item" href="<?php echo site_url('index/withus') ?>">ร่วมงานกับเรา</a></li>
							</ul>
						</li>
					</div>
				</div>
			</ul>
		</div>
		<div class="justify-content-end">
			<div class="d-inline-flex p-2 "><a href="<?php echo site_url('member/login_page') ?>" class="btn btn-outline text-light"> <i class="fas fa-user"></i>&nbsp;&nbsp;ลงทะเบียน&nbsp;|&nbsp;เข้าสู่ระบบ</a></div>
		</div>
	</div>
</nav>
