<div class="bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/76.webp');height: 100vh;">
	<div class="container my-4">
		<form action="#" method="post">
			<div class="card">
				<p class="text-dark text-center border-bottom my-2">เปลี่ยนรหัสผ่าน</p>
				<div class="card-body">
					<div class="form-outline mb-4">
						<input type="password" id="formControlDefault" data-mdb-showcounter="true" maxlength="9" class="form-control" />
						<label class="form-label" for="formControlDefault">รหัสผ่านเก่า</label>
						<div class="form-helper"></div>
					</div>
					<div class="form-outline mb-4">
						<input type="password" id="formControlDefault" data-mdb-showcounter="true" maxlength="9" class="form-control" />
						<label class="form-label" for="formControlDefault">รหัสผ่านใหม่</label>
						<div class="form-helper"></div>
					</div>
					<div class="form-outline mb-4">
						<input type="password" id="formControlDefault" data-mdb-showcounter="true" maxlength="9" class="form-control" />
						<label class="form-label" for="formControlDefault">ยืนยันรหัสผ่านใหม่</label>
						<div class="form-helper"></div>
					</div>
					<button class="btn waves-effect waves-light" type="submit">เปลี่ยนรหัสผ่าน</button>
					<a href="<?php echo site_url('member/data_member') ?>" class="btn waves-effect waves-light" type="clear">ยกเลิก</a>
				</div>
			</div>
		</form>
	</div>
</div>
