<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<div class="dashboard-wrapper">
    <div class="bg-info text-center">
        <img src="<?= base_url('images/'); ?><?= $this->session->userdata('image'); ?>" class="shadow">
        <table class="table bg-white">
            <tr>
                <th class="text-right th-profile-custom">Name</th>
                <td class="text-left td-profile-custom"><?= $this->session->userdata('name'); ?></td>
            </tr>
            <tr>
                <th class="text-right th-profile-custom">Address</th>
                <td class="text-left td-profile-custom"><?= $this->session->userdata('address'); ?></td>
            </tr>
            <tr>
                <th class="text-right th-profile-custom">City</th>
                <td class="text-left td-profile-custom"><?= $this->session->userdata('city'); ?></td>
            </tr>
            <tr>
                <th class="text-right th-profile-custom">Mobile Phone</th>
                <td class="text-left td-profile-custom"><?= $this->session->userdata('phone'); ?></td>
            </tr>
            <tr>
                <th class="text-right th-profile-custom">Email Address</th>
                <td class="text-left td-profile-custom"><?= $this->session->userdata('email'); ?></td>
            </tr>
            <tr>
                <th class="text-right th-profile-custom">Username</th>
                <td class="text-left td-profile-custom"><?= $this->session->userdata('username'); ?></td>
            </tr>
        </table>
    </div>
</div>