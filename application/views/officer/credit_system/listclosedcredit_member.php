<div class="col-lg-9">
	<div class="col-12">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1>ผลการค้นหา</h1>
		</div>
		<div class="col">
			<table class="table table-borderless table-hover" id="myTable">
				<thead>
					<tr align="center">
						<th>ที่</th>
						<th>รหัสสมาชิก</th>
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
							<td><?= $row->MEM_ID ?></td>
							<td><?= $row->FNAME ?></td>
							<td><?= $row->LNAME ?></td>
							<td><?= $row->BR_NAME; ?></td>
							<td><a href="<?php echo site_url('officer/closed_credit_officer/' . $row->MEM_ID . '/' . $row->BR_NO) ?>" class="btn btn-success"><i class="fas fa-eye"></i></a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
