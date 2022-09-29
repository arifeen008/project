<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
		<div class="container-fluid">
			<button data-mdb-toggle="sidenav" data-mdb-target="#sidenav" class="btn shadow-0 p-0 me-3 d-block d-xxl-none" aria-controls="#sidenav" aria-haspopup="true">
				<i class="fas fa-bars fa-lg"></i>
			</button>
			<p id="content" class="text-dark d-none d-md-flex w-auto my-auto">เจ้าหน้าที่ระดับ <?php echo $LEVEL_CODE ?></p>
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