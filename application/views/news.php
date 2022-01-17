<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>

<div class="bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');">
	<div class="container my-3">
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
</div>
