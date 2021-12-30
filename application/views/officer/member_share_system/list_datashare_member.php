<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h1 class="card-title border-bottom">รายชื่อสมาชิกที่ค้นหา</h1>
			<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true" data-mdb-fixed-header="true" data-mdb-bordered="true">
				<table>
					<thead>
						<tr align="center">
							<th>ลำดับ</ะ>
							<th>ชื่อ</th>
							<th>นามสกุล</th>
							<th>สาขา</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1 ?>
						<?php foreach ($result->result() as $row) { ?>
							<tr align="center">
								<td><?= $i++ ?></td>
								<td><?= $row->FNAME ?></td>
								<td><?= $row->LNAME ?></td>
								<td><?= $row->BR_NAME; ?></td>
								<td><a href="<?php echo site_url('officer/datashare_member/' . $row->MEM_ID . '/' . $row->BR_NO) ?>" class="btn btn-success"><i class="fas fa-eye"></i></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
