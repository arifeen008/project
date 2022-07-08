<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
	<div class="container pt-4 pt-lg-5">
		<div class="card my-3">
			<div class="card-body text-dark">
				<div class="d-flex flex-row-reverse"><a href="<?php echo site_url('officer/upload_news') ?>" class="btn btn-success"><i class="fas fa-plus me-2"></i>เพิ่มข่าวสาร</a></div>
				<h5 class="card-title pb-2 border-bottom">รายการข่าวสาร</h5>
				<div class="datatable" data-mdb-bordered="true" data-mdb-striped="true">
					<table>
						<thead>
							<tr>
								<th data-mdb-sort="false">หัวข้อ</th>
								<th data-mdb-sort="false">ประเภทข่าว</th>
								<th data-mdb-sort="false">เวลาอัพโหลด</th>
								<th data-mdb-sort="false">แก้ไข</th>
								<th data-mdb-sort="false">ลบ</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($result->result() as $row) { ?>
								<tr>
									<td><?= $row->title  ?></td>
									<td><?= $row->news_typename  ?></td>
									<td><?= thaidate('j M Y ', strtotime($row->dateupload))   ?></td>
									<td><a href="<?php echo site_url('officer/edit_news/' . $row->newsnumber) ?>" class="btn btn-warning me-3"><i class="fas fa-pen"></i></a></td>
									<td><a href="<?php echo site_url('officer/delete_news/' . $row->newsnumber) ?>" class="btn btn-danger me-3"><i class="far fa-trash-alt"></i></a></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>