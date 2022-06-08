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
<div class="container my-2">
	
	<div class="row">
	<p style="font-family: 'Chonburi', cursive;color:black;font-size:30px;" class="mt-2"><?php echo lang('vacant') ?></p>
		<?php foreach ($result as $row) { ?>
			<div class="col-md-3 mb-2">
				<a href="<?php echo site_url('index/vacant/' . $row->asset_number) ?>" class="card hover-shadow my-2">
					<img src="<?php echo base_url('uploads/') ?><?= $row->picture_name ?>" width="auto" height="200px" class="card-img-top" />
					<div class="card-body">
						<h5 style="font-family: 'Sarabun'" class="card-title text-dark transaction"><?= $row->title ?></h5>
						<p class="card-text">
							<small class="text-muted"><?= thaidate('j M Y ', strtotime($row->date)) ?></small>
						</p>
					</div>
				</a>
			</div>
		<?php } ?>
	</div>
</div>

