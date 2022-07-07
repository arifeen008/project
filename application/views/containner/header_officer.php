<!-- <style>
	.gradient-custom {
		background: #ffffff;
		background: -webkit-linear-gradient(to top, #ffffff, #25d321);
		background: linear-gradient(to top, #ffffff, #25d321)
	}
</style>
<nav class="navbar navbar-expand-lg gradient-custom sticky-top">
	<div class="container-fluid">
		<div class="collapse navbar-collapse" id="navbarCenteredExample">
			<ul class="navbar-nav mb-2 mb-lg-0">
				<div class="navbar-brand" href="#">
					<h4 class="text-dark">เจ้าหน้าที่ระดับ <?php echo $LEVEL_CODE ?></h4>
				</div>
			</ul>
		</div>
		<ul class="nav justify-content-end">
			<span class="navbar-text">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-mdb-toggle="dropdown" data-mdb-display="static" aria-expanded="false">
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
</nav> -->

<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
		<div class="container-fluid">
			<button data-mdb-toggle="sidenav" data-mdb-target="#sidenav" class="btn shadow-0 p-0 me-3 d-block d-xxl-none" aria-controls="#sidenav" aria-haspopup="true">
				<i class="fas fa-bars fa-lg"></i>
			</button>
			<ul class="navbar-nav ms-auto d-flex flex-row">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
						<div class="text-dark"><?php echo $USER_NAME ?><i class="fas fa-user mx-3" loading="lazy"></i></div>
					</a>
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
						<li><a class="dropdown-item" href="#">โปรไฟล์ของฉัน</a></li>
						<li><a class="dropdown-item" href="#">ตั้งค่า</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('officer/logout_officer') ?>">ออกจากระบบ</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>