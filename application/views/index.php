 <?php include_once("application/libraries/thaidate-functions.php");
	include_once("application/libraries/Thaidate.php"); ?>
 <style>
 	html,
 	body {
 		max-width: 100%;
 		overflow-x: hidden;
 	}

 	.transaction {
 		display: -webkit-box;
 		-webkit-line-clamp: 2;
 		-webkit-box-orient: vertical;
 		overflow: hidden;
 	}
 </style>

 <div style="width: 100%;">
 	<div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel">
 		<div class="carousel-indicators">
 			<button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
 			<button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="1" aria-label="Slide 2"></button>
 			<button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="2" aria-label="Slide 3"></button>
 		</div>
 		<div class="carousel-inner">
 			<div class="carousel-item active">
 				<img src="<?php echo base_url('picture/267-1.jpg') ?>" class="d-block w-100" />
 			</div>
 			<div class="carousel-item">
 				<img src="<?php echo base_url('picture/309-1.jpg') ?>" class="d-block w-100" />
 			</div>
 			<div class="carousel-item">
 				<img src="<?php echo base_url('picture/ค่านิยมเว็บ.jpg') ?>" class="d-block w-100" />
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
 <div class="container mt-4">
 	<div id="carouselBanner" class="carousel slide carousel-dark" data-mdb-ride="carouselBanner">
 		<div class="carousel-indicators">
 			<button type="button" data-mdb-target="#carouselBanner" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
 			<button type="button" data-mdb-target="#carouselBanner" data-mdb-slide-to="1" aria-label="Slide 2"></button>
 			<button type="button" data-mdb-target="#carouselBanner" data-mdb-slide-to="2" aria-label="Slide 3"></button>
 		</div>
 		<div class="carousel-inner">
 			<div class="carousel-item active" data-mdb-interval="5000">
 				<div class="lightbox">
 					<img src="<?php echo base_url('picture/345-1.jpg') ?>" data-mdb-img="<?php echo base_url('picture/345.jpg') ?>" class="d-block w-100" />
 				</div>
 			</div>
 			<div class="carousel-item" data-mdb-interval="5000">
 				<div class="lightbox">
 					<img src="<?php echo base_url('picture/388-1.jpg') ?>" data-mdb-img="<?php echo base_url('picture/388.jpg') ?>" class="d-block w-100" />
 				</div>
 			</div>
 			<div class="carousel-item" data-mdb-interval="5000">
 				<div class="lightbox">
 					<img src="<?php echo base_url('picture/389-1.jpg') ?>" data-mdb-img="<?php echo base_url('picture/389.jpg') ?>" class="d-block w-100" />
 				</div>
 			</div>
 		</div>
 		<button class="carousel-control-prev" type="button" data-mdb-target="#carouselBanner" data-mdb-slide="prev">
 			<span class="carousel-control-prev-icon" aria-hidden="false"></span>
 			<span class="visually-hidden">Previous</span>
 		</button>
 		<button class="carousel-control-next" type="button" data-mdb-target="#carouselBanner" data-mdb-slide="next">
 			<span class="carousel-control-next-icon" aria-hidden="false"></span>
 			<span class="visually-hidden">Next</span>
 		</button>
 	</div>
 </div>
 <div class="container mt-3">
 	<div class="row">
 		<div class="col">
 			<div class="row">
 				<div class="col-md-6">
 					<a href="<?php echo site_url('index/register') ?>" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="pulse" class="card hover-shadow">
 						<img src="<?php echo base_url('picture/433.png') ?>">
 					</a>
 				</div>
 				<div class="col-md-6">
 					<a href="<?php echo site_url('index/deposit') ?>" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="pulse" class="card hover-shadow">
 						<img src="<?php echo base_url('picture/433-1.png') ?>">
 					</a>
 				</div>
 				<div class="col-md-6">
 					<a href="<?php echo site_url('index/credit') ?>" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="pulse" class="card hover-shadow">
 						<img src="<?php echo base_url('picture/433-2.png') ?>">
 					</a>
 				</div>
 				<div class="col-md-6">
 					<a href="<?php echo site_url('index/document') ?>" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="pulse" class="card hover-shadow">
 						<img src="<?php echo base_url('picture/433-3.png') ?>">
 					</a>
 				</div>
 			</div>
 		</div>
 		<div class="col">
 			<!-- <b class="text-dark" style="font-family: 'Kanit';font-size: 18px;">ราคาทองคำ ณ วันที่ <?php echo thaidate('j M Y ', strtotime(date('Y-m-d'))) . ' เวลา ' . $gold_price[0]->ask  ?></b>
 			<table class="table table-bordered">
 				<thead>
 					<tr>
 						<th scope="col">รายการ</th>
 						<th scope="col">รับซื้อ</th>
 						<th scope="col">ขายออก</th>
 						<th scope="col">+/-</th>

 					</tr>
 				</thead>
 				<tbody>
 					<?php foreach (array_slice($gold_price, 4, 1) as $row) { ?>
 						<tr>
 							<td><?= $row->name ?></td>
 							<td><?= number_format($row->bid, 2) ?></td>
 							<td><?= number_format($row->ask, 2) ?></td>
 							<td><?= $row->diff ?></td>
 						</tr>
 					<?php	} ?>
 				</tbody>
 			</table>
 			<b class="text-dark mt-2" style="font-family: 'Kanit';font-size: 18px;"> อัตราการแลกเปลี่ยน ณ วันที่ <?php echo thaidate('j M Y ', strtotime($exchange_rate->date)) ?> </b>
 			<table class="table table-bordered">
 				<tr>
 					<th><i class="flag flag-us"></i> $USD</td>
 					<td><?= number_format($exchange_rate->query->amount, 2) ?></td>
 				</tr>
 				<tr>
 					<th><i class="flag flag-th"></i> ฿THB</th>
 					<td><?= number_format($exchange_rate->result, 4) ?></td>
 				</tr>
 			</table> -->
 			<div class="row">
 				<div class="col-md-12">
 					<div class="card hover-shadow">
 						<div class="card-body mx-2" style="font-family: 'Sarabun', cursive;color:black;">
 							<h4 class="text-center mb-3"><?php echo lang('covid_report') ?></h4>
 							<div class="d-flex justify-content-between">
 								<p><i class="fas fa-calendar me-3"></i><?php echo lang('covid_date') ?></p>
 								<p><?php echo thaidate('j F พ.ศ. Y ', strtotime($covid_data[0]['txn_date'])) ?></p>
 							</div>
 							<div class="d-flex justify-content-between">
 								<p><i class="fas fa-clinic-medical me-2"></i><?php echo lang('covid_new_case') ?></p>
 								<p><?php echo number_format($covid_data[0]['new_case']) . ' ' . lang('covid_people') ?></p>
 							</div>
 							<div class="d-flex justify-content-between">
 								<p><i class="far fa-hospital me-3"></i><?php echo lang('covid_total_case') ?></p>
 								<p><?php echo number_format($covid_data[0]['total_case']) . ' ' . lang('covid_people') ?></p>
 							</div>
 							<div class="d-flex justify-content-between">
 								<p><i class="fas fa-skull-crossbones me-3"></i><?php echo lang('covid_new_death') ?></p>
 								<p><?php echo number_format($covid_data[0]['new_death']) . ' ' . lang('covid_people') ?></p>
 							</div>
 							<div class="d-flex justify-content-between">
 								<p><i class="fas fa-book-dead me-3"></i><?php echo lang('covid_total_death') ?></p>
 								<p><?php echo number_format($covid_data[0]['total_death']) . ' ' . lang('covid_people') ?></p>
 							</div>
 							<div class="d-flex justify-content-between">
 								<p><i class="fas fa-medkit me-3"></i><?php echo lang('covid_new_recovered') ?></p>
 								<p><?php echo number_format($covid_data[0]['new_recovered']) . ' ' . lang('covid_people') ?></p>
 							</div>
 							<div class="d-flex justify-content-between">
 								<p><i class="fas fa-pills me-3"></i><?php echo lang('covid_total_recovered') ?></p>
 								<p><?php echo number_format($covid_data[0]['total_recovered']) . ' ' . lang('covid_people') ?> </p>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <div class="container my-3">
 	<div class="row" style="font-family: 'Sarabun';">
 		<div class="col-md-8">
 			<div class="card">
 				<div class="row">
 					<div class="col-md-6">
 						<div class="card my-2">
 							<b class="card-title text-dark border-bottom border-primary mx-2 my-3" style="font-size: large;"><?php echo lang('news_information') ?></b>
 							<div id="carouselExampleCaptions" class="carousel slide carousel-dark mx-2" data-mdb-ride="carousel">
 								<div class="carousel-indicators">
 									<?php for ($i = 1; $i <= count($news_information); $i++) { ?>
 										<button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="<?php echo $i - 1 ?>" class="<?php echo (($i - 1 == 0) ? "active" : "false") ?>" aria-current="<?php echo (($i - 1 == 0) ? "true" : "false") ?>" aria-label="Slide <?php echo $i ?>"></button>
 									<?php } ?>
 								</div>
 								<div class="carousel-inner">
 									<?php $isActive = 1;
										foreach ($news_information as $row) { ?>
 										<div class="carousel-item <?php echo (($isActive == "1") ? "active" : "") ?>">
 											<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>" class="card">
 												<img src="<?php echo base_url('uploads/' . $row->picturename) ?>" style="width: 100%;height:250px" class="card-img-top" alt="<?= $row->picturename ?>" />
 												<div class="card-body">
 													<p class="card-text text-dark transaction"><?= $row->title ?></p> <br>
 												</div>
 											</a>
 										</div>
 									<?php $isActive = 0;
										} ?>
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
 							<b class="card-title text-dark border-bottom border-success mx-2 my-3" style="font-size: large;"><?php echo lang('news_welfare') ?></b>
 							<div id="carouselExampleCaptions2" class="carousel slide carousel-dark mx-2" data-mdb-ride="carousel">
 								<div class="carousel-indicators">
 									<?php for ($i = 1; $i <= count($news_welfare); $i++) { ?>
 										<button type="button" data-mdb-target="#carouselExampleCaptions2" data-mdb-slide-to="<?php echo $i - 1 ?>" class="<?php echo (($i - 1 == 0) ? "active" : "false") ?>" aria-current="<?php echo (($i - 1 == 0) ? "true" : "false") ?>" aria-label="Slide <?php echo $i ?>"></button>
 									<?php } ?>
 								</div>
 								<div class="carousel-inner">
 									<?php $isActive2 = 1;
										foreach ($news_welfare as $row) { ?>
 										<div class="carousel-item <?php echo (($isActive2 == "1") ? "active" : "") ?>">
 											<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>" class="card">
 												<img src="<?php echo base_url('uploads/' . $row->picturename) ?>" style="width: 100%;height:250px" class="card-img-top" alt="<?= $row->picturename ?>" />
 												<div class="card-body">
 													<p class="card-text text-dark transaction"><?= $row->title ?></p> <br>
 												</div>
 											</a>
 										</div>
 									<?php $isActive2 = 0;
										} ?>
 								</div>
 								<button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions2" data-mdb-slide="prev">
 									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
 									<span class="visually-hidden">Previous</span>
 								</button>
 								<button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions2" data-mdb-slide="next">
 									<span class="carousel-control-next-icon" aria-hidden="true"></span>
 									<span class="visually-hidden">Next</span>
 								</button>
 							</div>
 						</div>
 					</div>
 					<div class="col-md-6">
 						<div class="card my-2">
 							<b class="card-title text-dark border-bottom border-warning mx-2 my-3" style="font-size: large;"><?php echo lang('news_halal_credit') ?></b>
 							<div id="carouselBasicExample3" class="carousel slide carousel-dark mx-2" data-mdb-ride="carousel">
 								<div class="carousel-indicators">
 									<?php for ($i = 1; $i <= count($news_credit); $i++) { ?>
 										<button type="button" data-mdb-target="#carouselExampleCaptions3" data-mdb-slide-to="<?php echo $i - 1 ?>" class="<?php echo (($i - 1 == 0) ? "active" : "false") ?>" aria-current="<?php echo (($i - 1 == 0) ? "true" : "false") ?>" aria-label="Slide <?php echo $i ?>"></button>
 									<?php } ?>
 								</div>
 								<div class="carousel-inner">
 									<?php $isActive3 = 1;
										foreach ($news_credit as $row) { ?>
 										<div class="carousel-item <?php echo (($isActive3 == "1") ? "active" : "") ?>">
 											<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>" class="card">
 												<img src="<?php echo base_url('uploads/' . $row->picturename) ?>" style="width: 100%;height:250px" class="card-img-top" alt="<?= $row->picturename ?>" />
 												<div class="card-body">
 													<p class="card-text text-dark transaction"><?= $row->title ?></p> <br>
 												</div>
 											</a>
 										</div>
 									<?php $isActive3 = 0;
										} ?>
 								</div>
 								<button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample3" data-mdb-slide="prev">
 									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
 									<span class="visually-hidden">Previous</span>
 								</button>
 								<button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample3" data-mdb-slide="next">
 									<span class="carousel-control-next-icon" aria-hidden="true"></span>
 									<span class="visually-hidden">Next</span>
 								</button>
 							</div>
 						</div>
 					</div>
 					<div class="col-md-6">
 						<div class="card my-2">
 							<b class="card-title text-dark border-bottom border-danger mx-2 my-3" style="font-size: large;"><?php echo lang('news_foundation') ?></b>
 							<div id="carouselExampleCaptions4" class="carousel slide carousel-dark mx-2" data-mdb-ride="carousel">
 								<div class="carousel-indicators">
 									<?php for ($i = 1; $i <= count($news_foundation); $i++) { ?>
 										<button type="button" data-mdb-target="#carouselExampleCaptions4" data-mdb-slide-to="<?php echo $i - 1 ?>" class="<?php echo (($i - 1 == 0) ? "active" : "false") ?>" aria-current="<?php echo (($i - 1 == 0) ? "true" : "false") ?>" aria-label="Slide <?php echo $i ?>"></button>
 									<?php } ?>
 								</div>
 								<div class="carousel-inner">
 									<?php $isActive4 = 1;
										foreach ($news_foundation as $row) { ?>
 										<div class="carousel-item <?php echo (($isActive4 == "1") ? "active" : "") ?>">
 											<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>" class="card">
 												<img src="<?php echo base_url('uploads/' . $row->picturename) ?>" style="width: 100%;height:250px" class="card-img-top" alt="<?= $row->picturename ?>" />
 												<div class="card-body">
 													<p class="card-text text-dark transaction"><?= $row->title ?></p> <br>
 												</div>
 											</a>
 										</div>
 									<?php $isActive4 = 0;
										} ?>
 								</div>
 								<button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions4" data-mdb-slide="prev">
 									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
 									<span class="visually-hidden">Previous</span>
 								</button>
 								<button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions4" data-mdb-slide="next">
 									<span class="carousel-control-next-icon" aria-hidden="true"></span>
 									<span class="visually-hidden">Next</span>
 								</button>
 							</div>
 						</div>
 					</div>
 					<div class="col-md-12">
 						<div class="card">
 							<b class="card-title text-dark border-bottom border-secondary mx-2" style="font-size: large;"><?php echo lang('news_news') ?></b>
 							<div class="row">
 								<?php foreach (array_slice($google_news->results, 0, 8)  as $row) { ?>
 									<div class="col-md-3">
 										<a href="<?php echo $row->link ?>" class="card hover-shadow mb-3">
 											<img src="<?php echo $row->image_url ?>" style="width: 100%;height: 130px;" class="card-img-top" />
 											<div class="card-body">
 												<p class="card-text text-dark transaction"><?php echo $row->title ?></p>
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

 		<div class="col-md-4">
 			<div class="ratio ratio-16x9 my-3">
 				<iframe src="https://www.youtube.com/embed/zzvuyxuuHPs" title="YouTube video" allowfullscreen></iframe>
 			</div>
 			<div class="ratio ratio-16x9 my-3">
 				<iframe src="https://www.youtube.com/embed/SV7IdDXAX0A" title="YouTube video" allowfullscreen></iframe>
 			</div>
 			<div class="card mb-2">
 				<a target="_blank" class="hover-shadow" href="https://www.dol.go.th/Pages/%E0%B8%AA%E0%B8%B3%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%94%E0%B8%B4%E0%B8%99%E0%B8%88%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%B5%E0%B9%88----.aspx">
 					<img class="rounded mx-auto d-block " width="120" height="120" src="<?php echo base_url('picture/ตรากรมที่ดิน.png') ?>">
 					<p class="text-center text-primary" style="font-family: 'Sarabun';"><?php echo lang('department_of_Lands') ?></p>
 				</a>
 			</div>
 			<div class="card mb-2">
 				<a target="_blank" class="hover-shadow" href="https://www.moac.go.th/site-home">
 					<img class="rounded mx-auto d-block " width="120" height="120" src="<?php echo base_url('picture/กระทรวงเกษตรและสหกรณ์.png') ?>">
 					<p class="text-center text-primary" style="font-family: 'Sarabun';"><?php echo lang('ministry_of_agriculture_and_cooperatives') ?></p>
 				</a>
 			</div>
 			<div class="card mb-2">
 				<a target="_blank" class="hover-shadow" href="https://krabi.cad.go.th/main.php?filename=index">
 					<img class="rounded mx-auto d-block " width="120" height="120" src="<?php echo base_url('picture/img_fd06b99e276ab69db92a5bae61228dc2.png') ?>">
 					<p class="text-center text-primary" style="font-family: 'Sarabun';"><?php echo lang('krabi_cooperative_auditing_department') ?></p>
 				</a>
 			</div>
 			<div class="card mb-2">
 				<a target="_blank" class="hover-shadow" href="https://web.cpd.go.th/krabi/">
 					<img class="rounded mx-auto d-block " width="120" height="120" src="<?php echo base_url('picture/ตราสำนักงานสหกรณ์จังหวัดกระบี่.jpg') ?>">
 					<p class="text-center text-primary" style="font-family: 'Sarabun';"><?php echo lang('krabi_provincial_cooperative_office') ?></p>
 				</a>
 			</div>
 			<div class="card mb-2">
 				<a target="_blank" class="hover-shadow" href="https://www.mol.go.th/">
 					<img class="rounded mx-auto d-block " width="120" height="120" src="<?php echo base_url('picture/img_12b077835cddf4f35d3a3c285545a815.jpg') ?>">
 					<p class="text-center text-primary" style="font-family: 'Sarabun';"><?php echo lang('ministry_of_labor') ?></p>
 				</a>
 			</div>
 			<div class="card mb-2">
 				<a target="_blank" class="hover-shadow" href="https://www.cpd.go.th/index.php">
 					<img class="rounded mx-auto d-block " width="120" height="120" src="<?php echo base_url('picture/logo_cpd_big.png') ?>">
 					<p class="text-center text-primary" style="font-family: 'Sarabun';"><?php echo lang('cooperative_promotion_department') ?></p>
 				</a>
 			</div>
 		</div>
 	</div>
 </div>

 <div class="container my-3">
 	<div class="card">
 		<p class="card-title text-dark border-bottom border-info mx-2 my-2" style="font-family: 'Sarabun';font-size: 20px;"><b><?php echo lang('news_online_journal') ?></b></p>
 		<iframe class="mb-3 mx-2" style="width: auto;height: 500px;" src="https://anyflip.com/bookcase/wueoy/" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen></iframe>
 	</div>
 </div>
 <div class="row my-3">
 	<div class="col-lg">
 		<a href="https://www.facebook.com/Sakofah.Wittayaphat.School/?ref=bookmarks">
 			<img class="rounded mx-auto d-block hover-shadow" width="120" height="120" src="<?php echo base_url('picture/crop-1588051633262.jpg') ?>">
 		</a>
 	</div>
 	<div class="col-lg">
 		<a href="https://www.facebook.com/pages/category/Nonprofit-Organization/%E0%B8%A1%E0%B8%B9%E0%B8%A5%E0%B8%99%E0%B8%B4%E0%B8%98%E0%B8%B4%E0%B8%A9%E0%B8%B0%E0%B8%81%E0%B8%AD%E0%B8%9F%E0%B8%B0%E0%B8%AE-705240033014546/">
 			<img class="rounded mx-auto d-block hover-shadow" width="120" height="120" src="<?php echo base_url('picture/crop-1588051648982.jpg') ?>">
 		</a>
 	</div>
 	<div class="col-lg">
 		<a href="https://www.facebook.com/Jiraphat1705/">
 			<img class="rounded mx-auto d-block hover-shadow" width="120" height="120" src="<?php echo base_url('picture/crop-1588051777775.jpg') ?>">
 		</a>
 	</div>
 	<div class="col-lg">
 		<a href="https://www.facebook.com/%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%99%E0%B9%89%E0%B8%B3%E0%B8%A1%E0%B8%B1%E0%B8%99%E0%B9%80%E0%B8%8A%E0%B8%A5%E0%B8%A5%E0%B9%8C-%E0%B8%84%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%A2%E0%B8%B2%E0%B8%87-110341583984620/?modal=admin_todo_tour">
 			<img class="rounded mx-auto d-block hover-shadow" width="120" height="120" src="<?php echo base_url('picture/shellKrabi.jpg') ?>">
 		</a>
 	</div>
 	<div class="col-lg">
 		<a href="https://www.youtube.com/channel/UCffHrfpeGIw4dlLCs-IEGDg">
 			<img class="rounded mx-auto d-block hover-shadow" width="120" height="120" src="<?php echo base_url('picture/crop-1588051728377.jpg') ?>">
 		</a>
 	</div>
 	<div class="col-lg">
 		<a href="https://www.facebook.com/Sakofah.Islam.Savings/">
 			<img class="rounded mx-auto d-block hover-shadow" width="120" height="120" src="<?php echo base_url('picture/crop-1588051745671.jpg') ?>">
 		</a>
 	</div>
 	<div class="col-lg">
 		<a href="https://www.facebook.com/watch/UmmahChannel.Fan/">
 			<img class="rounded mx-auto d-block hover-shadow" width="120" height="120" src="<?php echo base_url('picture/logo-ummah-channel.png') ?>">
 		</a>
 	</div>
 	<div class="col-lg">
 		<a href="https://www.facebook.com/Southern-Coffee-%E0%B8%84%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%A2%E0%B8%B2%E0%B8%87-100245865097067">
 			<img class="rounded mx-auto d-block hover-shadow" width="120" height="120" src="<?php echo base_url('picture/SOUTHERN-COFFEE-LOGO.png') ?>">
 		</a>
 	</div>
 </div>