<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<div class="d-flex flex-row-reverse"><a href="<?php echo site_url('officer/upload_document') ?>" class="btn btn-success"><i class="fas fa-plus me-2"></i>เพิ่มเอกสาร</a></div>
			<h5 class="card-title border-bottom">ผลการดำเนินงานประจำปี</h5>
			<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
				<table>
					<thead>
						<tr>
							<th>ชื่อเอกสาร</th>
							<th>ไฟล์</th>
							<!-- <th>วันที่</th> -->
							<!-- <th>ลบ</th> -->
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $row) { ?>
							<tr>
								<td><?= $row->document_name ?></td>
								<td><a href="<?php echo site_url('officer/download_document/' . $row->performance_id) ?>" class="btn btn-primary"><i class="fas fa-file-download"></i></a></td>
								<!-- <td><?= thaidate('j M Y ', strtotime($row->date)) ?></td> -->
								<!-- <td><a href="<?php echo site_url('officer/delete_document/' . $row->performance_id) ?>" class="btn btn-danger">ลบ</a></td> -->
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>