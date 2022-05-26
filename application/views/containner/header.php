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
		background: linear-gradient(to left, #ffffff, #25d321);
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
				ภาษา<button type="button" class="btn btn-outline-success ms-3" data-mdb-ripple-color="dark">EN</button> | <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark">TH</button>
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
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">หน้าหลัก |</p>
					</a>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">เกี่ยวกับเรา |</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/history') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">ประวัติความเป็นมา</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/vision') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">วิสัยทัศน์ พันธกิจ วัตถุประสงค์</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/board') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">คณะกรรมการและผู้บริหาร</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/office') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">สำนักงาน</p>
							</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">บริการของสหกรณ์ |</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/register') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">สมัครสมาชิก</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/deposit') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">บริการเงินฝาก</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/credit') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">บริการสินเชื่อ</p>
							</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">สวัสดิการของสมาชิก |</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/marry') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">สวัสดิการแต่งงาน</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/maternity') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">สวัสดิการคลอดบุตร</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/oldage') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">สวัสดิการเงินสมทบยามชรา</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/medical') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">สวัสดิการช่วยเหลือค่ารักษาพยาบาล</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/dead') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">สวัสดิการเสียชีวิต</p>
							</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">ข่าวสาร/อัพเดต |</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<!-- <li><a class="dropdown-item" href="<?php echo site_url('index/promotion') ?>">โปรโมชั่น</a></li> -->
						<li><a class="dropdown-item" href="<?php echo site_url('index/activity') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">ข่าวสาร/กิจกรรมความเคลื่อนไหว</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/calendar') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">ปฏิทินสหกรณ์</p>
							</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">โครงการของสหกรณ์ |</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/stadium') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">โครงการสนามหญ้าเทียม SKF Stadium</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/village') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">โครงการหมู่บ้านษะกอฟะฮ์</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/gasstation') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">โครงการปั้มน้ำมันเซลล์</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/orphan') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">โครงการศูนย์อุปถัมภ์เลี้ยงดูเด็กกำพร้า</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/sakofahmarket') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">โครงการ Sakofah Market</p>
							</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">บริหารสินทรัพย์ |</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/real_estate_sale') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">ขายอสังหาริมทรัพย์</p>
							</a></li>
						<!-- <li><a class="dropdown-item" href="#">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"></p>
							</a></li>
						<li><a class="dropdown-item" href="#">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"></p>
							</a></li> -->
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">ดาวน์โหลด |</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/document') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">เอกสารสำหรับสมาชิก</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/report') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">รายงานกิจการ</p>
							</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">ติดต่อเรา</p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSeKfqui-MFOwjuBGgl98Aa26sK2QUCX3mtcblNDuwPPU-l2ow/viewform?usp=sf_link">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">แบบประเมินการให้บริการ</p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/withus') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">ร่วมงานกับเรา</p>
							</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>