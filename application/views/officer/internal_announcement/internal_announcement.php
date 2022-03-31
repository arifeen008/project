<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="my-3">
		<?php if ($level_code == 'P') { ?>
			<div class="d-flex flex-row-reverse"><a href="<?php echo site_url('officer/import_internal_declaration') ?>" class="btn btn-success"><i class="fas fa-plus me-2"></i>เพิ่มข่าวสาร</a></div>
		<?php	} ?>
		<!-- <div class="lightbox">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 my-2">
						<h5 style="font-family: 'Sarabun'" class="card-title text-center">ยุทธศาสตร์ 7 ปี สหกรณ์อิสลามษะกอฟะฮ จำกัด </h5>
						<img src="<?php echo base_url('picture/280951.jpg') ?>" data-mdb-img="<?php echo base_url('picture/280951.jpg') ?>" class="w-100 shadow-1-strong rounded" alt="ยุทธศาสตร์ 7 ปี สหกรณ์อิสลามษะกอฟะฮ จำกัด" />
					</div>
					<div class="col-md-6 my-2">
						<h5 style="font-family: 'Sarabun'" class="card-title text-center">โครงสร้างองค์กร ปี 2565</h5>
						<img src="<?php echo base_url('picture/290413.jpg') ?>" data-mdb-img="<?php echo base_url('picture/290413.jpg') ?>" class="w-100 shadow-1-strong rounded" alt="โครงสร้างองค์กรปี 2565" />
					</div>
				</div>
			</div>
		</div> -->
	</div>
	<div class="card my-3">
		<h5 class="card-title text-dark">ประกาศฝ่ายบุคคล</h5>
		<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
			<table>
				<thead>
					<tr>
						<th>ประกาศ</th>
						<th>วันที่</th>
						<th>ดาวน์โหลด</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($hr as $row) { ?>
						<tr>
							<td><?= $row->title ?></td>
							<td><?= thaidate('j M Y ', strtotime($row->date))  ?></td>
							<td><a href="<?php echo base_url('file/ประกาศภายใน/' . $row->uploadfile) ?>" target="_blank" class="btn btn-primary"><i class="fas fa-file-download"></i></a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="card my-3">
		<h5 class="card-title text-dark">ประกาศสำนักงานใหญ่</h5>
		<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
			<table>
				<thead>
					<tr>
						<th>ประกาศ</th>
						<th>วันที่</th>
						<th>ดาวน์โหลด</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($ho as $row) { ?>
						<tr>
							<td><?= $row->title ?></td>
							<td><?= thaidate('j M Y ', strtotime($row->date))  ?></td>
							<td><a href="<?php echo base_url('file/ประกาศภายใน/' . $row->uploadfile) ?>" target="_blank" class="btn btn-primary"><i class="fas fa-file-download"></i></a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
