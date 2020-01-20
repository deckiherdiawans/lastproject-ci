<div class="dashboard-wrapper">
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= base_url('agent/company_form/'); ?>">
                <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">Company Brand</label>
                    <div class="col-sm-10 company-field-custom">
                        <input type="text" class="form-control" id="brand" name="brand" value="<?= set_value('brand'); ?>" autofocus>
                        <?= form_error('brand', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="headquarter_address" class="col-sm-2 col-form-label">Headquarter Address</label>
                    <div class="col-sm-10 company-field-custom">
                        <input type="text" class="form-control" id="headquarter_address" name="headquarter_address" value="<?= set_value('headquarter_address'); ?>">
                        <?= form_error('headquarter_address', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="headquarter_city" class="col-sm-2 col-form-label">Headquarter City</label>
                    <div class="col-sm-10 company-field-custom">
                        <input type="text" class="form-control" id="headquarter_city" name="headquarter_city" value="<?= set_value('headquarter_city'); ?>">
                        <?= form_error('headquarter_city', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="logo" class="col-sm-2 col-form-label">Company Logo</label>
                    <div class="col-sm-3 company-field-custom">
                        <img src="<?= base_url('images/'); ?>default_building1.png" class="img-thumbnail" id="image-preview">
                    </div>
                    <div class="col-sm-7">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="logo" name="logo">
                            <label for="logo" class="custom-file-label">Choose file</label>
                            <?= form_error('logo', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row float-right">
                    <a href="<?= base_url('agent/companies/'); ?>" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary ml-3 mr-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>