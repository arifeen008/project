<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h5 class="card-title border-bottom">รายการข่าวสาร</h5>
			<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
				<table>
					<thead>
						<tr>
							<th>รหัสข่าว</th>
							<th>หัวข้อ</th>
							<th>ประเภทข่าว</th>
							<th>เวลาอัพโหลด</th>
							<th>แก้ไข</th>
							<th>ลบ</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result->result() as $row) { ?>
							<tr>
								<td><?= $row->newsnumber ?></td>
								<td><?= $row->title  ?></td>
								<td><?= $row->news_typename  ?></td>
								<td><?= thaidate('j M Y ', strtotime($row->dateupload))   ?></td>
								<td><a href="<?php echo site_url('officer/editnews/' . $row->newsnumber) ?>" class="btn btn-warning me-3"><i class="fas fa-pen"></i></a></td>
								<td><a href="<?php echo site_url('officer/deletenews/' . $row->newsnumber) ?>" class="btn btn-danger me-3"><i class="far fa-trash-alt"></i></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
