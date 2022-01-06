<div class="col-lg-9 my-3">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">รายละเอียดสมาชิกกองทุน</h5>
			<form action="<?php echo site_url('officer/takaful_member') ?>" method="post" class="row g-3">
				<div class="col-md-6">
					<div class="form-outline">
						<input type="text" name="mem_id" id="form7Example1" class="form-control" />
						<label class="form-label" for="form7Example1">เลขที่สมาชิก</label>
					</div>
				</div>
				<div class="col-md-6">
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
