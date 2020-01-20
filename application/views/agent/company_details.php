<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<div class="dashboard-wrapper">
    <div>
        <table class="table bg-white">
            <tr>
                <th rowspan="3" class="text-center bg-warning">
                    <img src="<?= base_url('images/'); ?><?= $company['logo']; ?>" class="shadow">
                </th>
                <th>Company Brand</th>
                <td><?= $company['brand']; ?></td>
            </tr>
            <tr>
                <th>Headquarter Address</th>
                <td><?= $company['headquarter_address']; ?></td>
            </tr>
            <tr>
                <th>Headquarter City</th>
                <td><?= $company['headquarter_city']; ?></td>
            </tr>
        </table>
    </div>
</div>