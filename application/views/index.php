<div class="containner-fluid">
	<div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo base_url('picture_promotion/305-1.jpg') ?>" class="d-block w-100" alt="..." />
			</div>
			<div class="carousel-item">
				<img src="https://mdbootstrap.com/img/new/slides/042.jpg" class="d-block w-100" alt="..." />
			</div>
			<div class="carousel-item">
				<img src="https://mdbootstrap.com/img/new/slides/043.jpg" class="d-block w-100" alt="..." />
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
<div class="container my-3">
	<div class="row">
		<div class="col-lg-6">
			<div id="carouselExampleCaptions" class="carousel slide my-3" data-mdb-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo base_url('picture_promotion/305-1.jpg') ?>" class="d-block w-100"/>
						<div class="carousel-caption d-none d-md-block">
						</div>
					</div>
					<div class="carousel-item">
						<img src="https://mdbootstrap.com/img/new/slides/042.jpg" class="d-block w-100"/>
						<div class="carousel-caption d-none d-md-block">
						</div>
					</div>
					<div class="carousel-item">
						<img src="https://mdbootstrap.com/img/new/slides/043.jpg" class="d-block w-100"/>
						<div class="carousel-caption d-none d-md-block">
						</div>
					</div>
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
		<div class="col-lg-6">
			<div class="row">
				<div class="col-md-6 mb-3">
					<div class="card">
						<a href="<?php echo site_url('member/register_page') ?>" class="card-body" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="tada">
							<p class="card-text text-center text-dark">
								<i class="fab fa-servicestack fa-4x"></i>
								<h3 class="text-center text-success">สมัครสมาชิก</h3>
							</p>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<div class="card">
						<a href="<?php echo site_url('index/deposit') ?>" class="card-body" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="tada">
							<p class="card-text text-center text-dark">
								<i class="fas fa-user-alt fa-4x"></i></i>
								<h3 class="text-center text-success">บริการเงินฝาก</h3>
							</p>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<div class="card">
						<a href="<?php echo site_url('index/credit') ?>" class="card-body" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="tada">
							<p class="card-text text-center text-dark">
								<i class="fas fa-project-diagram fa-4x"></i>
								<h3 class="text-center text-success">บริการสินเชื่อ</h3>
							</p>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<div class="card">
						<a href="<?php echo site_url('index/document') ?>" class="card-body" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="tada">
							<p class="card-text text-center text-dark">
								<i class="fas fa-file fa-4x"></i>
								<h3 class="text-center text-success">เอกสาร</h3>
							</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container my-2">
	<h2 class="text-dark text-center">ภาพกิจกรรม</h2>
	<div class="row">
		<div class="col-md-4">
			<a class="card my-2" href="<?php echo site_url('news/news001') ?>">
				<img src="<?php echo base_url('picture_activity\001\S__999477.jpg')?>" class="card-img-top"/>
				<div class="card-body">
					<h5 class="card-title text-dark text-truncate">เข้าร่วมประชุมใหญ่วิสามัญ ในวันที่ 28 ธันวาคม 2564</h5>
					<p class="card-text text-dark text-truncate">
						วันศุกร์ ที่ 24 ธันวาคม 2564 นายอภินันท์ แสล่หมัน ผู้จัดการใหญ่สหกรณ์อิสลามษะกอฟะฮ จำกัด พร้อมรองผู้จัดการใหญ่ฝ่ายบัญชี ไปร่วมแสดงความยินดีกับ นายสุทยุต พูนสมบัติ ที่ได้รับตำแหน่งใหม่ เป็น สกจ.พังงา และเรียนเชิญ นางสาวสาวดี รักษ์ศิริ สหกรณ์จังหวัดกระบี่ เป็นประธานในพิธีการประชุมวิสามัญ และไปพบปะเยี่ยมเยียนพร้อมมอบของขวัญและเรียนเชิญท่าน ผอ.จาตุรนต์ หลงขาว ผู้อำนวยการกลุ่มส่งเสริมสหกรณ์ 2
						นางสาว สุมา หลีกภัย ผู้อำนวยการกลุ่มส่งเสริมสหกรณ์ 3 เข้าร่วมประชุมใหญ่วิสามัญ ในวันที่ 28 ธันวาคม 2564
					</p>
					<small class="text-dark text-mute">24 ธันวาคม 2564</small>
				</div>
			</a>
		</div>
		<div class="col-md-4">
			<div class="card my-2">
				<img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone" />
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">
						Some quick example text to build on the card title and make up the bulk of the
						card's content.
					</p>
					<small class="text-mute">26 มิถุนายน 2564</small>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card my-2">
				<img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone" />
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">
						Some quick example text to build on the card title and make up the bulk of the
						card's content.
					</p>
					<small class="text-mute">26 มิถุนายน 2564</small>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card my-2">
				<img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone" />
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">
						Some quick example text to build on the card title and make up the bulk of the
						card's content.
					</p>
					<small class="text-mute">26 มิถุนายน 2564</small>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card my-2">
				<img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone" />
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">
						Some quick example text to build on the card title and make up the bulk of the
						card's content.
					</p>
					<small class="text-mute">26 มิถุนายน 2564</small>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card my-2">
				<img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone" />
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">
						Some quick example text to build on the card title and make up the bulk of the
						card's content.
					</p>
					<small class="text-mute">26 มิถุนายน 2564</small>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container my-3">
	<div class="card">
		<div class="card-body">
			<p class="text-center h1 my-3">สถานะการเงิน</p>
			<p class="text-center h5 text-mute my-3">ข้อมูล ณ พฤศจิกายน 2564 </p>
			<div class="row text-center">
				<div class="col-md-3">
					<b class="text-success h1">1,081.59</b>
					<p>ทุนเรือนหุ้น (ล้านบาท)</p>
				</div>
				<div class="col-md-3">
					<b class="text-success h1">1,156.98</b>
					<p>เงินฝาก (ล้านบาท)</p>
				</div>
				<div class="col-md-3">
					<b class="text-success h1">1,788.52</b>
					<p>จำนวนสินเชื่อ (ล้านบาท)</p>
				</div>
				<div class="col-md-3">
					<b class="text-success h1">32,801</b>
					<p>จำนวนสมาชิก (คน)</p>
				</div>
			</div>
		</div>
	</div>
</div>

<header>
	<div class="p-5 text-center bg-image" style="background-image: url('https://mdbootstrap.com/img/new/slides/041.jpg');height: 400px;">
		<div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
			<div class="d-flex justify-content-center align-items-center h-100">
				<div class="text-white">
					<h1 class="mb-3">Heading</h1>
					<h4 class="mb-3">ระดมทุน หนุนธุรกิจ นำชีวิต พ้นดอกเบี้ย</h4>
					<a class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a>
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
