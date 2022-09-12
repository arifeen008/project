<style>
	.nav-pills .nav-link.active {
		background-color: #25d321;
	}
</style>
<div class="container my-3">
	<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
		<li class="nav-item" role="presentation">
			<a class="nav-link active" id="ex3-tab-1" data-mdb-toggle="tab" href="#ex3-tabs-1" role="tab" aria-controls="ex3-tabs-1" aria-selected="true">
				<b class="h6" style="font-family: 'Kanit';font-size: 16px;"><?php echo lang('founding_board') ?></b>
			</a>
		</li>
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="ex3-tab-2" data-mdb-toggle="tab" href="#ex3-tabs-2" role="tab" aria-controls="ex3-tabs-2" aria-selected="false">
				<b class="h6" style="font-family: 'Kanit';font-size: 16px;"><?php echo lang('board_of_directors') ?></b>
			</a>
		</li>
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="ex3-tab-3" data-mdb-toggle="tab" href="#ex3-tabs-3" role="tab" aria-controls="ex3-tabs-3" aria-selected="false">
				<b class="h6" style="font-family: 'Kanit';font-size: 16px;"><?php echo lang('executive') ?></b>
			</a>
		</li>
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="ex3-tab-2" data-mdb-toggle="tab" href="#ex3-tabs-4" role="tab" aria-controls="ex3-tabs-4" aria-selected="false">
				<b class="h6" style="font-family: 'Kanit';font-size: 16px;"><?php echo lang('consultant') ?></b>
			</a>
		</li>
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="ex3-tab-3" data-mdb-toggle="tab" href="#ex3-tabs-5" role="tab" aria-controls="ex3-tabs-5" aria-selected="false">
				<b class="h6" style="font-family: 'Kanit';font-size: 16px;"><?php echo lang('cooperative_house') ?></b>
			</a>
		</li>
	</ul>
	<div class="tab-content" id="ex2-content">
		<div class="tab-pane fade show active" id="ex3-tabs-1" role="tabpanel" aria-labelledby="ex3-tab-1">
			<img src="<?php echo base_url('picture\บอร์ดก่อตั้ง.jpg') ?>" style="width: 100%;">
		</div>
		<div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
			<img src="<?php echo base_url('picture\บอร์ดกรรมการ 65.jpg') ?>" style="width: 100%;">
		</div>
		<div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">
			<img src="<?php echo base_url('picture\344-A4.jpg') ?>" style="width: 100%;">
		</div>
		<div class="tab-pane fade" id="ex3-tabs-4" role="tabpanel" aria-labelledby="ex3-tab-4">
			<img src="<?php echo base_url('picture\บอร์ดที่ปรึกษา1.jpg') ?>" style="width: 100%;">
		</div>
		<div class="tab-pane fade" id="ex3-tabs-5" role="tabpanel" aria-labelledby="ex3-tab-5">
			<img src="<?php echo base_url('picture\ทำเนียบสหกรณ์.jpg') ?>" style="width: 100%;">
		</div>
	</div>
</div>