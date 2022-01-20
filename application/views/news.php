<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="container my-3">
	<div class="row">
		<div class="col-9">
			<div class="card">
				<p class="text-dark text-center my-2 h2"><?php echo $data->title ?></p>
				<div class="card-body">
					<div class="lightbox">
						<div class="row">
							<?php foreach ($picture->result() as $row) { ?>
								<div class="col-lg-4">
									<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" data-mdb-img="<?php echo base_url('uploads') ?>/<?= $row->picturename ?>" class="w-100 shadow-1-strong my-2 rounded" />
								</div>
							<?php } ?>
						</div>
					</div>
					<p class="text-dark text-break prewrap my-2" id=""><?php echo $data->description ?></p>
					<small class="text-mute"><?php echo thaidate('j F Y ', strtotime($data->dateupload))  ?></small>
				</div>
			</div>
		</div>
		<div class="col-3">
			<?php foreach ($side_data->result() as $row) { ?>
				<div class="col-12">
					<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>" class="card my-2" style="width: 18rem;">
						<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" class="card-img-top" />
						<div class="card-body">
							<h5 class="card-title text-dark text-truncate"><?= $row->title ?></h5>
							<p class="card-text text-dark text-truncate"><?= $row->description ?></p>
						</div>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
