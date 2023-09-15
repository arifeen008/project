<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php"); ?>
<style>
	.transaction {
		display: -webkit-box ;
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
				<a href="<?php echo site_url('index/news/' . $row->news_number) ?>" class="card hover-shadow my-2">
					<img src="<?php echo base_url('uploads/') ?><?= $row->picture_name ?>" width="auto" height="150px" class="card-img-top" />
					<div class="card-body">
						<p style="font-family: 'Kanit';" class="card-title text-dark transaction"><?= $row->title ?></p>
						<figcaption class="blockquote-footer mt-1">
							<?= thaidate('j M Y ', strtotime($row->dateupload)) ?>
						</figcaption>
					</div>
				</a>
			</div>
		<?php } ?>
	</div>
	<p><?php echo $links; ?></p>
</div>
