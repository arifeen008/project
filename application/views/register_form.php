<section class="vh-100" style="background-color: #ffffff;">
	<div class="container h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-lg-12 col-xl-11">
				<div class="card text-black" style="border-radius: 25px;">
					<div class="card-body p-md-5">
						<div class="row justify-content-center">
							<div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

								<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">สมัครสมาชิก</p>

								<form class="mx-1" action="<?php echo site_url('member/register') ?>" method="POST">

									<div class="d-flex flex-row align-items-center mb-4">
										<i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
										<div class="form-outline form-floating flex-fill mb-2">
											<input type="text" class="form-control" id="floatingInput" name="" placeholder="name@example.com" required>
											<label for="floatingInput">อีเมล์</label>
										</div>
									</div>

									<div class="d-flex flex-row align-items-center mb-4">
										<i class="fas fa-lock fa-lg me-3 fa-fw"></i>
										<div class="form-outline form-floating flex-fill mb-2">
											<input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
											<label for="floatingPassword">รหัสผ่าน</label>
										</div>
									</div>

									<div class="d-flex flex-row align-items-center mb-4">
										<i class="fas fa-key fa-lg me-3 fa-fw"></i>
										<div class="form-outline form-floating flex-fill mb-2">
											<input type="password" class="form-control" id="floatingPassword" name="repassword" placeholder="Password">
											<label for="floatingPassword">ยืนยันรหัสผ่าน</label>
										</div>
									</div>

									<div class="d-flex flex-row align-items-center mb-4">
										<i class="fas fa-user fa-lg me-3 fa-fw"></i>
										<div class="form-outline form-floating flex-fill mb-2">
											<input type="text" class="form-control" id="floatingInput" name="" maxlength="13" placeholder="name@example.com">
											<label for="floatingInput">เลขบัตรประชาชน</label>
										</div>
									</div>

									<div class="form-check d-flex justify-content-center mb-2">
										<input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
										<label class="form-check-label" for="form2Example3">
											ฉันยอมรับข้อความทั้งหมดใน <a href="#!">เงื่อนไขการให้บริการ</a>
										</label>
									</div>

									<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
										<button type="submit" class="btn btn-outline-success" data-mdb-ripple-color="dark">สมัครสมาชิก</button>&nbsp; &nbsp; 
										<button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark">ยกเลิก</button>
									</div>

								</form>

							</div>
							<div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

								<img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
