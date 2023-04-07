<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
	<div class="container pt-4 pt-lg-5">
		<div class="card my-3" style="font-family: 'Sarabun';">
			<div class="card-body">
				<h2 class="card-title text-dark">ประกาศสำนักงานใหญ่</h2>
				<table class="table table-hover table-borderless">
					<thead>
						<tr>
							<th class="text-center">ประกาศ</th>
							<th class="text-center">วันที่</th>
							<th class="text-center">ดาวน์โหลด</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($ho as $row) { ?>
							<tr>
								<td><?= $row->title ?></td>
								<td class="text-center"><?= thaidate('j M Y ', strtotime($row->date))  ?></td>
								<td><a href="<?php echo base_url('file/inside_publish/' . $row->uploadfile); ?>" target="_blank" class="btn btn-outline-success" data-mdb-ripple-color="success">download</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>