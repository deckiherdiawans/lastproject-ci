<div class="dashboard-wrapper">
    <div class="card">
        <div class="card-body">
            <?= form_open_multipart('agent/update_agent/'); ?>
                <input type="hidden" id="id" name="id" value="<?= $agent['id']; ?>" ?>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Agent Name</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $agent['name']; ?>" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="text" class="form-control" id="address" name="address" value="<?= $agent['address']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="text" class="form-control" id="city" name="city" value="<?= $agent['city']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Mobile Phone</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="text" class="form-control" id="phone" name="phone" value="<?= $agent['phone']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="email" class="form-control" id="email" name="email" value="<?= $agent['email']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="text" class="form-control" id="username" name="username" value="<?= $agent['username']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role_id" class="col-sm-2 col-form-label">Role ID</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="text" class="form-control" id="role_id" name="role_id" value="<?= $agent['role_id']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="is_active" class="col-sm-2 col-form-label">Status ID</label>
                    <div class="col-sm-10 agent-field-custom">
                        <input type="text" class="form-control" id="is_active" name="is_active" value="<?= $agent['is_active']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Profile Picture</label>
                    <div class="col-sm-3 agent-field-custom">
                        <img src="<?= base_url('images/'); ?><?= $agent['image']; ?>" class="img-thumbnail" id="image-preview">
                    </div>
                    <div class="col-sm-7">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label for="image" class="custom-file-label"><?= $agent['image']; ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row float-right">
                    <a href="<?= base_url('agent/agents/'); ?>" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary ml-3 mr-3">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>