<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h5 class="card-title border-bottom">อัพโหลดข่าวสาร</h5>
			<form action="<?php echo site_url('officer/uploadnews') ?>" method="post" enctype="multipart/form-data" class="row g-3">
				<div class="col-md-6">
					<div class="form-outline">
						<input type="text" name="title" id="form12" class="form-control" required />
						<label class="form-label" for="form12">หัวข้อ</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-outline">
						<input type="date" class="form-control" name="date" id="exampleDatepicker11" required/>
						<!-- <label for="exampleDatepicker11" class="form-label">Select a date</label> -->
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-outline">
						<textarea class="form-control" name="description" id="textAreaExample" rows="4" required></textarea>
						<label class="form-label" for="textAreaExample">รายละเอียด</label>
					</div>
				</div>
				<div class="col-md-12">
					<label for="formFileMultiple" class="form-label">อัพโหลดไฟล์ภาพ</label>
					<input class="form-control form-control-lg" type="file" name="picture" id="formFileMultiple" multiple />
				</div>
				<div class="col-12">
					<button type="submit" class="btn btn-success">อัพโหลด</button>
				</div>
			</form>
		</div>
	</div>
</div>
