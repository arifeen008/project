<!-- <style>
	.main-timeline {
		position: relative
	}

	.main-timeline:before {
		content: "";
		display: block;
		width: 2px;
		height: 100%;
		background: #00ff00;
		margin: 0 auto;
		position: absolute;
		top: 0;
		left: 0;
		right: 0
	}

	.main-timeline .timeline {
		margin-bottom: 40px;
		position: relative
	}

	.main-timeline .timeline:after {
		content: "";
		display: block;
		clear: both
	}

	.main-timeline .icon {
		width: 18px;
		height: 18px;
		line-height: 18px;
		margin: auto;
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0
	}

	.main-timeline .icon:before,
	.main-timeline .icon:after {
		content: "";
		width: 100%;
		height: 100%;
		border-radius: 50%;
		position: absolute;
		top: 0;
		left: 0;
		transition: all 0.33s ease-out 0s
	}

	.main-timeline .icon:before {
		background: #fff;
		border: 2px solid #232323;
		left: -3px
	}

	.main-timeline .icon:after {
		border: 2px solid #c6c6c6;
		left: 3px
	}

	.main-timeline .timeline:hover .icon:before {
		left: 3px
	}

	.main-timeline .timeline:hover .icon:after {
		left: -3px
	}

	.main-timeline .date-content {
		width: 50%;
		float: left;
		margin-top: 22px;
		position: relative
	}

	.main-timeline .date-content:before {
		content: "";
		width: 36.5%;
		height: 2px;
		background: #00ff00;
		margin: auto 0;
		position: absolute;
		top: 0;
		right: 10px;
		bottom: 0
	}

	.main-timeline .date-outer {
		width: 125px;
		height: 125px;
		font-size: 16px;
		text-align: center;
		margin: auto;
		z-index: 1
	}

	.main-timeline .date-outer:before,
	.main-timeline .date-outer:after {
		content: "";
		width: 125px;
		height: 125px;
		margin: 0 auto;
		border-radius: 50%;
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		transition: all 0.33s ease-out 0s
	}

	.main-timeline .date-outer:before {
		background: #fff;
		border: 2px solid #232323;
		left: -6px
	}

	.main-timeline .date-outer:after {
		border: 2px solid #80ff00;
		left: 6px
	}

	.main-timeline .timeline:hover .date-outer:before {
		left: 6px
	}

	.main-timeline .timeline:hover .date-outer:after {
		left: -6px
	}

	.main-timeline .date {
		width: 100%;
		margin: auto;
		position: absolute;
		top: 27%;
		left: 0
	}

	.main-timeline .month {
		font-size: 18px;
		font-weight: 700
	}

	.main-timeline .year {
		display: block;
		font-size: 30px;
		font-weight: 700;
		color: #232323;
		line-height: 36px
	}

	.main-timeline .timeline-content {
		width: 50%;
		padding: 20px 0 20px 50px;
		float: right
	}

	.main-timeline .title {
		font-size: 19px;
		font-weight: 700;
		line-height: 24px;
		margin: 0 0 15px 0
	}

	.main-timeline .description {
		margin-bottom: 0
	}

	.main-timeline .timeline:nth-child(2n) .date-content {
		float: right
	}

	.main-timeline .timeline:nth-child(2n) .date-content:before {
		left: 10px
	}

	.main-timeline .timeline:nth-child(2n) .timeline-content {
		padding: 20px 50px 20px 0;
		text-align: right
	}

	@media only screen and (max-width: 991px) {
		.main-timeline .date-content {
			margin-top: 35px
		}

		.main-timeline .date-content:before {
			width: 22.5%
		}

		.main-timeline .timeline-content {
			padding: 10px 0 10px 30px
		}

		.main-timeline .title {
			font-size: 17px
		}

		.main-timeline .timeline:nth-child(2n) .timeline-content {
			padding: 10px 30px 10px 0
		}
	}

	@media only screen and (max-width: 767px) {
		.main-timeline:before {
			margin: 0;
			left: 7px
		}

		.main-timeline .timeline {
			margin-bottom: 20px
		}

		.main-timeline .timeline:last-child {
			margin-bottom: 0
		}

		.main-timeline .icon {
			margin: auto 0
		}

		.main-timeline .date-content {
			width: 95%;
			float: right;
			margin-top: 0
		}

		.main-timeline .date-content:before {
			display: none
		}

		.main-timeline .date-outer {
			width: 110px;
			height: 110px
		}

		.main-timeline .date-outer:before,
		.main-timeline .date-outer:after {
			width: 110px;
			height: 110px
		}

		.main-timeline .date {
			top: 30%
		}

		.main-timeline .year {
			font-size: 24px
		}

		.main-timeline .timeline-content,
		.main-timeline .timeline:nth-child(2n) .timeline-content {
			width: 95%;
			text-align: center;
			padding: 10px 0
		}

		.main-timeline .title {
			margin-bottom: 10px
		}
	}
</style>

<div class="container">
	<p style="font-family: 'Chonburi', cursive;color:black;" class="mt-5 text-center h1">ประวัติความเป็นมา</p>
	<div class="main-timeline">
		<div class="timeline">
			<div class="icon"></div>
			<div class="date-content">
				<div class="date-outer">
					<span class="date">
						<span class="month text-dark">พ.ศ.</span>
						<span class="year text-dark">2535</span>
					</span>
				</div>
			</div>
			<div class="timeline-content">
				<p class="description note note-success text-dark">
					คณะบุคคลร่วมกันจัดตั้ง "กองทุนออมทรัพย์ษะกอฟะฮ" ขึ้นที่ ต.คลองยาง อ.เกาะลันตา จ.กระบี่โดยระดมทุนเพื่อช่วยเหลือซึ่งกันและกัน
				</p>
			</div>
		</div>
		<div class="timeline">
			<div class="icon"></div>
			<div class="date-content">
				<div class="date-outer">
					<span class="date">
						<span class="month text-dark">พ.ศ.</span>
						<span class="year text-dark">2538</span>
					</span>
				</div>
			</div>
			<div class="timeline-content">
				<p class="description note note-success text-dark">
					หลังจากกองทุนฯ มีความเข้มแข็งในระดับหนึ่ง คณะบุคคลดังกล่าว ดำเนินการจดทะเบียน จากกองทุนมาเป็นสหกรณ์ โดยใช้ชื่อว่า "สหกรณ์ออมทรัพย์ษะกอฟะฮอิสลาม จำกัด" เมื่อวันที่ 7 กุมภาพันธ์ พ.ศ.2538
				</p>
			</div>
		</div>
		<div class="timeline">
			<div class="icon"></div>
			<div class="date-content">
				<div class="date-outer">
					<span class="date">
						<span class="month text-dark">พ.ศ.</span>
						<span class="year text-dark">2542</span>
					</span>
				</div>
			</div>
			<div class="timeline-content">
				<p class="description note note-success text-dark">
					ได้ขยายสาขามาเปิดกิจการ ที่ อ.เมืองกระบี่ โดยชั้นร้านอาหารอับดุลเลาะฮ์ เป็นสำนักงานใหญ่
				</p>
			</div>
		</div>
		<div class="timeline">
			<div class="icon"></div>
			<div class="date-content">
				<div class="date-outer">
					<span class="date">
						<span class="month text-dark">พ.ศ.</span>
						<span class="year text-dark">2552</span>
					</span>
				</div>
			</div>
			<div class="timeline-content">
				<p class="description note note-success text-dark">
					ได้ย้ายมาอยู่ที่ 119/9-10 ถ.กระบี่ ต.ปากน้ำ อ.เมือง จ.กระบี่ <br> (ใกล้สามแยกวิทยาลัยเทคนิคกระบี่)
				</p>
			</div>
		</div>
		<div class="timeline">
			<div class="icon"></div>
			<div class="date-content">
				<div class="date-outer">
					<span class="date">
						<span class="month text-dark">พ.ศ.</span>
						<span class="year text-dark">ปัจจุบัน</span>
					</span>
				</div>
			</div>
			<div class="timeline-content">
				<p class="description note note-success text-dark">
					สหกรณ์อิสลามษะกอฟะฮ จำกัด ได้ย้ายมา สนง.ใหญ่ มาอยู่ที่ 291 ม.1 ต.คลองยาง อ.เกาะลันตา จ.กระบี่ มีทั้งหมด 7 สาขา และ 2 หน่วยบริการเคลื่อนที่
				</p>
			</div>
		</div>
	</div>
</div> -->

<style>
	/* The actual timeline (the vertical ruler) */
	.main-timeline {
		position: relative;
	}

	/* The actual timeline (the vertical ruler) */
	.main-timeline::after {
		content: '';
		position: absolute;
		width: 6px;
		background-color: #939597;
		top: 0;
		bottom: 0;
		left: 50%;
		margin-left: -3px;
	}

	/* Container around content */
	.timeline {
		position: relative;
		background-color: inherit;
		width: 50%;
	}

	/* The circles on the timeline */
	.timeline::after {
		content: '';
		position: absolute;
		width: 25px;
		height: 25px;
		right: -13px;
		background-color: #ebf435;
		border: 5px solid #25d321;
		top: 15px;
		border-radius: 50%;
		z-index: 1;
	}

	/* Place the container to the left */
	.left {
		padding: 0px 40px 20px 0px;
		left: 0;
	}

	/* Place the container to the right */
	.right {
		padding: 0px 0px 20px 40px;
		left: 50%;
	}

	/* Add arrows to the left container (pointing right) */
	.left::before {
		content: " ";
		position: absolute;
		top: 18px;
		z-index: 1;
		right: 30px;
		border: medium solid white;
		border-width: 10px 0 10px 10px;
		border-color: transparent transparent transparent white;
	}

	/* Add arrows to the right container (pointing left) */
	.right::before {
		content: " ";
		position: absolute;
		top: 18px;
		z-index: 1;
		left: 30px;
		border: medium solid white;
		border-width: 10px 10px 10px 0;
		border-color: transparent white transparent transparent;
	}

	/* Fix the circle for containers on the right side */
	.right::after {
		left: -12px;
	}

	/* Media queries - Responsive timeline on screens less than 600px wide */
	@media screen and (max-width: 600px) {

		/* Place the timelime to the left */
		.main-timeline::after {
			left: 31px;
		}

		/* Full-width containers */
		.timeline {
			width: 100%;
			padding-left: 70px;
			padding-right: 25px;
		}

		/* Make sure that all arrows are pointing leftwards */
		.timeline::before {
			left: 60px;
			border: medium solid white;
			border-width: 10px 10px 10px 0;
			border-color: transparent white transparent transparent;
		}

		/* Make sure all circles are at the same spot */
		.left::after,
		.right::after {
			left: 18px;
		}

		.left::before {
			right: auto;
		}

		/* Make all right containers behave like the left ones */
		.right {
			left: 0%;
		}
	}
</style>

<div class="container my-5">
	<p style="font-family: 'Chonburi', cursive;color:black;" class="h1">ประวัติความเป็นมา</p>
	<div class="container py-5">
		<div class="main-timeline">
			<div class="timeline left">
				<div class="card">
					<div class="card-body p-4">
						<p class="h3 text-dark">ปัจจุบัน</p>
						<p class="mb-0 text-dark">สหกรณ์อิสลามษะกอฟะฮ จำกัด ได้ย้ายมา สนง.ใหญ่ มาอยู่ที่ 291 ม.1 ต.คลองยาง อ.เกาะลันตา จ.กระบี่ มีทั้งหมด 7 สาขา และ 2 หน่วยบริการเคลื่อนที่</p>
					</div>
				</div>
			</div>
			<div class="timeline right">
				<div class="card">
					<div class="card-body p-4">
						<p class="h3 text-dark">2552</p>
						<p class="mb-0 text-dark">ได้ย้ายมาอยู่ที่ 119/9-10 ถ.กระบี่ ต.ปากน้ำ อ.เมือง จ.กระบี่ <br> (ใกล้สามแยกวิทยาลัยเทคนิคกระบี่)</p>
					</div>
				</div>
			</div>
			<div class="timeline left">
				<div class="card text-dark">
					<div class="card-body p-4">
						<p class="text-dark h3">2542</p>
						<p class="text-darkmb-0">ได้ขยายสาขามาเปิดกิจการ ที่ อ.เมืองกระบี่ โดยชั้นร้านอาหารอับดุลเลาะฮ์ เป็นสำนักงานใหญ่</p>
					</div>
				</div>
			</div>
			<div class="timeline right">
				<div class="card text-dark">
					<div class="card-body p-4">
						<p class="h3">2538</p>
						<p class="mb-0">หลังจากกองทุนฯ มีความเข้มแข็งในระดับหนึ่ง คณะบุคคลดังกล่าว ดำเนินการจดทะเบียน จากกองทุนมาเป็นสหกรณ์ โดยใช้ชื่อว่า "สหกรณ์ออมทรัพย์ษะกอฟะฮอิสลาม จำกัด" เมื่อวันที่ 7 กุมภาพันธ์ พ.ศ.2538</p>
					</div>
				</div>
			</div>
			<div class="timeline left">
				<div class="card text-dark">
					<div class="card-body p-4">
						<p class="h3">2535</p>
						<p class="mb-0">คณะบุคคลร่วมกันจัดตั้ง "กองทุนออมทรัพย์ษะกอฟะฮ" ขึ้นที่ ต.คลองยาง อ.เกาะลันตา จ.กระบี่โดยระดมทุนเพื่อช่วยเหลือซึ่งกันและกัน</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
