<div class="dashboard-wrapper mt-2">
    <div class="card bt-style">
        <div class="card-body">
            <?= form_open_multipart('client/update_ticket/'); ?>
                <div>
                    <h5 class="text-center">Update Ticket</h5>
                </div>
                <hr>
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $ticket['id']; ?>">
                <div class="form-group row">
                    <label for="type" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10 contact-field-custom">
                        <select class="form-control" id="type" name="type" required autofocus>
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
                    <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                    <div class="col-sm-10 contact-field-custom select-editable">
                        <select class="form-control-custom" onchange="this.nextElementSibling.value=this.value">
                            <?php foreach ($subject as $sub) : ?>
                                <?php if ($sub['subject'] == $ticket['subject']) : ?>
                                    <option selected><?= $sub['subject']; ?></option>
                                <?php else : ?>
                                    <option><?= $sub['subject']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <input class="form-control-custom" id="subject" name="subject" value="<?= $ticket['subject']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10 contact-field-custom">
                        <textarea class="form-control" id="description" name="description" required><?= $ticket['description']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row float-right">
                    <a href="<?= base_url('client/ticket_details/'); ?><?= $ticket['id']; ?>/" class="btn btn-secondary">Cancel</a>
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