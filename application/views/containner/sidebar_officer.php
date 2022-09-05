 <nav id="sidenav" class="sidenav d-flex flex-column align-items-between" data-mdb-color="success" data-mdb-mode="side" data-mdb-hidden="false" data-mdb-accordion="true" data-mdb-content="#content">
 	<ul class="sidenav-menu text-dark">
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
 			<a class="sidenav-link" href="#">
			 <i class="fas fa-air-freshener me-3"></i><span>ทำเนียบบุคลากร</span></a>
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