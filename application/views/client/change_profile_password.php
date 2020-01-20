<div class="dashboard-wrapper">
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= base_url('client/changeProfilePassword/'); ?>">
                <div>
                    <h5 class="text-center">Change Password</h5>
                </div>
                <hr>
                <div class="form-group row mb-3">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10 pass-profile-custom">
                        <input type="text" class="form-control" id="username" name="username" value="<?= $this->session->userdata['username']; ?>" readonly />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password1" class="col-sm-2 col-form-label">Enter Your New Password</label>
                    <div class="col-sm-10 pass-profile-custom">
                        <input type="password" class="form-control" id="password1" name="password1" required autofocus />
                        <span class="message pl-1"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password2" class="col-sm-2 col-form-label">Repeat Your Password</label>
                    <div class="col-sm-10 pass-profile-custom">
                        <input type="password" class="form-control" id="password2" name="password2" required />
                        <span class="message pl-1"></span>
                    </div>
                </div>
                <div class="form-group row float-right">
                    <a href="<?= base_url('client/profile/'); ?>" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary ml-3 mr-3">Change Password</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery-3.3.1.min.js"></script>
<script>
    $('#password1, #password2').on('keyup', function () {
        if ($('#password1').val() == $('#password2').val()) {
            $('.message').html('Matching').css('color', 'green');
        } else {
            $('.message').html('Not Matching').css('color', 'red');
        };
    });
</script>