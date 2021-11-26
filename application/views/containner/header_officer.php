<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #25d321;">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<h4>เจ้าหน้าที่ระดับ <?php echo $LEVEL_CODE ?></h4>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<ul class="nav justify-content-end">
			<span class="navbar-text">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;<?php echo $USER_NAME ?>
					</a>
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
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
