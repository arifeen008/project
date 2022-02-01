<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
$isActive = 1;
$isActive2 = 1;
$isActive3 = 1;
$isActive4 = 1;
?>
<style>
	.transaction {
		display: -webkit-box;
		/* max-width: 200px; */
		-webkit-line-clamp: 2;
		-webkit-box-orient: vertical;
		overflow: hidden;
	}
</style>
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
	<div class="p-5 text-center bg-image" style="background-image: url('picture/fbc14309b9d3e131a4f7db7c23bdb0ba.jpg');height: 60vh">
		<div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
			<div class="d-flex justify-content-center align-items-center h-100">
				<div class="text-white">
					<h1 style="font-family: 'Sarabun',Extra-light 200;" class="mb-3">สหกรณ์อิสลามษะกอฟะฮ จำกัด</h1>
					<h4 style="font-family: 'Sarabun',Extra-light 200;" class="mb-3">ระดมทุน หนุนธุรกิจ นำชีวิต พ้นดอกเบี้ย</h4>
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
						<img src="<?php echo base_url('picture/f61cada1ba0a6f9bf3f48bb505b189cf.jpg') ?>" class="w-100" />
						<a href="#">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
					<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
						<img src="<?php echo base_url('picture/72aec7dd5a288470c38d01d5352dbfb1.jpg') ?>" class="w-100" />
						<a href="#">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
					<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
						<img src="<?php echo base_url('picture/2db4190d7ba6f0ee8240c0bd3fe196da.jpg') ?>" class="w-100" />
						<a href="#">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
					<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
						<img src="<?php echo base_url('picture/1152f13a7d791d2696e6cd76b5a9beea.jpg') ?>" class="w-100" />
						<a href="#">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
					<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
						<img src="<?php echo base_url('picture/7876aafe13a85a0bd20dc961d79b5747.jpg') ?>" class="w-100" />
						<a href="#">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
					<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
						<img src="<?php echo base_url('picture/b81e4c6d0646fa998feb7198f16a7ac9.jpg') ?>" class="w-100" />
						<a href="#">
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
						<a href="<?php echo site_url('index/register') ?>" class="card-body " data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="pulse">
							<p class="card-text text-center text-dark">
								<i class="far fa-registered fa-4x"></i>
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 25px;" class="text-center text-dark h3">สมัครสมาชิก</p>
							</p>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<div class="card border border-success">
						<a href="<?php echo site_url('index/deposit') ?>" class="card-body" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="pulse">
							<p class="card-text text-center text-dark">
								<i class="fas fa-hand-holding-usd fa-4x"></i>
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 25px;" class="text-center text-dark h3">บริการเงินฝาก</p>
							</p>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<div class="card border border-success">
						<a href="<?php echo site_url('index/credit') ?>" class="card-body" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="pulse">
							<p class="card-text text-center text-dark">
								<i class="far fa-credit-card fa-4x"></i>
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 25px;" class="text-center text-dark h3">บริการสินเชื่อ</p>
							</p>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<div class="card border border-success">
						<a href="<?php echo site_url('index/document') ?>" class="card-body" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="pulse">
							<p class="card-text text-center text-dark">
								<i class="fas fa-file-alt fa-4x"></i>
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 25px;" class="text-center text-dark h3">เอกสาร</p>
							</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<img src="<?php echo base_url('picture/covid.jpg') ?>" class="card-img opacity-25" />
						<div class="card-body mx-2 card-img-overlay">
							<p style="font-family: 'Sarabun', cursive;color:black;font-size: 20px;">รายงานสถานการณ์ COVID-19 ประจำวัน</p>
							<div class="d-flex justify-content-between">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><i class="fas fa-calendar me-3"></i>วันแถลง</p>
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo thaidate('j F พ.ศ. Y ', strtotime($covid_data[0]['txn_date'])) ?></p>
							</div>
							<div class="d-flex justify-content-between">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><i class="fas fa-clinic-medical me-2"></i>จำนวนผู้ป่วยรายใหม่</p>
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo number_format($covid_data[0]['new_case']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><i class="far fa-hospital me-3"></i>จำนวนผู้ป่วยสะสม</p>
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo number_format($covid_data[0]['total_case']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><i class="fas fa-skull-crossbones me-3"></i>จำนวนผู้ป่วยเสียชีวิตรายใหม่</p>
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo number_format($covid_data[0]['new_death']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><i class="fas fa-book-dead me-3"></i>จำนวนผู้ป่วยเสียชีวิตสะสม</p>
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo number_format($covid_data[0]['total_death']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><i class="fas fa-medkit me-3"></i>จำนวนผู้ป่วยรักษาหายรายใหม่</p>
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo number_format($covid_data[0]['new_recovered']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><i class="fas fa-pills me-3"></i>จำนวนผู้ป่วยรักษาหายสะสม</p>
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo number_format($covid_data[0]['total_recovered']) . ' ราย' ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container my-3">
	<div class="row">
		<div class="col-md-6">
			<div class="card my-2">
				<h5 class="card-title">ข่าวประชาสัมพันธ์</h5>
				<div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2" aria-label="Slide 3"></button>
						<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="3" aria-label="Slide 4"></button>
					</div>
					<div class="carousel-inner">
						<?php foreach ($list_news as $row) { ?>
							<?php if ($isActive == 1) { ?>
								<div class="carousel-item active">
									<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>">
										<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" class="d-block w-100" />
										<div class="carousel-caption d-none d-md-block">
											<h5><?= $row->title ?></h5>
										</div>
									</a>
								</div>
							<?php $isActive = 0;
							} else { ?>
								<div class="carousel-item">
									<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>">
										<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" class="d-block w-100" />
										<div class="carousel-caption d-none d-md-block">
											<h5><?= $row->title ?></h5>
										</div>
									</a>
								</div>
							<?php }  ?>
						<?php } ?>
					</div>
					<button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card my-2">
				<h5 class="card-title">สวัสดิการสมาชิก</h5>
				<div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2" aria-label="Slide 3"></button>
						<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="3" aria-label="Slide 4"></button>
					</div>
					<div class="carousel-inner">
						<?php foreach ($list_news as $row) { ?>
							<?php if ($isActive2 == 1) { ?>
								<div class="carousel-item active">
									<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>">
										<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" class="d-block w-100" />
										<div class="carousel-caption d-none d-md-block">
											<h5><?= $row->title ?></h5>
										</div>
									</a>
								</div>
							<?php $isActive2 = 0;
							} else { ?>
								<div class="carousel-item">
									<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>">
										<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" class="d-block w-100" />
										<div class="carousel-caption d-none d-md-block">
											<h5><?= $row->title ?></h5>
										</div>
									</a>
								</div>
							<?php }  ?>
						<?php } ?>
					</div>
					<button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<h5 class="card-title">สินเชื่อฮาลาล</h5>
				<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
						<button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="3" aria-label="Slide 4"></button>
					</div>
					<div class="carousel-inner">
						<?php foreach ($list_news as $row) { ?>
							<?php if ($isActive3 == 1) { ?>
								<div class="carousel-item active">
									<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>">
										<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" class="d-block w-100" />
										<div class="carousel-caption d-none d-md-block">
											<h5><?= $row->title ?></h5>
										</div>
									</a>
								</div>
							<?php $isActive3 = 0;
							} else { ?>
								<div class="carousel-item">
									<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>">
										<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" class="d-block w-100" />
										<div class="carousel-caption d-none d-md-block">
											<h5><?= $row->title ?></h5>
										</div>
									</a>
								</div>
							<?php }  ?>
						<?php } ?>
					</div>
					<button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<h5 class="card-title">มูลนิธิษะกอฟะฮ</h5>
				<div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2" aria-label="Slide 3"></button>
						<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="3" aria-label="Slide 4"></button>
					</div>
					<div class="carousel-inner">
						<?php foreach ($list_news as $row) { ?>
							<?php if ($isActive4 == 1) { ?>
								<div class="carousel-item active">
									<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>">
										<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" class="d-block w-100" />
										<div class="carousel-caption d-none d-md-block">
											<h5><?= $row->title ?></h5>
										</div>
									</a>
								</div>
							<?php $isActive4 = 0;
							} else { ?>
								<div class="carousel-item">
									<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>">
										<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" class="d-block w-100" />
										<div class="carousel-caption d-none d-md-block">
											<h5><?= $row->title ?></h5>
										</div>
									</a>
								</div>
							<?php }  ?>
						<?php } ?>
					</div>
					<button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container my-3">
	<div class="card border border-success">
		<div class="card-body">
			<p style="font-family: 'Sarabun', cursive;color:black;font-size: 35px;" class="text-center text-dark h1 my-3">สถานะการเงิน</p>
			<p style="font-family: 'Sarabun', cursive;font-size: 20px;" class="text-center text-mute my-3">ข้อมูล ณ มกราคม 2565 </p>
			<div class="row text-center">
				<div class="col-md-4">
					<b style="font-family: 'Chonburi', cursive;" class="text-success h1">220,370,250</b>
					<p style="font-family: 'Sarabun', cursive;font-size: 20px;" class="text-dark h3">ทุนเรือนหุ้น(ล้านบาท)</p>
				</div>
				<div class="col-md-4">
					<b style="font-family: 'Chonburi', cursive;" class="text-success h1">572,333,378.14</b>
					<p style="font-family: 'Sarabun', cursive;font-size: 20px;" class="text-dark">เงินฝาก(ล้านบาท)</p>
				</div>
				<div class="col-md-4">
					<b style="font-family: 'Chonburi', cursive;" class="text-success h1">13,533</b>
					<p style="font-family: 'Sarabun', cursive;font-size: 20px;" class="text-dark">จำนวนสมาชิก(คน)</p>
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
