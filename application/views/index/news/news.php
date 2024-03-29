<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<style>
	.transaction {
		display: -webkit-box;
		-webkit-line-clamp: 2;
		-webkit-box-orient: vertical;
		overflow: hidden;
	}
</style>
<div class="container my-3">
	<div class="row">
		<div class="col-md-9">
			<div class="card">
				<div class="card-body">
					<p style="font-family: 'Kanit';" class="text-dark text-center my-2 h4"><?php echo $data->title ?></p>
					<div class="lightbox">
						<div class="row">
							<?php foreach ($picture->result() as $row) { ?>
								<div class="col-lg-4">
									<img src="<?php echo base_url('uploads/') ?><?= $row->picture_name ?>" data-mdb-img="<?php echo base_url('uploads') ?>/<?= $row->picture_name ?>" width="auto" height="250px" class="w-100 shadow-1-strong rounded mb-2" />
								</div>
							<?php } ?>
						</div>
					</div>
					<h5 style="font-family: 'Kanit';" class="text-dark my-2"><?php echo $data->description ?></h5>
					<small class="text-mute"><?php echo thaidate('j F Y ', strtotime($data->dateupload))  ?></small>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<?php foreach ($side_data->result() as $row) { ?>
				<div class="col-md-12">
					<a href="<?php echo site_url('index/news/' . $row->news_number) ?>" class="card hover-shadow my-2">
						<img src="<?php echo base_url('uploads/') ?><?= $row->picture_name ?>" width="auto" height="150px" class="card-img-top" />
						<div class="card-body">
							<p class="text-dark transaction" style="font-family: 'Sarabun';"><?= $row->title ?></p>
						</div>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>