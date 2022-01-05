<div class="col-lg-9 text-dark">
	<div class="card my-3">
		<div class="card-body">
			<h5 class="card-title">ข้อมูลสมาชิก</h5>
			<form action="<?php echo site_url('officer/listdata_member') ?>" method="post" class="row g-3">
				<div class="col-md-6">
					<div class="form-outline">
						<input type="text" name="fname" id="form12" class="form-control" />
						<label class="form-label" for="form12">ชื่อ</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-outline">
						<input type="text" name="lname" id="form12" class="form-control" />
						<label class="form-label" for="form12">นามสกุล</label>
					</div>
				</div>
				<div class="col-md-12">
					<label for="inputState" class="form-label">สาขา</label>
					<select id="inputState" class="form-select" name="branch_number">
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
					<button type="submit" class="btn btn-success"><i class="fas fa-search me-2"></i>ค้นหา</button>
				</div>
			</form>
		</div>
	</div>

	<div class="card my-3">
		<div class="card-body">
			<h5 class="card-title">ข้อมูลใบเสร็จหุ้นสมาชิก</h5>
			<form action="<?php echo site_url('officer/list_datashare_member') ?>" method="post" class="row g-3">
				<div class="col-md-12">
					<div class="form-outline">
						<input type="text" name="mem_id" id="form12" class="form-control" />
						<label class="form-label" for="form12">เลขที่สมาชิก</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-outline">
						<input type="text" name="fname" id="form12" class="form-control" />
						<label class="form-label" for="form12">ชื่อ</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-outline">
						<input type="text" name="lname" id="form12" class="form-control" />
						<label class="form-label" for="form12">นามสกุล</label>
					</div>
				</div>
				<div class="col-md-6">
					<label for="inputState" class="form-label">สาขา</label>
					<select id="inputState" class="form-select" name="branch_number">
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
					<button type="submit" class="btn btn-success"><i class="fas fa-search"></i>&nbsp;&nbsp;&nbsp;ค้นหา</button>
				</div>
			</form>
		</div>
	</div>
</div>
