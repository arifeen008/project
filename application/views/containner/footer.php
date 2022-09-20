<footer class="text-lg-start py-2" style="background-color: #25d321;">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-6">
						<b class="h5 text-dark" style="font-family: 'Kanit';"><?php echo lang('number_visiter') ?> :</b>
					</div>
					<div class="col-md-6">
						<div id="sfc3wrcpuf5jgrke9993w3x3p7wsppfre13"></div>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4 d-flex justify-content-end">
				<button type="button" class="btn btn-success" style="font-family: 'Kanit';" data-mdb-toggle="modal" data-mdb-target="#accessToAgent"><i class="fas fa-key me-3"></i><?php echo lang('staff_login') ?></button>
			</div>
		</div>
	</div>
</footer>

<div class="modal fade" id="accessToAgent" tabindex="-1" aria-labelledby="accessToAgent" aria-hidden="true">
	<div class="modal-dialog mx-0 mx-sm-auto">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #25d321;">
				<h4 class="modal-title text-light" id="accessToAgent" style="font-family: 'Kanit';"><?php echo lang('staff_login') ?></h4>
				<button type="button" class="close" data-mdb-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body p-4">
				<form action="<?php echo site_url('officer/login_officer') ?>" method="post">
					<div class="form-outline mb-4">
						<input type="text" id="form2Example1" name="user_id" class="form-control" />
						<label class="form-label" for="form2Example1"><?php echo lang('username') ?></label>
					</div>
					<div class="form-outline mb-4">
						<input type="password" id="form2Example2" name="password" class="form-control" />
						<label class="form-label" for="form2Example2"><?php echo lang('password') ?></label>
					</div>
					<button type="submit" style="background-color: #25d321;" class="btn btn-block text-light">
						<b style="font-family: 'Kanit';" class="h5"><?php echo lang('login') ?></b>
					</button>
				</form>
			</div>
		</div>
	</div>
</div>