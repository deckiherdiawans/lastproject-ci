<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<div class="dashboard-wrapper">
    <div>
        <table class="table bg-white">
            <tr>
                <th rowspan="8" class="text-center bg-danger">
                    <img src="<?= base_url('images/'); ?><?= $agent['image']; ?>" class="shadow">
                </th>
                <th>Agent Name</th>
                <td><?= $agent['name']; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?= $agent['address']; ?></td>
            </tr>
            <tr>
                <th>City</th>
                <td><?= $agent['city']; ?></td>
            </tr>
            <tr>
                <th>Mobile Phone</th>
                <td><?= $agent['phone']; ?></td>
            </tr>
            <tr>
                <th>Email Address</th>
                <td><?= $agent['email']; ?></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><?= $agent['username']; ?></td>
            </tr>
            <tr>
                <th>Role ID</th>
                <td><?= $agent['role_id']; ?></td>
            </tr>
            <tr>
                <th>Status ID</th>
                <td><?= $agent['is_active']; ?></td>
            </tr>
        </table>
    </div>
</div>