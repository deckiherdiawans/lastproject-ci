<?php if ($this->session->flashdata('flash-error')) : ?>
	<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('flash-error'); ?>"></div>
<?php elseif ($this->session->flashdata('flash-success')) : ?>
	<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('flash-success'); ?>"></div>
<?php endif; ?>

<div id="panel">
	<div class="text-center" id="login-panel">
		<img src="<?= base_url('images/'); ?>logorevota.jpg" />
		<h2>Forgot Password</h2>
		<form method="post" action="<?= base_url('auth/forgotpassword/'); ?>">
			<div class="form-group">
			    <label for="email"><small>
			    	Enter your email address below and we will send you a link to reset your password.
			    </small></label>
			    <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required autofocus />
			</div>
			<div class="row">
				<div class="col">
					<button type="submit" class="btn btn-primary">Reset My Password</button>
				</div>
				<div class="col">
					<a href="<?= base_url(); ?>" class="col btn btn-secondary">Cancel</a>
				</div>
			</div>
		</form>
	</div>
</div>