<style>
	.nav-pills .nav-link.active {
		background-color: #25d321;
	}
</style>
<div class="container my-3" data-mdb-toggle="animation" data-mdb-animation="zoom-in" data-mdb-animation-start="onLoad">
	<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
		<li class="nav-item" role="presentation">
			<a style="font-family: 'Kanit';font-size: 16px;" class="nav-link active text-dark" id="ex3-tab-1" data-mdb-toggle="pill" href="#ex3-pills-1" role="tab" aria-controls="ex3-pills-1" aria-selected="true"><?php echo lang('founding_board') ?></a>
		</li>
		<li class="nav-item" role="presentation">
			<a style="font-family: 'Kanit';font-size: 16px;" class="nav-link text-dark" id="ex3-tab-2" data-mdb-toggle="pill" href="#ex3-pills-2" role="tab" aria-controls="ex3-pills-2" aria-selected="false"><?php echo lang('board_of_directors') ?></a>
		</li>
		<li class="nav-item" role="presentation">
			<a style="font-family: 'Kanit';font-size: 16px;" class="nav-link text-dark" id="ex3-tab-3" data-mdb-toggle="pill" href="#ex3-pills-3" role="tab" aria-controls="ex3-pills-3" aria-selected="false"><?php echo lang('executive') ?></a>
		</li>
		<li class="nav-item" role="presentation">
			<a style="font-family: 'Kanit';font-size: 16px;" class="nav-link text-dark" id="ex3-tab-4" data-mdb-toggle="pill" href="#ex3-pills-4" role="tab" aria-controls="ex3-pills-4" aria-selected="false"><?php echo lang('consultant') ?></a>
		</li>
		<li class="nav-item" role="presentation">
			<a style="font-family: 'Kanit';font-size: 16px;" class="nav-link text-dark" id="ex3-tab-5" data-mdb-toggle="pill" href="#ex3-pills-5" role="tab" aria-controls="ex3-pills-5" aria-selected="false"><?php echo lang('cooperative_house') ?></a>
		</li>
	</ul>
	<div class="tab-content" id="ex2-content">
		<div class="tab-pane fade show active" id="ex3-pills-1" role="tabpanel" aria-labelledby="ex3-tab-1">
			<img src="<?php echo base_url('picture\บอร์ดก่อตั้ง.jpg') ?>" style="width: 100%;">
		</div>
		<div class="tab-pane fade" id="ex3-pills-2" role="tabpanel" aria-labelledby="ex3-tab-2">
			<img src="<?php echo base_url('picture\กรรมการชุดที่ 25.jpg') ?>" style="width: 100%;">
		</div>
		<div class="tab-pane fade" id="ex3-pills-3" role="tabpanel" aria-labelledby="ex3-tab-3">
			<img src="<?php echo base_url('picture\344-A4.jpg') ?>" style="width: 100%;">
		</div>
		<div class="tab-pane fade" id="ex3-pills-4" role="tabpanel" aria-labelledby="ex3-tab-4">
			<img src="<?php echo base_url('picture\บอร์ดที่ปรึกษา1.jpg') ?>" style="width: 100%;">
		</div>
		<div class="tab-pane fade" id="ex3-pills-5" role="tabpanel" aria-labelledby="ex3-tab-5">
			<img src="<?php echo base_url('picture\ทำเนียบสหกรณ์.jpg') ?>" style="width: 100%;">
		</div>
	</div>
</div>