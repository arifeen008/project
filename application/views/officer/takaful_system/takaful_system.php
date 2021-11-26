<div class="col-lg-9">
	<br>
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">รายละเอียดสมาชิกกองทุน</h5>
			<form action="<?php echo site_url('officer/takaful_member') ?>" method="post" class="row g-3">
				<div class="col-md-6">
					<label class="form-label">เลขที่สมาชิก</label>
					<input class="form-control" type="text" name="mem_id" required>
				</div>
				<div class="col-md-6">
					<label for="inputState" class="form-label">สาขา</label>
					<select class="form-select" name="branch_number">
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
					<button type="submit" class="btn btn-success mb-2"><i class="fas fa-search"></i>&nbsp;&nbsp;&nbsp;ค้นหา</button>
				</div>
			</form>
		</div>


	</div>
</div>
