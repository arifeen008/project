<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
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
			</tr>
		</thead>
		<tbody>
			<?php foreach ($result as $row) { ?>
				<tr>
					<td><?= $row->fulllcont_id ?></td>
					<td><?= $row->fullprecis_type  ?></td>
					<td><?= $row->precis_branch  ?></td>
					<td><?= $row->year   ?></td>
					<td><a href="<?php echo base_url($row->path . '/' . $row->file_name) ?>" target="_blank" class="btn btn-primary" ><i class="fas fa-file-download"></i></a></td>
					<td><?= $row->name_upload  ?></td>
					<td><?= thaidate('j M Y ', strtotime($row->date_Upload))  ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>