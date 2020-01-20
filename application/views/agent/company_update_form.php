<div class="dashboard-wrapper">
    <div class="card">
        <div class="card-body">
            <?= form_open_multipart('agent/update_company/'); ?>
                <input type="hidden" id="id" name="id" value="<?= $company['id']; ?>" ?>
                <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">Company Brand</label>
                    <div class="col-sm-10 company-field-custom">
                        <input type="text" class="form-control" id="brand" name="brand" value="<?= $company['brand']; ?>" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="headquarter_address" class="col-sm-2 col-form-label">Headquarter Address</label>
                    <div class="col-sm-10 company-field-custom">
                        <input type="text" class="form-control" id="headquarter_address" name="headquarter_address" value="<?= $company['headquarter_address']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="headquarter_city" class="col-sm-2 col-form-label">Headquarter City</label>
                    <div class="col-sm-10 company-field-custom">
                        <input type="text" class="form-control" id="headquarter_city" name="headquarter_city" value="<?= $company['headquarter_city']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="logo" class="col-sm-2 col-form-label">Company Logo</label>
                    <div class="col-sm-3 company-field-custom">
                        <img src="<?= base_url('images/'); ?><?= $company['logo']; ?>" class="img-thumbnail" id="image-preview">
                    </div>
                    <div class="col-sm-7">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="logo" name="logo">
                            <label for="logo" class="custom-file-label"><?= $company['logo']; ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row float-right">
                    <a href="<?= base_url('agent/companies/'); ?>" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary ml-3 mr-3">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>