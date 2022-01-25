<div class="container-fluid">
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
				<a href="<?php echo site_url('officer/internal_announcement') ?>" class="list-group-item list-group-item-action"><i class="fas fa-award me-4"></i>ผลการดำเนินงานประจำปี 2565</a>
				<a href="<?php echo site_url('officer/human_resource_development_activities') ?>" class="list-group-item list-group-item-action"><i class="fas fa-chart-line me-4"></i>กิจกรรมพัฒนาบุคลากร</a>
				<?php if ($level_code === 'C') { ?>
					<a href="<?php echo site_url('manager/daily_report') ?>" class="list-group-item list-group-item-action">รายงานประจำวัน<span class="badge bg-success"></i></span></a>
					<a href="<?php echo site_url('manager/monthly_report') ?>" class="list-group-item list-group-item-action">รายงานประจำเดือน<span class="badge bg-success"></span></a>
					<a href="<?php echo site_url('manager/yearly_report') ?>" class="list-group-item list-group-item-action">รายงานประจำปี<span class="badge bg-success"></span></a>
				<?php	} ?>
			</div>
		</div>
