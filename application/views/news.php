<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<style>
	.prewrap {
		white-space: pre-wrap;
		white-space: -moz-pre-wrap;
		white-space: -pre-wrap;
		white-space: -o-pre-wrap;
		word-wrap: break-word;
	}
</style>
<div class="container my-3">
	<div class="card">
		<p class="text-dark text-center h1"><?php echo $data->title ?></p>
		<div class="card-body">
			<div class="lightbox">
				<div class="row">
					<?php foreach ($picture->result() as $row) { ?>
						<div class="col-lg-4">
							<img src="<?php echo base_url('uploads/images') ?>/<?= $row->picturename ?>" data-mdb-img="<?php echo base_url('uploads/images') ?>/<?= $row->picturename ?>" class="w-100 shadow-1-strong my-2 rounded" />
						</div>
					<?php } ?>
				</div>
			</div>
			<p class="text-dark text-break prewrap my-2" id=""><?php echo $data->description ?></p>
			<p class="text-left text-mute"><?php echo thaidate('j F Y ', strtotime($data->dateupload))  ?></p>
		</div>
	</div>
</div>
