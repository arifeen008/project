<!-- <footer class="text-center text-lg-start mt-2" style="background-color: #25d321;">
	<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
		<div class="me-5 d-none d-lg-block">
			<span></span>
		</div>
	</section>
	<section class="">
		<div class="container text-center text-md-start mt-5">
			<div class="row">
				<div class="col">
					<h5 class="text-dark fw-bold">
						<i class="fas fa-star me-4"></i>ระดมทุน หนุนธุรกิจ นำชีวิต พ้นดอกเบี้ย
					</h5>
				</div>
				<div class="col">
					<h5 class="text-dark fw-bold">บริการ</h5>
					<p>
						<a href="<?php echo site_url('index/register') ?>" class="text-dark">สมัครสมาชิก</a>
					</p>
					<p>
						<a href="<?php echo site_url('index/deposit') ?>" class="text-dark">บริการเงินฝาก</a>
					</p>
					<p>
						<a href="<?php echo site_url('index/credit') ?>" class="text-dark">บริการสินเชื่อ</a>
					</p>
				</div>
				<div class="col">
					<h5 class="text-dark fw-bold">สวัสดิการ</h5>
					<p>
						<a href="<?php echo site_url('index/marry') ?>" class="text-dark">สวัสดิการแต่งงาน</a>
					</p>
					<p>
						<a href="<?php echo site_url('index/maternity') ?>" class="text-dark">สวัสดิการคลอดบุตร</a>
					</p>
					<p>
						<a href="<?php echo site_url('index/oldage') ?>" class="text-dark">สวัสดิการสมทบยามชรา</a>
					</p>
					<p>
						<a href="<?php echo site_url('index/medical') ?>" class="text-dark">สวัสดิการช่วยเหลือค่ารักษาพยาบาล</a>
					</p>
					<p>
						<a href="<?php echo site_url('index/dead') ?>" class="text-dark">สวัสดิการเสียชีวิต</a>
					</p>
				</div>
				<div class="col text-dark">
					<h5 class="text-dark fw-bold">
						ติดต่อ
					</h5>
					<p><i class="fas fa-home me-3"></i> เลขที่ 291 หมู่ที่ 1 ตำบลคลองยาง อำเภอเกาะลันตา จังหวัดกระบี่ 81120</p>
					<p>
						<i class="fas fa-envelope me-3"></i>
						sakofahi@sakofahislamic.com
					</p>
					<p><i class="fas fa-phone me-3"></i>โทร. 075-652-525</p>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-md-6 d-flex justify-content-start">
				<div class="footer-copyright text-center bg-transparent">© 2019 Copyright:
					<a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
				</div>
			</div>
			<div class="col-md-6 d-flex justify-content-end">
				<button type="button" class="btn btn-outline text-light">เข้าสู่ระบบเจ้าหน้าที่</button>
			</div>
		</div>
	</div>
</footer> -->

<footer class="text-lg-start py-3" style="background-color: #25d321;">
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


