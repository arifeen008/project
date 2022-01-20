<style>
	.gradient-custom {
		/* fallback for old browsers */
		background: #ffffff;

		/* Chrome 10-25, Safari 5.1-6 */
		background: -webkit-linear-gradient(to top, #ffffff, #25d321);

		/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		background: linear-gradient(to top, #ffffff, #25d321)
	}

	.dropdown:hover>.dropdown-menu {
		display: block;
	}

	.dropdown-menu {
		display: none;
		position: absolute;
		right: 0;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
		z-index: 1;
	}

	.dropdown>.dropdown-toggle:active {
		/*Without this, clicking will make it sticky*/
		pointer-events: none;
	}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo site_url('index') ?>"><img src="<?php echo base_url('picture/logo-web1.jpg'); ?>"></a>
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
<nav class="navbar navbar-expand-lg gradient-custom sticky-top">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarCenteredExample">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('index') ?>">
						<p style="font-family: 'Chonburi', cursive;color:black;">หน้าหลัก |</p>
					</a>
				</li>

				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Chonburi', cursive;color:black;">เกี่ยวกับเรา |</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/history') ?>">ประวัติความเป็นมา</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/vision') ?>">วิสัยทัศน์ พันธกิจ วัตถุประสงค์</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/board') ?>">คณะกรรมการและผู้บริหาร</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/office') ?>">สำนักงาน</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Chonburi', cursive;color:black;">บริการของสหกรณ์ |</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/register') ?>">สมัครสมาชิก</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/deposit') ?>">บริการเงินฝาก</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/credit') ?>">บริการสินเชื่อ</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Chonburi', cursive;color:black;">สวัสดิการของสมาชิก |</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/marry') ?>">สวัสดิการแต่งงาน</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/maternity') ?>">สวัสดิการคลอดบุตร</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/oldage') ?>">สวัสดิการเงินสมทบยามชรา</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/medical') ?>">สวัสดิการช่วยเหลือค่ารักษาพยาบาล</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/dead') ?>">สวัสดิการเสียชีวิต</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Chonburi', cursive;color:black;">ข่าวสาร/อัพเดต |</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<!-- <li><a class="dropdown-item" href="<?php echo site_url('index/promotion') ?>">โปรโมชั่น</a></li> -->
						<li><a class="dropdown-item" href="<?php echo site_url('index/activity') ?>">ข่าวสาร/กิจกรรมความเคลื่อนไหว</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/calendar') ?>">ปฏิทินสหกรณ์</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Chonburi', cursive;color:black;">โครงการของสหกรณ์ |</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/stadium') ?>">โครงการสนามหญ้าเทียม SKF Stadium</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/village') ?>">โครงการหมู่บ้านษะกอฟะฮ์</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/gasstation') ?>">โครงการปั้มน้ำมันเซลล์</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/orphan') ?>">โครงการศูนย์อุปถัมภ์เลี้ยงดูเด็กกำพร้า</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/sakofahmarket') ?>">โครงการ Sakofah Market</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Chonburi', cursive;color:black;">ดาวน์โหลด |</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/document') ?>">เอกสารสำหรับสมาชิก</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/report') ?>">รายงานกิจการ</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Chonburi', cursive;color:black;">ติดต่อเรา</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="https://docs.google.com/forms/d/1Ze7m2Q6Jr25YafvvBhpU9BiVXpwMNrWwvmWs6yJjTDY/viewform?edit_requested=true">แบบประเมินการให้บริการ</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/withus') ?>">ร่วมงานกับเรา</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
