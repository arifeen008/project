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
	<p style="font-family: 'Kanit';" class="text-dark mt-2 h2">ข่าวสาร/กิจกรรมความเคลื่อนไหว</p>
		<?php foreach ($result->result() as $row) { ?>
			<div class="col-md-3 mb-2">
				<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>" class="card hover-shadow my-2">
					<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" width="auto" height="150px" class="card-img-top" />
					<div class="card-body">
						<p style="font-family: 'Kanit';" class="card-title text-dark transaction"><?= $row->title ?></p>
						<p class="card-text">
							<small class="text-dark"><?= thaidate('j M Y ', strtotime($row->dateupload)) ?></small>
						</p>
					</div>
				</a>
			</div>
		<?php } ?>
	</div>
</div>
