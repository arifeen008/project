<div class="col-lg-9">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">เงินฝากพนักงานประจำวัน</h5>
			<form action="<?php echo site_url('officer/depositreport_summary') ?>" method="post" class="row g-3">
				<div class="col-md-6">
					<div class="form-outline datepicker">
						<input type="text" class="form-control datepicker" name="startdate" id="exampleDatepickerStart" />
						<label for="exampleDatepickerStart" class="form-label">จาก</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-outline datepicker">
						<input type="text" class="form-control datepicker" name="enddate" id="exampleDatepickerEnd" />
						<label for="exampleDatepickerEnd" class="form-label">ถึง</label>
					</div>
				</div>
				<div class="col-12">
					<button type="submit" class="btn btn-success mb-2"><i class="far fa-eye me-2"></i>ดูข้อมูล</button>
				</div>
			</form>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<h5 class="card-title">เงินฝากในบัญชีสมาชิก</h5>
			<form action="<?php echo site_url('officer/list_deposit_member') ?>" method="post" class="row g-3">
				<div class="col-md-6">
					<div class="form-outline">
						<input type="text" name="account_number" id="form7Example1" class="form-control" />
						<label class="form-label" for="form7Example1">เลขบัญชี</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-outline">
						<input type="text" name="mem_id" id="form7Example1" class="form-control" />
						<label class="form-label" for="form7Example1">เลขสมาชิก</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-outline">
						<input type="text" name="fname" id="form7Example1" class="form-control" />
						<label class="form-label" for="form7Example1">ชื่อ</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-outline">
						<input type="text" name="lname" id="form7Example1" class="form-control" />
						<label class="form-label" for="form7Example1">นามสกุล</label>
					</div>
				</div>
				<div class="col-md-12">
					<label class="form-label select-label" for="exampleFormControlSelect1">สาขา</label>
					<select class="form-control" id="exampleFormControlSelect1" name="branch_number">
						<option value="000">สาขาสำนักงานใหญ่</option>
						<option value="001">สาขากระบี่</option>
						<option value="002">สาขาคลองยาง</option>
						<option value="003">สาขาอ่าวลึก</option>
						<option value="004">สาขากาญจนดิษฐ์</option>
						<option value="005">สาขาคลองท่อม</option>
						<option value="006">สาขาอ่าวนาง</option>
						<option value="007">สาขาห้วยลึก</option>
						<option value="008">สาขาเกาะลันตา</option>
					</select>
				</div>

				<div class="col-12">
					<button type="submit" class="btn btn-success mb-2"><i class="fas fa-search me-2"></i>ค้นหา</button>
				</div>
			</form>
		</div>
	</div>
</div>
