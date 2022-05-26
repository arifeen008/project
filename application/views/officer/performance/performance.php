<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<div class="d-flex flex-row-reverse"><a href="<?php echo site_url('officer/upload_document') ?>" class="btn btn-success"><i class="fas fa-plus me-2"></i>เพิ่มเอกสาร</a></div>
			<h5 class="card-title border-bottom">ผลการดำเนินงานประจำปี</h5>
			<!-- <div class="lightbox">
				<div class="row">
					<div class="col-lg-4 my-2">
						<img src="<?php echo base_url('picture/messageImage_1643253382476.jpg') ?>" data-mdb-img="<?php echo base_url('picture/messageImage_1643253382476.jpg') ?>" class="w-100" />
					</div>
					<div class="col-lg-4 my-2">
						<img src="<?php echo base_url('picture/messageImage_1643253341557.jpg') ?>" data-mdb-img="<?php echo base_url('picture/messageImage_1643253341557.jpg') ?>" class="w-100" />
					</div>
					<div class="col-lg-4 my-2">
						<img src="<?php echo base_url('picture/messageImage_1643253352261.jpg') ?>" data-mdb-img="<?php echo base_url('picture/messageImage_1643253352261.jpg') ?>" class="w-100" />
					</div>
					<div class="col-lg-4 my-2">
						<img src="<?php echo base_url('picture/messageImage_1643253364924.jpg') ?>" data-mdb-img="<?php echo base_url('picture/messageImage_1643253364924.jpg') ?>" class="w-100" />
					</div>
					<div class="col-lg-4 my-2">
						<img src="<?php echo base_url('picture/messageImage_1643253626653.jpg') ?>" data-mdb-img="<?php echo base_url('picture/messageImage_1643253626653.jpg') ?>" class="w-100" />
					</div>
				</div>
			</div> -->
			<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
				<table>
					<thead>
						<tr>
							<th>ชื่อเอกสาร</th>
							<th>ไฟล์</th>
							<th>วันที่</th>
							<th>ลบ</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $row) { ?>
							<tr>
								<td><?= $row->document_name ?></td>
								<td><a href="<?php echo base_url($row->path . $row->file_name) ?>" class="btn btn-primary"><i class="fas fa-file-download"></i></a></td>
								<td><?= thaidate('j M Y ', strtotime($row->date)) ?></td>
								<td><a href="<?php echo site_url('officer/delete_document/' . $row->performance_id) ?>" class="btn btn-danger">ลบ</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>