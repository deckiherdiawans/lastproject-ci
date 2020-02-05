<div class="dashboard-wrapper mt-2">
    <div class="card bt-style">
        <div class="card-body">
            <?= form_open_multipart('staff/update_ticket/'); ?>
                <div>
                    <h5 class="text-center">Update Ticket</h5>
                </div>
                <hr>
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $ticket['id']; ?>">
                <input type="hidden" class="form-control" id="agent_name" name="agent_name" value="<?= $ticket['agent_name']; ?>">
                <div class="form-group row">
                    <label for="contact_name" class="col-sm-2 col-form-label">Contact Name</label>
                    <div class="col-sm-10 contact-field-custom">
                        <select class="form-control" id="contact_name" name="contact_name" onchange="autofill()" required autofocus>
                            <?php foreach($contact as $con) : ?>
                                <?php if ($con['name'] == $ticket['contact_name']) : ?>
                                    <option selected><?= $con['name']; ?></option>
                                <?php else : ?>
                                    <option><?= $con['name']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="company_brand" class="col-sm-2 col-form-label">Company Brand</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="company_brand" name="company_brand" value="<?= $ticket['company_brand']; ?>" readonly>
                    </div>
                </div>
                <input type="hidden" class="form-control" id="contact_email" name="contact_email" value="<?= $ticket['contact_email']; ?>">
                <input type="hidden" class="form-control" id="contact_image" name="contact_image" value="<?= $ticket['contact_image']; ?>">
                <div class="form-group row">
                    <label for="type" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10 contact-field-custom">
                        <select class="form-control" id="type" name="type" required>
                            <?php foreach ($type as $ty) : ?>
                                <?php if ($ty == $ticket['type']) : ?>
                                    <option selected><?= $ty; ?></option>
                                <?php else : ?>
                                    <option><?= $ty; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="module" class="col-sm-2 col-form-label">Module</label>
                    <div class="col-sm-10 contact-field-custom">
                        <select class="form-control" id="module" name="module" required>
                            <?php foreach ($module as $mod) : ?>
                                <?php if ($mod == $ticket['module']) : ?>
                                    <option selected><?= $mod; ?></option>
                                <?php else : ?>
                                    <option><?= $mod; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="priority" class="col-sm-2 col-form-label">Priority</label>
                    <div class="col-sm-10 contact-field-custom">
                        <select class="form-control" id="priority" name="priority" required>
                            <?php foreach ($priority as $pri) : ?>
                                <?php if ($pri == $ticket['priority']) : ?>
                                    <option selected><?= $pri; ?></option>
                                <?php else : ?>
                                    <option><?= $pri; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10 contact-field-custom">
                        <select class="form-control" id="status" name="status" required>
                            <?php foreach ($status as $stat) : ?>
                                <?php if ($stat == $ticket['status']) : ?>
                                    <option selected><?= $stat; ?></option>
                                <?php else : ?>
                                    <option><?= $stat; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="note" class="col-sm-2 col-form-label">Note</label>
                    <div class="col-sm-10 contact-field-custom">
                        <input type="text" class="form-control" id="note" name="note" value="<?= $ticket['note']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                    <div class="col-sm-10 contact-field-custom select-editable">
                        <select class="form-control-custom" onchange="this.nextElementSibling.value=this.value">
                            <?php foreach($subject as $sub) : ?>
                                <?php if ($sub['subject'] == $ticket['subject']) : ?>
                                    <option selected><?= $sub['subject']; ?></option>
                                <?php else : ?>
                                    <option><?= $sub['subject']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <input class="form-control-custom" id="subject" name="subject" value="<?= $ticket['subject']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10 contact-field-custom">
                        <textarea class="form-control" id="description" name="description" required><?= $ticket['description']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row float-right">
                    <a href="<?= base_url('staff/ticket_details/'); ?><?= $ticket['id']; ?>/" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary ml-3 mr-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    function autofill() {
        var name = $("#contact_name").val();
        $.ajax ({
            url: "<?= base_url('staff/ajax_ticket/'); ?>",
            data: {name:name},
            success: function(data) {
                var json = data,
                obj = JSON.parse(json);
                $("#company_brand").val(obj.company_brand);
                $("#contact_email").val(obj.email);
                $("#contact_image").val(obj.image);
            }
        })
    }
</script>
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