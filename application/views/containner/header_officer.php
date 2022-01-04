<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
	<a class="navbar-brand" href="<?php echo site_url('index') ?>"><img src="<?php echo base_url('picture/logo-web.jpg'); ?>" width="250"></a>
		<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">

			</ul>
			<span class="navbar-text">
				ภาษา <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark">EN</button> | <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark">TH</button>
			</span>
		</div>
	</div>
</nav>
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #25d321;">
	<div class="container-fluid">
		<div class="collapse navbar-collapse" id="navbarCenteredExample">
			<ul class="navbar-nav mb-2 mb-lg-0">
				<a class="navbar-brand" href="#">
					<h4 class="text-dark">เจ้าหน้าที่ระดับ <?php echo $LEVEL_CODE ?></h4>
				</a>
		</div>
		<ul class="nav justify-content-end">
			<span class="navbar-text">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-dark" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;<?php echo $USER_NAME ?>
					</a>
					<ul class="dropdown-menu dropdown-menu-end">
						<li><a class="dropdown-item" href="<?php echo site_url('officer/data_officer') ?>"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;ดูข้อมูลของผู้ใช้</a></li>
						<li><a class="dropdown-item" href="#"><i class="fas fa-key"></i>&nbsp;&nbsp;&nbsp; เปลี่ยนรหัสผ่าน</a></li>
						<div class="dropdown-divider"></div>
						<li><a class="dropdown-item" href="<?php echo site_url('officer/logout_officer') ?>"><i class="fas fa-door-open"></i>&nbsp;&nbsp;&nbsp;ออกจากระบบ</a></li>
					</ul>
				</li>
			</span>
		</ul>

	</div>
</nav>
