<div class="dashboard-wrapper">
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= base_url('agent/agent_form/'); ?>">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Agent Name</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>" autofocus>
                        <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="text" class="form-control" id="address" name="address" value="<?= set_value('address'); ?>">
                        <?= form_error('address', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="text" class="form-control" id="city" name="city" value="<?= set_value('city'); ?>">
                        <?= form_error('city', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Mobile Phone</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="text" class="form-control" id="phone" name="phone" value="<?= set_value('phone'); ?>">
                        <?= form_error('phone', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username'); ?>">
                        <?= form_error('username', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="password" class="form-control" id="password" name="password">
                        <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role_id" class="col-sm-2 col-form-label">Role ID</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="text" class="form-control" id="role_id" name="role_id" value="<?= set_value('role_id'); ?>">
                        <?= form_error('role_id', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Profile Picture</label>
                    <div class="col-sm-3 agent-field-custom">
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
                    <a href="<?= base_url('agent/agents/'); ?>" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary ml-3 mr-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>