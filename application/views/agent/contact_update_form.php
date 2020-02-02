<div class="dashboard-wrapper">
    <div class="card">
        <div class="card-body">
            <?= form_open_multipart('agent/update_contact/'); ?>
                <input type="hidden" id="id" name="id" value="<?= $contact['id']; ?>" ?>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Contact Name</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $contact['name']; ?>" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="company_brand" class="col-sm-2 col-form-label">Company Brand</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="company_brand" name="company_brand" value="<?= $contact['company_brand']; ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="branch_address" class="col-sm-2 col-form-label">Branch Address</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="branch_address" name="branch_address" value="<?= $contact['branch_address']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="branch_city" class="col-sm-2 col-form-label">Branch City</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="branch_city" name="branch_city" value="<?= $contact['branch_city']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Mobile Phone</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="phone" name="phone" value="<?= $contact['phone']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="email" class="form-control" id="email" name="email" value="<?= $contact['email']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="username" name="username" value="<?= $contact['username']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="note" class="col-sm-2 col-form-label">Note</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="note" name="note" value="<?= $contact['note']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="is_active" class="col-sm-2 col-form-label">Status ID</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="is_active" name="is_active" value="<?= $contact['is_active']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Profile Picture</label>
                    <div class="col-sm-3 contact-field-custom">
                        <img src="<?= base_url('images/'); ?><?= $contact['image']; ?>" class="img-thumbnail" id="image-preview">
                    </div>
                    <div class="col-sm-7">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label for="image" class="custom-file-label"><?= $contact['image']; ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row float-right">
                    <a href="<?= base_url('agent/contacts/'); ?>" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary ml-3 mr-3">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>