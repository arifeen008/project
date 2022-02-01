<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
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


<div class="bg-image hover-overlay">
	<img src="<?php echo base_url('picture/bannerเพิ่มฮัจย์-อุมเราะห์.gif') ?>" class="w-100" />
	<div class="mask text-center" style="background: linear-gradient(45deg,rgba(29, 237, 198, 0.5),rgba(91, 14, 214, 0.5) 100%);">
		<div class="d-flex justify-content-center h1" style="font-family: 'Sarabun';font-size: 50px;align-items: center;height: 400px;color:black" data-mdb-toggle="modal" data-mdb-target="#exampleModal">ดูรายละเอียด</div>
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="lightbox">
				<div class="modal-body"><img src="<?php echo base_url('picture/312.jpg') ?>" data-mdb-img="<?php echo base_url('picture/312.jpg') ?>" class="w-100" /></div>
			</div>
		</div>
	</div>
</div>

<div class="container my-3">
	<div class="row">
		<div class="col">
			<div class="row">
				<div class="col-md-6 mb-3">
					<div class="card border hover-shadow border-success">
						<a href="<?php echo site_url('index/register') ?>" class="card-body">
							<p class="card-text text-center text-dark">
								<i class="far fa-registered fa-4x"></i>
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 25px;" class="text-center text-dark h3">สมัครสมาชิก</p>
							</p>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<div class="card border hover-shadow border-success">
						<a href="<?php echo site_url('index/deposit') ?>" class="card-body">
							<p class="card-text text-center text-dark">
								<i class="fas fa-hand-holding-usd fa-4x"></i>
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 25px;" class="text-center text-dark h3">บริการเงินฝาก</p>
							</p>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<div class="card border hover-shadow border-success">
						<a href="<?php echo site_url('index/credit') ?>" class="card-body">
							<p class="card-text text-center text-dark">
								<i class="far fa-credit-card fa-4x"></i>
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 25px;" class="text-center text-dark h3">บริการสินเชื่อ</p>
							</p>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<div class="card border hover-shadow border-success">
						<a href="<?php echo site_url('index/document') ?>" class="card-body">
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
					<div class="card hover-shadow border border-success">
						<div class="card-body" style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;">
							<h4 class="text-center mb-3">รายงานสถานการณ์ COVID-19 ประจำวัน</h4>
							<div class="d-flex justify-content-between">
								<p><i class="fas fa-calendar me-3"></i>วันแถลง</p>
								<p><?php echo thaidate('j F พ.ศ. Y ', strtotime($covid_data[0]['txn_date'])) ?></p>
							</div>
							<div class="d-flex justify-content-between">
								<p><i class="fas fa-clinic-medical me-2"></i>จำนวนผู้ป่วยรายใหม่</p>
								<p><?php echo number_format($covid_data[0]['new_case']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between">
								<p><i class="far fa-hospital me-3"></i>จำนวนผู้ป่วยสะสม</p>
								<p><?php echo number_format($covid_data[0]['total_case']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between">
								<p><i class="fas fa-skull-crossbones me-3"></i>จำนวนผู้ป่วยเสียชีวิตรายใหม่</p>
								<p><?php echo number_format($covid_data[0]['new_death']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between">
								<p><i class="fas fa-book-dead me-3"></i>จำนวนผู้ป่วยเสียชีวิตสะสม</p>
								<p><?php echo number_format($covid_data[0]['total_death']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between">
								<p><i class="fas fa-medkit me-3"></i>จำนวนผู้ป่วยรักษาหายรายใหม่</p>
								<p><?php echo number_format($covid_data[0]['new_recovered']) . ' ราย' ?></p>
							</div>
							<div class="d-flex justify-content-between">
								<p><i class="fas fa-pills me-3"></i>จำนวนผู้ป่วยรักษาหายสะสม</p>
								<p><?php echo number_format($covid_data[0]['total_recovered']) . ' ราย' ?></p>
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
		<div class="col">
			<div class="card border border-success">
				<div class="card-body">
					<p style="font-family: 'Sarabun', cursive;color:black;font-size: 35px;" class="text-center h1">
						ข่าวประชาสัมพันธ์
					</p>
					<div class="row">
						<?php foreach ($list_news as $row) { ?>
							<div class="col-md-3">
								<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>" class="card hover-shadow my-2">
									<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" width="auto" height="200px" class="card-img-top" />
									<div class="card-body">
										<p style="font-family: 'Sarabun'" class="card-title text-dark transaction"><?= $row->title ?></p>
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
					<b style="font-family: 'Chonburi', cursive;" class="text-success h1">572,333,378</b>
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
			<img class="rounded mx-auto d-block hover-shadow" width="140" height="140" src="<?php echo base_url('picture/crop-1588051633262.jpg') ?>">
		</a>
	</div>
	<div class="col-lg">
		<a href="https://www.facebook.com/pages/category/Nonprofit-Organization/%E0%B8%A1%E0%B8%B9%E0%B8%A5%E0%B8%99%E0%B8%B4%E0%B8%98%E0%B8%B4%E0%B8%A9%E0%B8%B0%E0%B8%81%E0%B8%AD%E0%B8%9F%E0%B8%B0%E0%B8%AE-705240033014546/">
			<img class="rounded mx-auto d-block hover-shadow" width="140" height="140" src="<?php echo base_url('picture/crop-1588051648982.jpg') ?>">
		</a>
	</div>
	<div class="col-lg">
		<a href="https://www.facebook.com/Jiraphat1705/">
			<img class="rounded mx-auto d-block hover-shadow" width="140" height="140" src="<?php echo base_url('picture/crop-1588051777775.jpg') ?>">
		</a>
	</div>
	<div class="col-lg">
		<a href="https://www.facebook.com/%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%99%E0%B9%89%E0%B8%B3%E0%B8%A1%E0%B8%B1%E0%B8%99%E0%B9%80%E0%B8%8A%E0%B8%A5%E0%B8%A5%E0%B9%8C-%E0%B8%84%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%A2%E0%B8%B2%E0%B8%87-110341583984620/?modal=admin_todo_tour">
			<img class="rounded mx-auto d-block hover-shadow" width="140" height="140" src="<?php echo base_url('picture/shellKrabi.jpg') ?>">
		</a>
	</div>
	<div class="col-lg">
		<a href="https://www.youtube.com/channel/UCffHrfpeGIw4dlLCs-IEGDg">
			<img class="rounded mx-auto d-block hover-shadow" width="140" height="140" src="<?php echo base_url('picture/crop-1588051728377.jpg') ?>">
		</a>
	</div>
	<div class="col-lg">
		<a href="https://www.facebook.com/Sakofah.Islam.Savings/">
			<img class="rounded mx-auto d-block hover-shadow" width="140" height="140" src="<?php echo base_url('picture/crop-1588051745671.jpg') ?>">
		</a>
	</div>
</div>
