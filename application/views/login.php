<style>
	.divider:after,
	.divider:before {
		content: "";
		flex: 1;
		height: 1px;
		background: #eee;
	}

	.h-custom {
		height: calc(100% - 73px);
	}

	@media (max-width: 450px) {
		.h-custom {
			height: 100%;
		}
	}
</style>
<section class="vh-100">
	<div class="container-fluid h-custom">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-md-9 col-lg-6 col-xl-5">
				<img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid" alt="Sample image">
			</div>
			<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
				<form action="<?php echo site_url('member/login') ?>" method="post">
					<div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
						<p class="lead fw-normal mb-0 me-3">เข้าสู่ระบบ</p>
					</div>
					<div class="divider d-flex align-items-center my-4">
						<p class="text-center fw-bold mx-3 mb-0"></p>
					</div>
					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput" name="user_id" placeholder="name@example.com">
						<label for="floatingInput">อีเมล์</label>
					</div>
					<div class="form-floating">
						<input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
						<label for="floatingPassword">รหัสผ่าน</label>
					</div>
					<div class="d-flex justify-content-between align-items-center mt-3">
						<div class="form-check mb-0">
							<input class="form-check-input bg-success me-2" type="checkbox" value="" id="form2Example3" checked />
							<label class="form-check-label" for="form2Example3">
								จดจำฉัน
							</label>
						</div>
						<a href="#!" class="text-body">ลืมรหัสผ่าน</a>
					</div>
					<div class="text-center text-lg-start mt-2 pt-2">
						<button type="submit" class="btn btn-success btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem; background-color: #25d321;">Login</button>
						<p class="small fw-bold mt-2 pt-1 mb-0">ไม่มีบัญชี ? <a href="<?php echo site_url('member/register_page') ?>" class="link-danger">สมัครสมาชิก</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


