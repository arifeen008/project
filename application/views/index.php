<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>

<div class="containner-fluid">
	<div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo base_url('picture/305-1.jpg') ?>" class="d-block w-100" />
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url('picture/267-1.jpg') ?>" class="d-block w-100" />
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url('picture/309-1.jpg') ?>" class="d-block w-100" />
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>

<header>
	<div class="p-5 text-center bg-image" style="background-image: url('https://mdbootstrap.com/img/new/slides/041.jpg');height: 400px;">
		<div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
			<div class="d-flex justify-content-center align-items-center h-100">
				<div class="text-white">
					<h1 class="mb-3">สหกรณ์อิสลามษะกอฟะฮ จำกัด</h1>
					<h4 class="mb-3">ระดมทุน หนุนธุรกิจ นำชีวิต พ้นดอกเบี้ย</h4>
				</div>
			</div>
		</div>
	</div>
</header>

<footer class="text-center text-white" style="background-color: #caced1;">
	<div class="container p-4">
		<section class="">
			<div class="row">
				<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
					<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
						<img src="https://mdbootstrap.com/img/new/fluid/city/113.jpg" class="w-100" />
						<a href="#!">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
					<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
						<img src="https://mdbootstrap.com/img/new/fluid/city/111.jpg" class="w-100" />
						<a href="#!">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
					<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
						<img src="https://mdbootstrap.com/img/new/fluid/city/112.jpg" class="w-100" />
						<a href="#!">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
					<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
						<img src="https://mdbootstrap.com/img/new/fluid/city/114.jpg" class="w-100" />
						<a href="#!">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
					<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
						<img src="https://mdbootstrap.com/img/new/fluid/city/115.jpg" class="w-100" />
						<a href="#!">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
					<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
						<img src="https://mdbootstrap.com/img/new/fluid/city/116.jpg" class="w-100" />
						<a href="#!">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>
</footer>

<div class="container my-3">
	<div class="row">
		<div class="col">
			<div class="row">
				<div class="col-md-6 mb-3">
					<div class="card border border-success">
						<a href="<?php echo site_url('index/register') ?>" class="card-body " data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="tada">
							<p class="card-text text-center text-dark">
								<i class="far fa-registered fa-4x"></i>
								<p style="font-family: 'Chonburi', cursive;color:black;" class="text-center h3">สมัครสมาชิก</p>
							</p>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<div class="card border border-success">
						<a href="<?php echo site_url('index/deposit') ?>" class="card-body" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="tada">
							<p class="card-text text-center text-dark">
								<i class="fas fa-hand-holding-usd fa-4x"></i>
								<p style="font-family: 'Chonburi', cursive;color:black;" class="text-center h3">บริการเงินฝาก</p>
							</p>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<div class="card border border-success">
						<a href="<?php echo site_url('index/credit') ?>" class="card-body" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="tada">
							<p class="card-text text-center text-dark">
								<i class="far fa-credit-card fa-4x"></i>
								<p style="font-family: 'Chonburi', cursive;color:black;" class="text-center h3">บริการสินเชื่อ</p>
							</p>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<div class="card border border-success">
						<a href="<?php echo site_url('index/document') ?>" class="card-body" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="tada">
							<p class="card-text text-center text-dark">
								<i class="fas fa-file-alt fa-4x"></i>
								<p style="font-family: 'Chonburi', cursive;color:black;" class="text-center h3">เอกสาร</p>
							</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="row">
				<div class="col-md-12">
					<div class="card text-dark">
						<img src="<?php echo base_url('picture/covid.jpg') ?>" class="card-img" />
						<div class="card-img-overlay">
							<p style="font-family: 'Chonburi', cursive;color:white;" class="card-title mb-4 h4">รายงานสถานการณ์ COVID-19 ประจำวัน</p>
							<div class="d-flex justify-content-between align-items-center">
								<p style="font-family: 'Chonburi', cursive;color:white;" class="card-text"><i class="fas fa-calendar me-3"></i>วันแถลง</p>
								<p style="font-family: 'Chonburi', cursive;color:white;" class="card-text"><?php echo thaidate('j F พ.ศ. Y ', strtotime($covid_data[0]['txn_date'])) ?></p>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<p style="font-family: 'Chonburi', cursive;color:white;" class="card-text"><i class="fas fa-clinic-medical me-2"></i>จำนวนผู้ป่วยรายใหม่</p>
								<p style="font-family: 'Chonburi', cursive;color:white;" class="card-text"><?php echo number_format($covid_data[0]['new_case']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<p style="font-family: 'Chonburi', cursive;color:white;" class="card-text"><i class="far fa-hospital me-3"></i>จำนวนผู้ป่วยสะสม</p>
								<p style="font-family: 'Chonburi', cursive;color:white;" class="card-text"><?php echo number_format($covid_data[0]['total_case']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<p style="font-family: 'Chonburi', cursive;color:white;" class="card-text"><i class="fas fa-skull-crossbones me-3"></i>จำนวนผู้ป่วยเสียชีวิตรายใหม่</p>
								<p style="font-family: 'Chonburi', cursive;color:white;" class="card-text"><?php echo number_format($covid_data[0]['new_death']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<p style="font-family: 'Chonburi', cursive;color:white;" class="card-text"><i class="fas fa-book-dead me-3"></i>จำนวนผู้ป่วยเสียชีวิตสะสม</p>
								<p style="font-family: 'Chonburi', cursive;color:white;" class="card-text"><?php echo number_format($covid_data[0]['total_death']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<p style="font-family: 'Chonburi', cursive;color:white;" class="card-text"><i class="fas fa-medkit me-3"></i>จำนวนผู้ป่วยรักษาหายรายใหม่</p>
								<p style="font-family: 'Chonburi', cursive;color:white;" class="card-text"><?php echo number_format($covid_data[0]['new_recovered']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<p style="font-family: 'Chonburi', cursive;color:white;" class="card-text"><i class="fas fa-pills me-3"></i>จำนวนผู้ป่วยรักษาหายสะสม</p>
								<p style="font-family: 'Chonburi', cursive;color:white;" class="card-text"><?php echo number_format($covid_data[0]['total_recovered']) . ' ราย' ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container my-3">
	<div class="card border border-success">
		<div class="card-body">
			<p style="font-family: 'Chonburi', cursive;color:black;" class="text-center h1">
				ข่าวประชาสัมพันธ์
			</p>
			<div class="row">
				<?php foreach ($result->result() as $row) { ?>
					<div class="col-md-4">
						<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>" class="card">
							<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" width="100" class="card-img-top" />
							<div class="card-body">
								<h5 class="card-title text-dark text-truncate"><?= $row->title ?></h5>
								<p class="card-text text-dark text-truncate">
									<?= $row->description ?>
								</p>
								<p class="card-text">
									<small class="text-muted"><?= thaidate('j M Y ', strtotime($row->dateupload)) ?></small>
								</p>
							</div>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<div class="container my-3">
	<div class="card border border-success">
		<div class="card-body">
			<p style="font-family: 'Chonburi', cursive;color:black;" class="text-center h1 my-3">สถานะการเงิน</p>
			<p style="font-family: 'Chonburi', cursive;" class="text-center h5 text-mute my-3">ข้อมูล ณ มกราคม 2565 </p>
			<div class="row text-center">
				<div class="col-md-4">
					<b style="font-family: 'Chonburi', cursive;" class="text-success h1">1,081.59</b>
					<p style="font-family: 'Chonburi', cursive;color:black;">ทุนเรือนหุ้น (ล้านบาท)</p>
				</div>
				<div class="col-md-4">
					<b style="font-family: 'Chonburi', cursive;" class="text-success h1">1,156.98</b>
					<p style="font-family: 'Chonburi', cursive;color:black;">เงินฝาก (ล้านบาท)</p>
				</div>
				<div class="col-md-4">
					<b style="font-family: 'Chonburi', cursive;" class="text-success h1">32,801</b>
					<p style="font-family: 'Chonburi', cursive;color:black;">จำนวนสมาชิก (คน)</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row my-3">
	<div class="col-lg">
		<a href="https://www.facebook.com/Sakofah.Wittayaphat.School/?ref=bookmarks">
			<img class="rounded mx-auto d-block" width="140" height="140" src="<?php echo base_url('picture/crop-1588051633262.jpg') ?>">
		</a>
	</div>
	<div class="col-lg">
		<a href="https://www.facebook.com/pages/category/Nonprofit-Organization/%E0%B8%A1%E0%B8%B9%E0%B8%A5%E0%B8%99%E0%B8%B4%E0%B8%98%E0%B8%B4%E0%B8%A9%E0%B8%B0%E0%B8%81%E0%B8%AD%E0%B8%9F%E0%B8%B0%E0%B8%AE-705240033014546/">
			<img class="rounded mx-auto d-block" width="140" height="140" src="<?php echo base_url('picture/crop-1588051648982.jpg') ?>">
		</a>
	</div>
	<div class="col-lg">
		<a href="https://www.facebook.com/Jiraphat1705/">
			<img class="rounded mx-auto d-block" width="140" height="140" src="<?php echo base_url('picture/crop-1588051777775.jpg') ?>">
		</a>
	</div>
	<div class="col-lg">
		<a href="https://www.facebook.com/%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%99%E0%B9%89%E0%B8%B3%E0%B8%A1%E0%B8%B1%E0%B8%99%E0%B9%80%E0%B8%8A%E0%B8%A5%E0%B8%A5%E0%B9%8C-%E0%B8%84%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%A2%E0%B8%B2%E0%B8%87-110341583984620/?modal=admin_todo_tour">
			<img class="rounded mx-auto d-block" width="140" height="140" src="<?php echo base_url('picture/crop-1588051697985.jpg') ?>">
		</a>
	</div>
	<div class="col-lg">
		<a href="https://www.youtube.com/channel/UCffHrfpeGIw4dlLCs-IEGDg">
			<img class="rounded mx-auto d-block" width="140" height="140" src="<?php echo base_url('picture/crop-1588051728377.jpg') ?>">
		</a>
	</div>
	<div class="col-lg">
		<a href="https://www.facebook.com/Sakofah.Islam.Savings/">
			<img class="rounded mx-auto d-block" width="140" height="140" src="<?php echo base_url('picture/crop-1588051745671.jpg') ?>">
		</a>
	</div>
</div>
</div>
</div>
