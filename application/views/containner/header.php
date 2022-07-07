<style>
	.gradient-custom {
		background: #ffffff;
		background: -webkit-linear-gradient(to top, #ffffff, #25d321);
		background: linear-gradient(to top, #ffffff, #25d321)
	}

	.dropdown:hover>.dropdown-menu {
		display: block;
	}

	.dropdown-menu {
		display: none;
		position: absolute;
		right: 0;
		background: linear-gradient(to left, #ffffff, #25d321);
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
		z-index: 1;
	}

	.dropdown>.dropdown-toggle:active {
		pointer-events: none;
	}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo site_url('index') ?>"><img src="<?php echo base_url('picture/logo-web1.jpg'); ?>"></a>
		<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars text-dark"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			</ul>
			<span class="navbar-text">
				<div class="d-inline-flex p-1">ภาษา</div>
				<a href="?lang=th" class="btn btn-outline-success mx-2" data-mdb-ripple-color="dark">TH</a>
				<a href="?lang=en" class="btn btn-outline-success mx-2" data-mdb-ripple-color="dark">EN</a>
			</span>
		</div>
	</div>
</nav>
<nav class="navbar navbar-expand-lg gradient-custom sticky-top">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarCenteredExample">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link border-end" href="<?php echo site_url('index') ?>">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('header_home') ?> </p>
					</a>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link border-end" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('header_about') ?> </p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/history') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_history') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/vision') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_vision') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/board') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_board') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/office') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_office') ?></p>
							</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link border-end" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('header_service') ?></p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/register') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_register') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/deposit') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_deposit') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/credit') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_credit') ?></p>
							</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link border-end" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('header_welfare') ?></p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/marry') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_marry') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/maternity') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_maternity') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/oldage') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_oldage') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/medical') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_medical') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/dead') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_dead') ?></p>
							</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link border-end" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('header_news') ?></p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<!-- <li><a class="dropdown-item" href="<?php echo site_url('index/promotion') ?>">โปรโมชั่น</a></li> -->
						<li><a class="dropdown-item" href="<?php echo site_url('index/activity') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_activity') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/calendar') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_calendar') ?></p>
							</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link border-end" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('header_project') ?></p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/stadium') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_stadium') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/village') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_village') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/gasstation') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_gasstation') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/orphan') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_orphan') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/sakofahmarket') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_sakofahmarket') ?></p>
							</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link border-end" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('header_asset') ?></p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/real_estate_sale_list') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_estate') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/vacant_list') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_vulcant') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/condo_list') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_condo') ?></p>
							</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link border-end" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('header_download') ?> </p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="<?php echo site_url('index/document') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_document') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/report') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_report') ?></p>
							</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
						<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('header_contact') ?></p>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSeKfqui-MFOwjuBGgl98Aa26sK2QUCX3mtcblNDuwPPU-l2ow/viewform?usp=sf_link">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_form') ?></p>
							</a></li>
						<li><a class="dropdown-item" href="<?php echo site_url('index/withus') ?>">
								<p style="font-family: 'Sarabun', cursive;color:black;font-size: 18px;"><?php echo lang('dropdown_withus') ?></p>
							</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>