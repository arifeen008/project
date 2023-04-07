<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
	<div class="container pt-4 pt-lg-5">
		<div class="card my-3" style="font-family: 'Sarabun';">
			<div class="card-body text-dark">
				<h3 class="card-title">ผลการดำเนินงานประจำปี</h3>
				<div class="datatable" data-mdb-borderless="true" data-mdb-sm="true">
					<table>
						<thead>
							<tr>
								<th>ชื่อเอกสาร</th>
								<th>วันที่</th>
								<th>ดาวน์โหลด</th>
								<!-- <th>ดาวน์โหลด</th> -->
							</tr>
						</thead>
						<tbody>
							<?php foreach ($result as $row) { ?>
								<tr>
									<td><?= $row->document_name ?></td>
									<td><?= thaidate('j M Y ', strtotime($row->date)) ?></td>
									<td><a href="<?php echo base_url('file/performance/' . $row->file_name); ?>" target="_blank" class="btn btn-outline-success" data-mdb-ripple-color="success">download</td>
									<!-- <td><a href="<?php echo site_url('officer/delete_document/' . $row->performance_id) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td> -->
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>