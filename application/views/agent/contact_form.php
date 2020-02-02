<div class="dashboard-wrapper">
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= base_url('agent/contact_form/'); ?>">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Contact Name</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>" autofocus>
                        <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="company_brand" class="col-sm-2 col-form-label">Company Brand</label>
                    <div class="col-sm-10 contact-field-custom">
                        <select class="form-control" id="company_brand" name="company_brand" onchange="autofill()">
                            <option>--Choose company--</option>
                            <?php foreach($company as $com) : ?>
                                <option><?= $com['brand']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('company_brand', '<small class="text-danger pl-1">', '</small>'); ?>
                        <a href="<?= base_url('agent/company_form/'); ?>" class="float-right pr-1">Add New Company</a>
                    </div>
                </div>
                <input type="hidden" class="form-control" id="company_id" name="company_id">
                <div class="form-group row">
                    <label for="branch_address" class="col-sm-2 col-form-label">Branch Address</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="branch_address" name="branch_address" value="<?= set_value('branch_address'); ?>">
                        <?= form_error('branch_address', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="branch_city" class="col-sm-2 col-form-label">Branch City</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="branch_city" name="branch_city" value="<?= set_value('branch_city'); ?>">
                        <?= form_error('branch_city', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Mobile Phone</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="phone" name="phone" value="<?= set_value('phone'); ?>">
                        <?= form_error('phone', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username'); ?>">
                        <?= form_error('username', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="password" class="form-control" id="password" name="password">
                        <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="note" class="col-sm-2 col-form-label">Note</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="note" name="note" value="<?= set_value('note'); ?>">
                        <?= form_error('note', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Profile Picture</label>
                    <div class="col-sm-3 contact-field-custom">
                        <img src="<?= base_url('images/'); ?>default_user1.jpg" class="img-thumbnail" id="image-preview">
                    </div>
                    <div class="col-sm-7">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label for="image" class="custom-file-label">Choose file</label>
                            <?= form_error('image', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row float-right">
                    <a href="<?= base_url('agent/contacts/'); ?>" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary ml-3 mr-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    function autofill() {
        var brand = $("#company_brand").val();
        $.ajax ({
            url: "<?= base_url('agent/ajax_contact/'); ?>",
            data: {brand:brand},
            success: function(data) {
                var json = data,
                obj = JSON.parse(json);
                $("#company_id").val(obj.id);
                $("#branch_address").val(obj.headquarter_address);
                $("#branch_city").val(obj.headquarter_city);
            }
        })
    }
</script>