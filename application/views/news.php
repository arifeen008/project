<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="container my-3">
	<div class="row">
		<div class="col-9">
			<div class="card">
				<div class="card-body">
					<p style="font-family: 'Chonburi', cursive;color:black;" class="text-center my-2 h3"><?php echo $data->title ?></p>
					<div class="lightbox" data-mdb-zoom-level="0.25">
						<div class="row">
							<?php foreach ($picture->result() as $row) { ?>
								<div class="col-lg-4">
									<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" data-mdb-img="<?php echo base_url('uploads') ?>/<?= $row->picturename ?>" width="auto" height="250px" class="w-100 shadow-1-strong rounded mb-2" />
								</div>
							<?php } ?>
						</div>
					</div>
					<p style="font-family: 'Sarabun',Extra-light 200;color:black;" class="my-2"><?php echo $data->description ?></p>
					<small class="text-mute"><?php echo thaidate('j F Y ', strtotime($data->dateupload))  ?></small>
				</div>
			</div>
		</div>
		<div class="col-3">
			<?php foreach ($side_data->result() as $row) { ?>
				<div class="col-12">
					<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>" class="card my-2" style="width: 18rem;">
						<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" width="auto" height="150px" class="card-img-top" />
						<div class="card-body">
							<h5 style="font-family: 'Sarabun',Extra-light 200;color:black;" class="text-truncate"><?= $row->title ?></h5>
							<p style="font-family: 'Sarabun',Extra-light 200;color:black;max-width: 300px" class="card-text text-dark text-truncate"><?= $row->description ?></p>
						</div>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
