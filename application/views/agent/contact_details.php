<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<div class="dashboard-wrapper">
    <div>
        <table class="table bg-white">
            <tr>
                <th rowspan="9" class="text-center bg-purple">
                    <img src="<?= base_url('images/'); ?><?= $contact['image']; ?>" class="shadow">
                </th>
                <th>Contact Name</th>
                <td><?= $contact['name']; ?></td>
            </tr>
            <tr>
                <th>Branch Address</th>
                <td><?= $contact['branch_address']; ?></td>
            </tr>
            <tr>
                <th>Branch City</th>
                <td><?= $contact['branch_city']; ?></td>
            </tr>
            <tr>
                <th>Mobile Phone</th>
                <td><?= $contact['phone']; ?></td>
            </tr>
            <tr>
                <th>Email Address</th>
                <td><?= $contact['email']; ?></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><?= $contact['username']; ?></td>
            </tr>
            <tr>
                <th>Note</th>
                <td><?= $contact['note']; ?></td>
            </tr>
            <tr>
                <th>Role ID</th>
                <td><?= $contact['role_id']; ?></td>
            </tr>
            <tr>
                <th>Status ID</th>
                <td><?= $contact['is_active']; ?></td>
            </tr>
        </table>
    </div>
</div>