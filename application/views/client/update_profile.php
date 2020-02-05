<div class="dashboard-wrapper">
    <div class="card">
        <div class="card-body">
            <?= form_open_multipart('client/updateprofile/'); ?>
                <div>
                    <h5 class="text-center">Update Profile</h5>
                </div>
                <hr>
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $this->session->userdata['id']; ?>">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $this->session->userdata['name']; ?>" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="company_brand" class="col-sm-2 col-form-label">Company Brand</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="company_brand" name="company_brand" value="<?= $this->session->userdata['company_brand']; ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="branch_address" class="col-sm-2 col-form-label">Branch Address</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="branch_address" name="branch_address" value="<?= $this->session->userdata['branch_address']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="branch_city" class="col-sm-2 col-form-label">Branch City</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="branch_city" name="branch_city" value="<?= $this->session->userdata['branch_city']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Mobile Phone</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="phone" name="phone" value="<?= $this->session->userdata['phone']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="email" class="form-control" id="email" name="email" value="<?= $this->session->userdata['email']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="username" name="username" value="<?= $this->session->userdata['username']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="note" class="col-sm-2 col-form-label">Note</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="note" name="note" value="<?= $this->session->userdata['note']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Profile Picture</label>
                    <div class="col-sm-3 contact-field-custom">
                        <img src="<?= base_url('images/'); ?><?= $this->session->userdata['image']; ?>" class="img-thumbnail" id="image-preview">
                    </div>
                    <div class="col-sm-7">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label for="image" class="custom-file-label"><?= $this->session->userdata['image']; ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row float-right">
                    <a href="<?= base_url('client/profile/'); ?>" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary ml-3 mr-3">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>