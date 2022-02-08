<img src="<?php echo base_url('picture/cover-web.jpg') ?>" class="mb-2" style="width: 100%;">
<style>
	.nav-pills .nav-link.active {
		background-color: #25d321;
	}
</style>
<div class="container my-2">
	<div class="row">
		<div class="col-3">
			<div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link<?php echo ((idate('m') == "1") ? " active" : "") ?>" data-mdb-toggle="pill" href="#v-pills-1" role="tab" aria-controls="1" aria-selected="<?php echo ((idate('m') == "1") ? "true" : "false") ?>" style="font-family: 'Sarabun', cursive;font-size: 18px;">มกราคม</a>
				<a class="nav-link<?php echo ((idate('m') == "2") ? " active" : "") ?>" data-mdb-toggle="pill" href="#v-pills-2" role="tab" aria-controls="2" aria-selected="<?php echo ((idate('m') == "2") ? "true" : "false") ?>" style="font-family: 'Sarabun', cursive;font-size: 18px;">กุมภาพันธ์</a>
				<a class="nav-link<?php echo ((idate('m') == "3") ? " active" : "") ?>" data-mdb-toggle="pill" href="#v-pills-3" role="tab" aria-controls="3" aria-selected="<?php echo ((idate('m') == "3") ? "true" : "false") ?>" style="font-family: 'Sarabun', cursive;font-size: 18px;">มีนาคม </a>
				<a class="nav-link<?php echo ((idate('m') == "4") ? " active" : "") ?>" data-mdb-toggle="pill" href="#v-pills-4" role="tab" aria-controls="4" aria-selected="<?php echo ((idate('m') == "4") ? "true" : "false") ?>" style="font-family: 'Sarabun', cursive;font-size: 18px;">เมษายน</a>
				<a class="nav-link<?php echo ((idate('m') == "5") ? " active" : "") ?>" data-mdb-toggle="pill" href="#v-pills-5" role="tab" aria-controls="5" aria-selected="<?php echo ((idate('m') == "5") ? "true" : "false") ?>" style="font-family: 'Sarabun', cursive;font-size: 18px;">พฤษภาคม</a>
				<a class="nav-link<?php echo ((idate('m') == "6") ? " active" : "") ?>" data-mdb-toggle="pill" href="#v-pills-6" role="tab" aria-controls="6" aria-selected="<?php echo ((idate('m') == "6") ? "true" : "false") ?>" style="font-family: 'Sarabun', cursive;font-size: 18px;">มิถุนายน</a>
				<a class="nav-link<?php echo ((idate('m') == "7") ? " active" : "") ?>" data-mdb-toggle="pill" href="#v-pills-7" role="tab" aria-controls="7" aria-selected="<?php echo ((idate('m') == "7") ? "true" : "false") ?>" style="font-family: 'Sarabun', cursive;font-size: 18px;">กรกฎาคม</a>
				<a class="nav-link<?php echo ((idate('m') == "8") ? " active" : "") ?>" data-mdb-toggle="pill" href="#v-pills-8" role="tab" aria-controls="8" aria-selected="<?php echo ((idate('m') == "8") ? "true" : "false") ?>" style="font-family: 'Sarabun', cursive;font-size: 18px;">สิงหาคม</a>
				<a class="nav-link<?php echo ((idate('m') == "9") ? " active" : "") ?>" data-mdb-toggle="pill" href="#v-pills-9" role="tab" aria-controls="9" aria-selected="<?php echo ((idate('m') == "9") ? "true" : "false") ?>" style="font-family: 'Sarabun', cursive;font-size: 18px;">กันยายน</a>
				<a class="nav-link<?php echo ((idate('m') == "10") ? " active" : "") ?>" data-mdb-toggle="pill" href="#v-pills-10" role="tab" aria-controls="10" aria-selected="<?php echo ((idate('m') == "10") ? "true" : "false") ?>" style="font-family: 'Sarabun', cursive;font-size: 18px;">ตุลาคม</a>
				<a class="nav-link<?php echo ((idate('m') == "11") ? " active" : "") ?>" data-mdb-toggle="pill" href="#v-pills-11" role="tab" aria-controls="11" aria-selected="<?php echo ((idate('m') == "11") ? "true" : "false") ?>" style="font-family: 'Sarabun', cursive;font-size: 18px;">พฤศจิกายน</a>
				<a class="nav-link<?php echo ((idate('m') == "12") ? " active" : "") ?>" data-mdb-toggle="pill" href="#v-pills-12" role="tab" aria-controls="12" aria-selected="<?php echo ((idate('m') == "12") ? "true" : "false") ?>" style="font-family: 'Sarabun', cursive;font-size: 18px;">ธันวาคม</a>
			</div>
		</div>
		<div class="col-9">
			<div class="tab-content" id="v-pills-tabContent">
				<div class="tab-pane fade <?php echo ((idate('m') == "1") ? "show active" : "") ?>" id="v-pills-1" role="tabpanel" aria-labelledby="1">
					<img src="<?php echo base_url('picture/cal_m01.jpg') ?>" class="mb-2" style="width: 100%;">
				</div>
				<div class="tab-pane fade <?php echo ((idate('m') == "2") ? "show active" : "") ?>" id="v-pills-2" role="tabpanel" aria-labelledby="2">
					<img src="<?php echo base_url('picture/cal_m02.jpg') ?>" class="mb-2" style="width: 100%;">
				</div>
				<div class="tab-pane fade <?php echo ((idate('m') == "3") ? "show active" : "") ?>" id="v-pills-3" role="tabpanel" aria-labelledby="3">
					<img src="<?php echo base_url('picture/cal_m03.jpg') ?>" class="mb-2" style="width: 100%;">
				</div>
				<div class="tab-pane fade <?php echo ((idate('m') == "4") ? "show active" : "") ?>" id="v-pills-4" role="tabpanel" aria-labelledby="4">
					<img src="<?php echo base_url('picture/cal_m04.jpg') ?>" class="mb-2" style="width: 100%;">
				</div>
				<div class="tab-pane fade <?php echo ((idate('m') == "5") ? "show active" : "") ?>" id="v-pills-5" role="tabpanel" aria-labelledby="5">
					<img src="<?php echo base_url('picture/cal_m05.jpg') ?>" class="mb-2" style="width: 100%;">
				</div>
				<div class="tab-pane fade <?php echo ((idate('m') == "6") ? "show active" : "") ?>" id="v-pills-6" role="tabpanel" aria-labelledby="6">
					<img src="<?php echo base_url('picture/cal_m06.jpg') ?>" class="mb-2" style="width: 100%;">
				</div>
				<div class="tab-pane fade <?php echo ((idate('m') == "7") ? "show active" : "") ?>" id="v-pills-7" role="tabpanel" aria-labelledby="7">
					<img src="<?php echo base_url('picture/cal_m07.jpg') ?>" class="mb-2" style="width: 100%;">
				</div>
				<div class="tab-pane fade <?php echo ((idate('m') == "8") ? "show active" : "") ?>" id="v-pills-8" role="tabpanel" aria-labelledby="8">
					<img src="<?php echo base_url('picture/cal_m08.jpg') ?>" class="mb-2" style="width: 100%;">
				</div>
				<div class="tab-pane fade <?php echo ((idate('m') == "9") ? "show active" : "") ?>" id="v-pills-9" role="tabpanel" aria-labelledby="9">
					<img src="<?php echo base_url('picture/cal_m09.jpg') ?>" class="mb-2" style="width: 100%;">
				</div>
				<div class="tab-pane fade <?php echo ((idate('m') == "10") ? "show active" : "") ?>" id="v-pills-10" role="tabpanel" aria-labelledby="10">
					<img src="<?php echo base_url('picture/cal_m10.jpg') ?>" class="mb-2" style="width: 100%;">
				</div>
				<div class="tab-pane fade <?php echo ((idate('m') == "11") ? "show active" : "") ?>" id="v-pills-11" role="tabpanel" aria-labelledby="11">
					<img src="<?php echo base_url('picture/cal_m11.jpg') ?>" class="mb-2" style="width: 100%;">
				</div>
				<div class="tab-pane fade <?php echo ((idate('m') == "12") ? "show active" : "") ?>" id="v-pills-12" role="tabpanel" aria-labelledby="12">
					<img src="<?php echo base_url('picture/cal_m12.jpg') ?>" class="mb-2" style="width: 100%;">
				</div>
			</div>
		</div>
	</div>
</div>
