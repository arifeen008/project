<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h5 class="card-title border-bottom">อัพโหลดข่าวสาร</h5>
			<form action="<?php echo site_url('officer/updatenews') ?>" method="post" class="row g-3">
				<div class="col-md-6">
					<div class="form-outline">
						<input type="text" name="title" id="form12" value="<?php echo $title ?>" class="form-control" />
						<label class="form-label" for="form12">หัวข้อ</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-outline">
						<input type="date" class="form-control" name="date" value="<?php echo $dateupload ?>" id="exampleDatepicker11" />
						<label for="exampleDatepicker11" class="form-label">เลือกวันที่</label>
					</div>
				</div>
				<input type="hidden" class="form-control" name="newsnumber" value="<?php echo $newsnumber ?>" />
				<div class="col-md-12">
					<label class="form-label" for="textArea">รายละเอียด :</label>
					<div class="form-outline">
						<textarea class="form-control" name="description" id="detail" rows="4"><?php echo $description ?></textarea>

					</div>
				</div>
				<div class="col-12">
					<button type="submit" value="upload" class="btn btn-success">ตกลง</button>
					<a href="<?php echo site_url('officer/uploadnews_system')?>" class="btn btn-danger">ยกเลิก</a>
				</div>
			</form>
		</div>
	</div>
</div>
