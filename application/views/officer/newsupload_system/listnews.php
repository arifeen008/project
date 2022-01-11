<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h5 class="card-title border-bottom">รายการข่าวสาร</h5>
			<div class="d-flex flex-row-reverse"><a href="<?php echo site_url('officer/uploadnews_system') ?>" class="btn btn-success"><i class="fas fa-plus me-2"></i>เพิ่มข่าวสาร</a></div>
			<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
				<table>
					<thead>
						<tr>
							<th>รหัสข่าว</th>
							<th>หัวข้อ</th>
							<th>รายละเอียด</th>
							<th>เวลาอัพโหลด</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result->result() as $row) { ?>
							<tr>
								<td><?= $row->newsnumber ?></td>
								<td><?= $row->title  ?></td>
								<td><?= $row->description  ?></td>
								<td><?= thaidate('j M Y ', strtotime($row->dateupload))   ?></td>
								<td><a href="<?php echo site_url('officer/deletenews/' . $row->newsnumber) ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
