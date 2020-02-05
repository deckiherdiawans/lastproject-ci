<div class="dashboard-wrapper mt-2">
    <div class="card bt-style">
        <div class="card-body">
            <?= form_open_multipart('client/ticket_form/'); ?>
                <div>
                    <h5 class="text-center">New Support Ticket</h5>
                </div>
                <hr>
                <input type="hidden" class="form-control" id="created_by" name="created_by" value="<?= $this->session->userdata('name'); ?>">
                <input type="hidden" class="form-control" id="contact_name" name="contact_name" value="<?= $this->session->userdata('name'); ?>">
                <input type="hidden" class="form-control" id="company_brand" name="company_brand" value="<?= $this->session->userdata('company_brand'); ?>">
                <input type="hidden" class="form-control" id="contact_email" name="contact_email" value="<?= $this->session->userdata('email'); ?>">
                <input type="hidden" class="form-control" id="contact_image" name="contact_image" value="<?= $this->session->userdata('image'); ?>">
                <input type="hidden" class="form-control" id="priority" name="priority" value="---">
                <input type="hidden" class="form-control" id="agent_name" name="agent_name" value="---">
                <input type="hidden" class="form-control" id="status" name="status" value="Open">
                <div class="form-group row">
                    <label for="type" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10 contact-field-custom">
                        <select class="form-control" id="type" name="type" autofocus>
                            <option>---</option>
                            <option>On The Spot</option>
                            <option>Remote</option>
                            <option>Visit</option>
                        </select>
                        <?= form_error('type', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="module" class="col-sm-2 col-form-label">Module</label>
                    <div class="col-sm-10 contact-field-custom">
                        <select class="form-control" id="module" name="module">
                            <option>---</option>
                            <option>Distribution</option>
                            <option>Expo</option>
                            <option>Online</option>
                            <option>Production</option>
                            <option>Shop</option>
                            <option>Wholesale</option>
                        </select>
                        <?= form_error('module', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                    <div class="col-sm-10 contact-field-custom select-editable">
                        <select class="form-control-custom" onchange="this.nextElementSibling.value=this.value">
                            <option>---</option>
                            <?php foreach($subject as $sub) : ?>
                                <option><?= $sub['subject']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <input class="form-control-custom" id="subject" name="subject" value="<?= set_value('subject'); ?>" placeholder="---">
                        <?= form_error('subject', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10 contact-field-custom">
                        <textarea class="form-control" id="description" name="description" value="<?= set_value('description'); ?>"></textarea>
                        <?= form_error('description', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row float-right">
                    <a href="<?= base_url('client/'); ?>" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary ml-3 mr-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
<script>
    ClassicEditor
        .create (document.querySelector('#description'))
        .then (description => {
            console.log(description);
        })
        .catch (error => {
            console.error(error);
        });
</script>