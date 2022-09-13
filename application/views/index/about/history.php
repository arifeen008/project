<style>
	.main-timeline {
		position: relative;
	}

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

	.timeline {
		position: relative;
		background-color: inherit;
		width: 50%;
	}

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

	.left {
		padding: 0px 40px 20px 0px;
		left: 0;
	}

	.right {
		padding: 0px 0px 20px 40px;
		left: 50%;
	}

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

	.right::after {
		left: -12px;
	}

	@media screen and (max-width: 600px) {

		.main-timeline::after {
			left: 31px;
		}

		.timeline {
			width: 100%;
			padding-left: 70px;
			padding-right: 25px;
		}

		.timeline::before {
			left: 60px;
			border: medium solid white;
			border-width: 10px 10px 10px 0;
			border-color: transparent white transparent transparent;
		}

		.left::after,
		.right::after {
			left: 18px;
		}

		.left::before {
			right: auto;
		}

		.right {
			left: 0%;
		}
	}
</style>

<div class="container my-5" data-mdb-toggle="animation" data-mdb-animation="zoom-in" data-mdb-animation-start="onLoad">
	<b style="font-family: 'Kanit';" class="h1 text-dark"><?php echo lang('history') ?></b>
	<div class="container py-5">
		<div class="main-timeline">
			<div class="timeline left">
				<div class="card hover-shadow">
					<div class="card-body p-4">
						<p style="font-family: 'Kanit';" class="h3 text-dark"><?php echo lang('present') ?></p>
						<p style="font-family: 'Kanit';" class="mb-0 text-dark"><?php echo lang('history1') ?></p>
					</div>
				</div>
			</div>
			<div class="timeline right">
				<div class="card hover-shadow">
					<div class="card-body p-4">
						<p style="font-family: 'Kanit';" class="h3 text-dark"><?php echo lang('2552') ?></p>
						<p style="font-family: 'Kanit';" class="mb-0 text-dark"><?php echo lang('history2') ?></p>
					</div>
				</div>
			</div>
			<div class="timeline left">
				<div class="card hover-shadow">
					<div class="card-body p-4">
						<p style="font-family: 'Kanit';" class="text-dark h3"><?php echo lang('2542') ?></p>
						<p style="font-family: 'Kanit';" class="text-dark mb-0"><?php echo lang('history3') ?></p>
					</div>
				</div>
			</div>
			<div class="timeline right">
				<div class="card hover-shadow">
					<div class="card-body p-4">
						<p style="font-family: 'Kanit';" class="text-dark h3"><?php echo lang('2538') ?></p>
						<p style="font-family: 'Kanit';" class="text-dark mb-0"><?php echo lang('history4') ?></p>
					</div>
				</div>
			</div>
			<div class="timeline left">
				<div class="card hover-shadow">
					<div class="card-body p-4">
						<p style="font-family: 'Kanit';" class="text-dark h3"><?php echo lang('2535') ?></p>
						<p style="font-family: 'Kanit';" class="text-dark mb-0"><?php echo lang('history5') ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>