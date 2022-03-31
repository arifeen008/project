<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h5 class="card-title border-bottom">นำเข้าข่าวภายใน</h5>
			<form action="<?php echo site_url('officer/upload_internalfile') ?>" method="post" enctype="multipart/form-data" class="row g-3">
				<div class="col-md-4">
					<div class="form-outline">
						<input type="text" name="title" id="form12" class="form-control" required />
						<label class="form-label" for="form12">หัวข้อ</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-outline">
						<input type="date" class="form-control" name="date" id="exampleDatepicker11" required />
						<label for="exampleDatepicker11" class="form-label">เลือกวันที่</label>
					</div>
				</div>
				<div class="col-md-4">
					<select class="select" name="type_announcement">
						<option value="1">ฝ่ายบุคคล</option>
						<option value="2">ฝ่ายสำนักงานใหญ่</option>
					</select>
					<label class="form-label select-label">เลือกประเภทที่จะประกาศ</label>
				</div>
				<div class="col-md-12">
					<label for="formFileMultiple" class="form-label">อัพโหลดไฟล์</label>
					<input class="form-control form-control-lg" type="file" name="uploadFile" id="formFileMultiple" />
				</div>
				<div class="col-12">
					<button type="submit" class="btn btn-success">อัพโหลด</button>
					<a href="<?php echo site_url('officer/internal_announcement') ?>" class="btn btn-danger">ยกเลิก</a>
				</div>
			</form>
		</div>
	</div>
</div>
