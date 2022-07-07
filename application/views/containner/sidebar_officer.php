 <!-- <div class="container-fluid">
 	<div class="row">
 		<div class="col-sm-3 mt-3 mb-3">
 			<div class="list-group">
 				<a href="<?php echo site_url('officer/search_member') ?>" class="list-group-item list-group-item-action"><i class="fas fa-user-alt me-4"></i>ระบบค้นหาสมาชิก</a>
 				<?php if ($level_code === 'P') { ?>
 					<a href="<?php echo site_url('officer/uploadnews_system') ?>" class="list-group-item list-group-item-action"><i class="fas fa-newspaper me-4"></i>ระบบอัพโหลดข่าวสาร</a>
 				<?php	} ?>
 				<a href="<?php echo site_url('officer/internal_announcement') ?>" class="list-group-item list-group-item-action"><i class="fas fa-bullhorn me-4"></i>ประกาศภายใน</a>
 				<a href="<?php echo site_url('officer/cooperative_rules') ?>" class="list-group-item list-group-item-action"><i class="fas fa-bell me-4"></i>ข้อบังคับสหกรณ์</a>
 				<a href="<?php echo site_url('officer/cooperative_regulation') ?>" class="list-group-item list-group-item-action"><i class="fas fa-border-all me-4"></i>ระเบียบเจ้าหน้าที่</a>
 				<a href="<?php echo site_url('officer/form') ?>" class="list-group-item list-group-item-action"><i class="fas fa-info me-4"></i>แบบฟอร์มต่างๆ</a>
 				<a href="<?php echo site_url('officer/performance') ?>" class="list-group-item list-group-item-action"><i class="fas fa-award me-4"></i>ผลการดำเนินงานประจำปี 2565</a>
 				<a href="<?php echo site_url('officer/human_resource_development_activities') ?>" class="list-group-item list-group-item-action"><i class="fas fa-chart-line me-4"></i>กิจกรรมพัฒนาบุคลากร</a>
 				<?php if ($level_code === 'P') { ?>
 					<a href="#" class="list-group-item list-group-item-action disabled" aria-disabled="true"><i class="far fa-star me-4"></i>รายงานประจำวัน</a>
 					<a href="#" class="list-group-item list-group-item-action disabled" aria-disabled="true"><i class="far fa-moon me-4"></i>รายงานประจำเดือน</a>
 					<a href="#" class="list-group-item list-group-item-action disabled" aria-disabled="true"><i class="far fa-sun me-4"></i>รายงานประจำปี</a>
 				<?php	} ?>
 				<a href="<?php echo site_url('officer/creditupload_system') ?>" class="list-group-item list-group-item-action"><i class="fas fa-credit-card me-4"></i>อัพโหลดสินเชื่อ</a>
 				<?php if ($level_code === 'P') { ?>
 					<a href="<?php echo site_url('officer/uploadasset_system') ?>" class="list-group-item list-group-item-action"><i class="fas fa-newspaper me-4"></i>อัพโหลดสินทรัพย์</a>
 				<?php	} ?>
 			</div>
 		</div> -->

 <nav id="sidenav" class="sidenav d-flex flex-column align-items-between" data-mdb-color="success" data-mdb-mode="side" data-mdb-hidden="false" data-mdb-accordion="true" data-mdb-content="#content">
 	<ul class="sidenav-menu">
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/search_member') ?>">
 				<i class="fas fa-user-alt me-3"></i><span>ค้นหาสมาชิก</span></a>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/creditupload_system') ?>">
 				<i class="fab fa-bitcoin me-3"></i><span>สินเชื่อ</span></a>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/internal_announcement') ?>">
 				<i class="fas fa-bullhorn me-3"></i><span>ประกาศภายใน</span></a>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/cooperative_rules') ?>">
 				<i class="fas fa-bell me-3"></i><span>ข้อบังคับสหกรณ์</span></a>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/cooperative_regulation') ?>">
 				<i class="fas fa-border-all me-3"></i><span>ระเบียบเจ้าหน้าที่</span></a>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/form') ?>">
 				<i class="fas fa-info me-3"></i><span>แบบฟอร์มต่างๆ</span></a>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/performance') ?>">
 				<i class="fas fa-award fa-fw me-3"></i><span>ผลการดำเนินงานประจำปี</span></a>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/human_resource_development_activities') ?>">
 				<i class="fas fa-chart-line me-3"></i><span>กิจกรรมพัฒนาบุคลากร</span></a>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link"><i class="fas fa-file-upload me-3"></i><span>ระบบอัพโหลด</span></a>
 			<ul class="sidenav-collapse">
 				<li class="sidenav-item">
 					<a href="<?php echo site_url('officer/uploadcreditfile') ?>" class="sidenav-link"><i class="fas fa-credit-card me-4"></i>อัพโหลดสินเชื่อ</a>
 				</li>
 				<?php if ($level_code === 'P') { ?>
 					<li class="sidenav-item">
 						<a href="<?php echo site_url('officer/uploadasset_system') ?>" class="sidenav-link"><i class="fas fa-home me-4"></i>อัพโหลดสินทรัพย์</a>
 					</li>
 					<li class="sidenav-item">
 						<a href="<?php echo site_url('officer/uploadnews_system') ?>" class="sidenav-link"><i class="fas fa-newspaper me-4"></i>อัพโหลดข่าวสาร</a>
 					</li>
 					<li class="sidenav-item">
 						<a href="<?php echo site_url('officer/upload_document') ?>" class="sidenav-link"><i class="fas fa-dice-d6 me-4"></i>ผลการดำเนินงานประจำปี</a>
 					</li>
 					<li class="sidenav-item">
 						<a href="<?php echo site_url('officer/import_internal_declaration') ?>" class="sidenav-link"><i class="fas fa-microphone-alt me-4"></i>อัพโหลดประกาศ</a>
 					</li>
 				<?php	} ?>
 			</ul>
 		</li>
 	</ul>
 </nav>