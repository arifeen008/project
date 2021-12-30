<footer class="text-lg-start py-2" style="background-color: #25d321;">
	<div class="container">
		<div class="row">
			<div class="col-md-6 d-flex justify-content-start">
				<div class="footer-copyright text-center">© 2019 Copyright:
					<a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
				</div>
			</div>
			<div class="col-md-6 d-flex justify-content-end">
				<div class="col-md-6 d-flex justify-content-end">
					<button class="btn btn-outline text-light" data-mdb-toggle="modal" data-mdb-target="#exampleModal"><i class="fas fa-building me-3"></i>เข้าสู่ระบบเจ้าหน้าที่</button>
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog mx-0 mx-sm-auto">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #25d321;">
				<h5 class="modal-title text-light" id="exampleModalLabel">เข้าสู่ระบบเจ้าหน้าที่</h5>
				<button type="button" class="close" data-mdb-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body p-4">
				<form action="<?php echo site_url('officer/login_officer') ?>" method="post">
					<div class="form-outline mb-4">
						<input type="text" id="form2Example1" name="user_id" class="form-control" />
						<label class="form-label" for="form2Example1">Email address</label>
					</div>
					<div class="form-outline mb-4">
						<input type="password" id="form2Example2" name="password" class="form-control" />
						<label class="form-label" for="form2Example2">Password</label>
					</div>
					<div class="row mb-4">
						<div class="col d-flex justify-content-center">
							<div class="form-check">
								<input class="form-check-input bg-success" type="checkbox" value="" id="form2Example3" checked />
								<label class="form-check-label" for="form2Example3">
									จดจำฉัน
								</label>
							</div>
						</div>
						<div class="col">
							<a href="#!">ลืมรหัสผ่าน</a>
						</div>
					</div>
					<button type="submit" class="btn btn-success btn-block mb-4">
						เข้าสู่ระบบ
					</button>
					<div class="text-center">
						<p>ลืมสมัคร ? <a href="#!">สมัครสมาชิกเจ้าหน้าที่</a></p>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


