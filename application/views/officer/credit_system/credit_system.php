<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h5 class="card-title">สอบถามยอดสินเชื่อในสมุดของบัญชี</h5>
			<form action="<?php echo site_url('officer/listcredit_member') ?>" method="post" class="row g-3">
				<div class="col-md-12">
					<div class="form-outline">
						<input type="text" name="mem_id" id="form7Example1" class="form-control" />
						<label class="form-label" for="form7Example1">เลขที่สมาชิก</label>
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
					<select class="select" name="branch_number">
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
					<label class="form-label select-label">สาขา</label>
				</div>
				<div class="col-12">
					<button type="submit" class="btn btn-success"><i class="fas fa-search me-2"></i>ค้นหา</button>
				</div>
			</form>
		</div>
	</div>
	<div class="card my-3">
		<div class="card-body">
			<h5 class="card-title">สอบถามยอดสินเชื่อที่ปิดแล้วในสมุดของบัญชี</h5>
			<form action="<?php echo site_url('officer/listclosedcredit_member') ?>" method="post" class="row g-3">
				<div class="col-md-12">
					<div class="form-outline">
						<input type="text" name="mem_id" id="form7Example1" class="form-control" />
						<label class="form-label" for="form7Example1">เลขที่สมาชิก</label>
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
					<select class="select" name="branch_number">
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
					<label class="form-label select-label">สาขา</label>
				</div>
				<div class="col-12">
					<button type="submit" class="btn btn-success"><i class="fas fa-search me-2"></i>ค้นหา</button>
				</div>
			</form>
		</div>
	</div>
</div>
