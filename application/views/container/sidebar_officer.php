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
 		<li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/uploadcreditfile') ?>">
 				<span>อัพโหลดสินเชื่อ</span>
 			</a>
 		</li>
 		<!-- <li class="sidenav-item">
 			<a class="sidenav-link" href="<?php echo site_url('officer/human_resource_development_activities') ?>">
 				<i class="fas fa-chart-line me-3"></i><span>กิจกรรมพัฒนาบุคลากร</span>
 			</a>
 		</li> -->
 		<?php if ($level_code === 'E' || 'P') : ?>
 			<li class="sidenav-item">
 				<a class="sidenav-link" href="<?php echo site_url('officer/credit_consider') ?>">
 					<span>ฝ่ายสินเชื่อสาขา</span>
 				</a>
 			</li>
 		<?php endif ?>
		 <?php if ($level_code === 'CC' || 'P') : ?>
 			<li class="sidenav-item">
 				<a class="sidenav-link" href="<?php echo site_url('officer/credit_consider2') ?>">
 					<span>รับเอกสารสินเชื่อสาขา</span>
 				</a>
 			</li>
 		<?php endif ?>
 		<?php if ($level_code === 'CRM' || 'P') : ?>
 			<li class="sidenav-item">
 				<a class="sidenav-link" href="<?php echo site_url('officer/credit_consider3') ?>">
 					<span>ฝ่ายวิเคราะห์</span>
 				</a>
 			</li>
 		<?php endif ?>
 		<?php if ($level_code === 'M' || 'P') : ?>
 			<li class="sidenav-item">
 				<a class="sidenav-link" href="<?php echo site_url('officer/credit_consider4') ?>">
 					<span>ผู้จัดการใหญ่</span>
 				</a>
 			</li>
 		<?php endif ?>
		 <li class="sidenav-item">
 				<a class="sidenav-link" href="<?php echo site_url('officer/report_credit_consider') ?>">
 					<span>รายงานผลการติดตามยื่นขอสินเชื่อ</span>
 				</a>
 			</li>
 		<?php if ($level_code === 'P') : ?>
 			<li class="sidenav-item">
 				<a class="sidenav-link">
 					<span>ระบบ Admin</span>
 				</a>
 				<ul class="sidenav-collapse">
 					<li class="sidenav-item">
 						<a class="sidenav-link" href="<?php echo site_url('officer/admin_credit_consider') ?>">พิจารณาสินเชื่อ</a>
 					</li>
 					<li class="sidenav-item">
 						<a class="sidenav-link" href="<?php echo site_url('officer/admin_credit') ?>">สินเชื่อ</a>
 					</li>
 					<li class="sidenav-item">
 						<a class="sidenav-link" href="<?php echo site_url('officer/login_history') ?>">ประวัติการล็อกอิน</a>
 					</li>
 					<li class="sidenav-item">
 						<a class="sidenav-link" href="<?php echo site_url('officer/uploadasset_system') ?>">อัพโหลดสินทรัพย์</a>
 					</li>
 					<li class="sidenav-item">
 						<a class="sidenav-link" href="<?php echo site_url('officer/uploadnews_system') ?>">อัพโหลดข่าวสาร</a>
 					</li>
 					<li class="sidenav-item">
 						<a class="sidenav-link" href="<?php echo site_url('officer/upload_document') ?>">อัพโหลดผลการดำเนินงาน</a>
 					</li>
 					<li class="sidenav-item">
 						<a class="sidenav-link" href="<?php echo site_url('officer/import_internal_declaration') ?>">อัพโหลดประกาศ</a>
 					</li>
 				</ul>
 			</li>
 		<?php endif ?>
 	</ul>
 </nav>