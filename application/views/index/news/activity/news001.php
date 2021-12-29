<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ข่าวสารกิจกรรม สหกรณ์อิสลามษะกอฟะฮ จำกัด</title>
	<link rel="icon" href="<?php echo base_url('picture/sakofag-logo.png') ?>" type="image/gif" sizes="18x18">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
	<link rel="stylesheet" type="text/css" href=<?php echo base_url('mdb5pro/css/mdb.min.css'); ?> />
	<?php header("Cache-Control: public, max-age=60, s-maxage=60"); ?>
</head>
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
				<li class="nav-item dropdown mx-2">
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
				<li class="nav-item dropdown mx-2">
					<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						บริการของสหกรณ์
					</a>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/register') ?>">สมัครสมาชิก</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/deposit') ?>">บริการเงินฝาก</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/credit') ?>">บริการสินเชื่อ</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
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
				<li class="nav-item dropdown mx-2">
					<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						ข่าวสาร/อัพเดต
					</a>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/promotion') ?>">โปรโมชั่น</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/activity') ?>">กิจกรรม</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/calendar') ?>">ปฏิทินสหกรณ์</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
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
				<li class="nav-item dropdown mx-2">
					<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						ดาวน์โหลด
					</a>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/document') ?>">เอกสารสำหรับสมาชิก</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/report') ?>">รายงานกิจการ</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						ติดต่อเรา
					</a>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="https://docs.google.com/forms/d/1Ze7m2Q6Jr25YafvvBhpU9BiVXpwMNrWwvmWs6yJjTDY/viewform?edit_requested=true">แบบประเมินการให้บริการ</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/withus') ?>">ร่วมงานกับเรา</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="justify-content-end">
			<div class="d-inline-flex p-2 "><a href="<?php echo site_url('member/login_page') ?>" class="btn btn-outline text-light"> <i class="fas fa-user"></i>&nbsp;&nbsp;ลงทะเบียน&nbsp;|&nbsp;เข้าสู่ระบบ</a></div>
		</div>
	</div>
</nav>

<div class="container my-2">
	<div class="card border border-success">
		<div class="card-body">
			<div class="lightbox">
				<div class="row">
					<div class="col-lg-4 mb-2">
						<img src="<?php echo base_url('picture_activity\001\S__999477.jpg') ?>" data-mdb-img="<?php echo base_url('picture_activity\001\S__999477.jpg') ?>" class="w-100" />
					</div>
					<div class="col-lg-4 mb-2">
						<img src="<?php echo base_url('picture_activity\001\S__29073565.jpg') ?>" data-mdb-img="<?php echo base_url('picture_activity\001\S__29073565.jpg') ?>" class="w-100" />
					</div>
					<div class="col-lg-4 mb-2">
						<img src="<?php echo base_url('picture_activity\001\S__29073567.jpg') ?>" data-mdb-img="<?php echo base_url('picture_activity\001\S__29073567.jpg') ?>" class="w-100" />
					</div>
					<div class="col-lg-4 mb-2">
						<img src="<?php echo base_url('picture_activity\001\S__29073568.jpg') ?>" data-mdb-img="<?php echo base_url('picture_activity\001\S__29073568.jpg') ?>" class="w-100" />
					</div>
					<div class="col-lg-4 mb-2">
						<img src="<?php echo base_url('picture_activity\001\S__29073569.jpg') ?>" data-mdb-img="<?php echo base_url('picture_activity\001\S__29073569.jpg') ?>" class="w-100" />
					</div>
					<div class="col-lg-4 mb-2">
						<img src="<?php echo base_url('picture_activity\001\S__29073570.jpg') ?>" data-mdb-img="<?php echo base_url('picture_activity\001\S__29073570.jpg') ?>" class="w-100" />
					</div>
				</div>
			</div>
			<p class="text-dark mt-2">
				วันศุกร์ ที่ 24 ธันวาคม 2564 นายอภินันท์ แสล่หมัน ผู้จัดการใหญ่สหกรณ์อิสลามษะกอฟะฮ จำกัด พร้อมรองผู้จัดการใหญ่ฝ่ายบัญชี ไปร่วมแสดงความยินดีกับ นายสุทยุต พูนสมบัติ ที่ได้รับตำแหน่งใหม่ เป็น สกจ.พังงา และเรียนเชิญ นางสาวสาวดี รักษ์ศิริ สหกรณ์จังหวัดกระบี่ เป็นประธานในพิธีการประชุมวิสามัญ และไปพบปะเยี่ยมเยียนพร้อมมอบของขวัญและเรียนเชิญท่าน ผอ.จาตุรนต์ หลงขาว ผู้อำนวยการกลุ่มส่งเสริมสหกรณ์ 2
				นางสาว สุมา หลีกภัย ผู้อำนวยการกลุ่มส่งเสริมสหกรณ์ 3 เข้าร่วมประชุมใหญ่วิสามัญ ในวันที่ 28 ธันวาคม 2564
			</p>
		</div>
	</div>
</div>
<footer class="text-lg-start py-3" style="background-color: #25d321;">
	<div class="container">
		<div class="row">
			<div class="col-md-6 d-flex justify-content-start">
				<div class="footer-copyright text-center">© 2019 Copyright:
					<a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
				</div>
			</div>
			<div class="col-md-6 d-flex justify-content-end">
				<div class="col-md-6 d-flex justify-content-end">
					<button class="btn btn-outline text-light" data-mdb-toggle="modal" data-mdb-target="#exampleModal"><i class="fas fa-building me-3"></i>เข้าสู่ระบบเจ้าหน้าที่</button>
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog mx-0 mx-sm-auto">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #25d321;">
				<h5 class="modal-title text-light" id="exampleModalLabel">เข้าสู่ระบบเจ้าหน้าที่</h5>
				<button type="button" class="close" data-mdb-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body p-4">
				<form action="<?php echo site_url('officer/login_officer') ?>" method="post">
					<div class="form-outline mb-4">
						<input type="text" id="form2Example1" name="user_id" class="form-control" />
						<label class="form-label" for="form2Example1">Email address</label>
					</div>
					<div class="form-outline mb-4">
						<input type="password" id="form2Example2" name="password" class="form-control" />
						<label class="form-label" for="form2Example2">Password</label>
					</div>
					<div class="row mb-4">
						<div class="col d-flex justify-content-center">
							<div class="form-check">
								<input class="form-check-input bg-success" type="checkbox" value="" id="form2Example3" checked />
								<label class="form-check-label" for="form2Example3">
									จดจำฉัน
								</label>
							</div>
						</div>
						<div class="col">
							<a href="#!">ลืมรหัสผ่าน</a>
						</div>
					</div>
					<button type="submit" class="btn btn-success btn-block mb-4">
						เข้าสู่ระบบ
					</button>
					<div class="text-center">
						<p>ลืมสมัคร ? <a href="#!">สมัครสมาชิกเจ้าหน้าที่</a></p>

					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src=<?php echo base_url('mdb5pro/js/mdb.min.js') ?>></script>
