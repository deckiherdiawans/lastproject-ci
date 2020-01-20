<div id="panel">
	<div id="login-panel">
		<div class="text-center">
			<img src="<?= base_url('images/'); ?>logorevota.jpg" />
		</div>
		<h2 class="text-center">Change Password for:</h2>
		<form method="post" action="<?= base_url('auth/changepassword/'); ?>">
			<div class="form-group">
                <h5 class="text-center"><?= $this->session->userdata('reset_email'); ?></h5>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter your new password" required autofocus />
				<?= form_error('password1', '<small class="text-danger pl-1">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat password" required />
				<?= form_error('password2', '<small class="text-danger pl-1">', '</small>'); ?>
			</div>
			<div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Change My Password</button>
			</div>
		</form>
        <hr>
		<div class="text-center">
			<a href="<?= base_url(); ?>"><small>&larr; Back to Login Page</small></a>
		</div>
	</div>
</div>