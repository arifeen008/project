<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>

<div class="container my-2">
	
	<div class="row">
	<p style="font-family: 'Chonburi', cursive;color:black;font-size:30px;" class="mt-2">ข่าวสาร/กิจกรรมความเคลื่อนไหว</p>
		<?php foreach ($result->result() as $row) { ?>
			<div class="col-md-3 mb-2">
				<a href="<?php echo site_url('index/news/' . $row->newsnumber) ?>" class="card my-2">
					<img src="<?php echo base_url('uploads/') ?><?= $row->picturename ?>" width="auto" height="250px" class="card-img-top" />
					<div class="card-body">
						<h5 class="card-title text-dark text-truncate"><?= $row->title ?></h5>
						<p class="card-text text-dark text-truncate">
							<?= $row->description ?>
						</p>
						<p class="card-text">
							<small class="text-muted"><?= thaidate('j M Y ', strtotime($row->dateupload)) ?></small>
						</p>
					</div>
				</a>
			</div>
		<?php } ?>
	</div>
</div>
