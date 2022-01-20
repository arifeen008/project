<style>
	.gradient-custom {
		/* fallback for old browsers */
		background: #ffffff;

		/* Chrome 10-25, Safari 5.1-6 */
		background: -webkit-linear-gradient(to top, #ffffff, #25d321);

		/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		background: linear-gradient(to top, #ffffff, #25d321)
	}

	.dropdown:hover>.dropdown-menu {
		display: block;
	}

	.dropdown>.dropdown-toggle:active {
		/*Without this, clicking will make it sticky*/
		pointer-events: none;
	}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo site_url('index') ?>"><img src="<?php echo base_url('picture/logo-web1.jpg'); ?>"></a>
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
<nav class="navbar navbar-expand-lg gradient-custom sticky-top">
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
					<a class="nav-link text-dark" href="#" role="button" data-mdb-toggle="dropdown" data-mdb-display="static" aria-expanded="false">
						<i class="fas fa-user me-3"></i><?php echo $USER_NAME ?>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end">
						<li><a class="dropdown-item" href="#"><i class="far fa-eye me-3"></i>ดูข้อมูลของผู้ใช้</a></li>
						<li><a class="dropdown-item" href="#"><i class="fas fa-key me-3"></i>เปลี่ยนรหัสผ่าน</a></li>
						<div class="dropdown-divider"></div>
						<li><a class="dropdown-item" href="<?php echo site_url('officer/logout_officer') ?>"><i class="fas fa-door-open me-3"></i>ออกจากระบบ</a></li>
					</ul>
				</li>
			</span>
		</ul>

	</div>
</nav>
