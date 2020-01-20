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
                <th class="text-right th-profile-custom">Company Brand</th>
                <td class="text-left td-profile-custom"><?= $this->session->userdata('company_brand'); ?></td>
            </tr>
            <tr>
                <th class="text-right th-profile-custom">Branch Address</th>
                <td class="text-left td-profile-custom"><?= $this->session->userdata('branch_address'); ?></td>
            </tr>
            <tr>
                <th class="text-right th-profile-custom">Branch City</th>
                <td class="text-left td-profile-custom"><?= $this->session->userdata('branch_city'); ?></td>
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
            <tr>
                <th class="text-right th-profile-custom">Note</th>
                <td class="text-left td-profile-custom"><?= $this->session->userdata('note'); ?></td>
            </tr>
        </table>
    </div>
</div>