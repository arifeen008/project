<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h1 class="card-title border-bottom">รายงานสมาชิกหุ้น</h1>
			<p class="text-right"><a href="<?php echo site_url('officer/reportexcel_member_allbranch/' . $variable['start'] . '/' . $variable['to']) ?>" class="btn btn-success mb-2"><i class="fas fa-file-download"></i>&nbsp;&nbsp;&nbsp;ดูไฟล์ Excel</a></p>
			<div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true" data-mdb-fixed-header="true" data-mdb-bordered="true">
				<table>
					<thead>
						<tr>
							<th>สาขา</th>
							<th>ชื่อ</td>
							<th>สกุล</ttd>
							<th>จำนวนเงินหุ้น</th>
							<th>จำนวนเงินฝาก</th>
							<th>เบอร์โทร</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result->result() as $row) { ?>
							<tr>
								<td><?= $row->BR_NAME ?></td>
								<td><?= $row->FNAME ?></td>
								<td><?= $row->LNAME ?></td>
								<td><?= number_format($row->SHR_SUM_BTH, 2) ?></td>
								<td><?= number_format($row->BALANCE, 2) ?></td>
								<td><?= $row->MOBILE_TEL ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
