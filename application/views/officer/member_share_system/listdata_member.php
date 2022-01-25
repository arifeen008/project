<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h1 class="card-title border-bottom">รายชื่อสมาชิกที่ค้นหา</h1>
			<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
				<table>
					<thead>
						<tr>
							<th>เลขที่สมาชิก</th>
							<th>ชื่อ</th>
							<th>นามสกุล</th>
							<th>สาขา</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1 ?>
						<?php foreach ($result->result() as $row) { ?>
							<tr>
								<td><?= $row->MEM_ID ?></td>
								<td><?= $row->FNAME ?></td>
								<td><?= $row->LNAME ?></td>
								<td><?= $row->BR_NAME; ?></td>
								<td><a href="<?php echo site_url('officer/search_data_member/' . $row->MEM_ID . '/' . $row->BR_NO) ?>" class="btn btn-info"><i class="fas fa-file-alt"></i></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
