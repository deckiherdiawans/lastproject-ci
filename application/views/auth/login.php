<?php if ($this->session->flashdata('flash-error')) : ?>
	<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('flash-error'); ?>"></div>
<?php elseif ($this->session->flashdata('flash-success')) : ?>
	<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('flash-success'); ?>"></div>
<?php else : ?>
	<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<?php endif; ?>

<div id="panel">
	<div id="login-panel">
		<div class="text-center">
			<img src="<?= base_url('images/'); ?>logorevota.jpg">
			<h2>Revota<br />Support System</h2>
		</div>
		<form method="post" action="<?= base_url('auth/'); ?>">
			<div class="form-group row">
				<label for="username" class="col-sm-2 col-form-label ml-1">Username</label>
				<div class="col-sm-9 ml-4">
					<input type="text" class="form-control" id="username" name="username" value="<?= set_value('username'); ?>" required autofocus>
				</div>
			</div>
			<div class="form-group row">
				<label for="password" class="col-sm-2 col-form-label ml-1">Password</label>
				<div class="col-sm-9 ml-4">
					<input type="password" class="form-control" id="password" name="password" required>
				</div>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Log In</button>
		</form>
		<hr>
		<div class="text-center">
			<a href="<?= base_url('auth/forgotpassword/'); ?>"><small>Forgot Password?</small></a>
		</div>
	</div>
</div>