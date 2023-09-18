 <nav id="sidenav" class="sidenav d-flex flex-column align-items-between" data-mdb-color="success" data-mdb-mode="side" data-mdb-hidden="false" data-mdb-accordion="true" data-mdb-content="#content">
 	<ul class="sidenav-menu">
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/search_member') ?>">
 				<span>ค้นหาสมาชิก</span>
 			</a>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/creditupload_system') ?>">
 				<span>สินเชื่อ</span>
 			</a>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/internal_announcement') ?>">
 				<span>ประกาศภายใน</span>
 			</a>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/cooperative_rules') ?>">
 				<span>ข้อบังคับสหกรณ์</span>
 			</a>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/cooperative_regulation') ?>">
 				<span>ระเบียบเจ้าหน้าที่</span>
 			</a>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/form') ?>">
 				<span>แบบฟอร์มเจ้าหน้าที่</span>
 			</a>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/performance') ?>">
 				<span>ผลการดำเนินงาน</span>
 			</a>
 		</li>
 		<!-- <li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/human_resource_development_activities') ?>">
 				<i class="fas fa-chart-line me-3"></i><span>กิจกรรมพัฒนาบุคลากร</span>
 			</a>
 		</li> -->
 		<?php if ($level_code === 'P') { ?>
 			<li class="sidenav-item">
 				<a class="sidenav-link" href="<?php echo site_url('officer/credit_consider') ?>">
 					<span>ระบบพิจารณาสินเชื่อ</span>
 				</a>
 			</li>
 			<li class="sidenav-item">
 				<a class="sidenav-link" href="<?php echo site_url('officer/credit_consider2') ?>">
 					<span>ระบบพิจารณาสินเชื่อ 2</span>
 				</a>
 			</li>
 			<li class="sidenav-item">
 				<a class="sidenav-link" href="<?php echo site_url('officer/credit_consider3') ?>">
 					<span>ระบบพิจารณาสินเชื่อ 3</span>
 				</a>
 			</li>
 			<li class="sidenav-item">

 			</li>
 		<?php	} ?>
 		<li class="sidenav-item">
 			<a class="sidenav-link">
 				<span>ระบบ Admin</span>
 			</a>
 			<ul class="sidenav-collapse">
 				<a class="sidenav-link" href="<?php echo site_url('officer/admin_credit_consider') ?>">
 					พิจารณาสินเชื่อ
 				</a>
 				<a class="sidenav-link" href="<?php echo site_url('officer/admin_credit') ?>">
 					สินเชื่อ
 				</a>
 			</ul>
 		</li>
 		<li class="sidenav-item">
 			<a class="sidenav-link">
 				<span>ระบบอัพโหลด</span>
 			</a>
 			<ul class="sidenav-collapse">
 				<li class="sidenav-item">
 					<a href="<?php echo site_url('officer/uploadcreditfile') ?>" class="sidenav-link">อัพโหลดสินเชื่อ</a>
 				</li>
 				<?php if ($level_code === 'P') { ?>
 					<li class="sidenav-item">
 						<a href="<?php echo site_url('officer/uploadasset_system') ?>" class="sidenav-link">อัพโหลดสินทรัพย์</a>
 					</li>
 					<li class="sidenav-item">
 						<a href="<?php echo site_url('officer/uploadnews_system') ?>" class="sidenav-link">อัพโหลดข่าวสาร</a>
 					</li>
 					<li class="sidenav-item">
 						<a href="<?php echo site_url('officer/upload_document') ?>" class="sidenav-link">อัพโหลดผลการดำเนินงาน</a>
 					</li>
 					<li class="sidenav-item">
 						<a href="<?php echo site_url('officer/import_internal_declaration') ?>" class="sidenav-link">อัพโหลดประกาศ</a>
 					</li>
 				<?php	} ?>
 			</ul>
 		</li>
 	</ul>
 </nav>