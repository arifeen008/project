<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');">
	<div class="container my-2">
		<h1 class="text-center text-dark mt-2">ข่าวสาร/กิจกรรมความเคลื่อนไหว</h1>
		<div class="row">
			<?php foreach ($result->result() as $row) { ?>
				<div class="col-md-4 mb-2">
					<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>">
						<div class="card">
							<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
								<img src="<?php echo base_url('uploads') ?>/<?= $row->picturename ?>" class="img-fluid" />	
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
							</div>
							<div class="card-body">
								<h6 class="card-title text-dark text-truncate" ><strong><?= $row->title ?></strong></h6>
								<p class="card-text text-dark text-truncate">
									<?= $row->description ?>
								</p>
								<p class="card-text">
									<small class="text-muted"><?= thaidate('j M Y ', strtotime($row->dateupload)) ?></small>
								</p>
							</div>
						</div>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
