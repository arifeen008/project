<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
$i = 1;
?>
<div class="col-lg-9">
	<div class="card mt-4">
		<div class="card-body">
			<h4 class="card-title text-dark">รายการสินเชื่อ</h4>
			<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
				<table>
					<thead>
						<tr>
							<th>เลขที่สัญญา</th>
							<th>ชื่อสัญญา</th>
							<th>สาขา</th>
							<th>ปี</th>
							<th>ไฟล์ดาวโหลด</th>
							<th>ผู้อัพโหลด</th>
							<th>วันที่อัพโหลด</th>
							<th>ลบ</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $row) { ?>
							<tr>
								<td><?= $row->fulllcont_id ?></td>
								<td><?= $row->fullprecis_type  ?></td>
								<td><?= $row->precis_branch  ?></td>
								<td><?= $row->year   ?></td>
								<td><a href="<?php echo base_url($row->path . '/' . $row->file_name) ?>" target="_blank" class="btn btn-primary"><i class="fas fa-file-download"></i></a></td>
								<td><?= $row->name_upload  ?></td>
								<td><?= thaidate('j M Y ', strtotime($row->date_Upload))  ?></td>
								<td>
									<button type="button" class="btn btn-danger" data-mdb-toggle="modal" data-mdb-target="#exampleModal<?php echo $i ?>">
										<i class="fas fa-dumpster"></i>
									</button>
									<div class="modal top fade" id="exampleModal<?php echo $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="false" data-mdb-keyboard="false">
										<div class="modal-dialog modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Are you sure ?</h5>
													<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">คุณต้องการที่จะลบสินเชื่อ <?php echo $row->fulllcont_id ?> นี้หรือไม่</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-warning" data-mdb-dismiss="modal">ยกเลิก</button>
													<a href="<?php echo site_url('officer/delete_credit/' . $row->credit_id) ?>" class="btn btn-danger">ลบ</a>
												</div>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<?php $i++; ?>
						<?php  } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>