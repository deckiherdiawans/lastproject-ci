<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<div class="dashboard-wrapper">
    <form method="post" action="">
        <div class="input-group mb-2">
            <input type="text" class="form-control" id="searchagent" name="searchagent" placeholder="Search agent...">
            <div class="input-group-append">
                <button type="submit" class="btn btn-danger"><i class="fas fa-search pl-4 pr-4"></i></button>
            </div>
        </div>
    </form>
    <table class="table table-hover bg-white text-center">
        <thead class="thead-agent-custom">
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Agent</th>
                <th scope="col">Email Address</th>
                <th scope="col">Role ID</th>
                <th scope="col">Status ID</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php $a = 1; foreach($agents as $as) : ?>
            <tr>
                <th scope="row"><?= $a; ?></th>
                <td><img src="<?= base_url('images/'); ?><?= $as['image']; ?>" class="user-avatar-md"></td>
                <td><a href="<?= base_url('agent/agent_details/'); ?><?= $as['id']; ?>/" class="text-decor"><?= $as['name']; ?></a></td>
                <td><?= $as['email']; ?></td>
                <td><?= $as['role_id']; ?></td>
                <td><?= $as['is_active']; ?></td>
                <td>
                    <a href="<?= base_url('agent/agent_update_form/'); ?><?= $as['id']; ?>/" class="btn-sm btn-success text-decor">
                        Update
                    </a>
                </td>
                <td>
                    <a href="<?= base_url('agent/delete_agent/'); ?><?= $as['id']; ?>/" class="btn-sm btn-danger text-decor" onclick="return confirm('Are you sure?');">
                        Delete
                    </a>
                </td>
            </tr>
            <?php $a++; endforeach; ?>
        </tbody>
    </table>
</div>