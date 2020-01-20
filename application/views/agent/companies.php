<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<div class="dashboard-wrapper">
    <form method="post" action="">
        <div class="input-group mb-2">
            <input type="text" class="form-control" id="searchcompany" name="searchcompany" placeholder="Search company...">
            <div class="input-group-append">
                <button type="submit" class="btn btn-warning icon-color"><i class="fas fa-search pl-4 pr-4"></i></button>
            </div>
        </div>
    </form>
    <table class="table table-hover bg-white text-center">
        <thead class="thead-company-custom">
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Company</th>
                <th scope="col">Contacts</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php $c = 1; foreach($companies as $com) : ?>
            <?php
                $co = $com['brand'];
                $queryContacts = "SELECT COUNT(*) AS `cons` FROM `contacts` WHERE `company_brand` = '$co'";
                $contacts = $this->db->query($queryContacts)->row_array();
            ?>
            <tr>
                <th scope="row"><?= $c; ?></th>
                <td><img src="<?= base_url('images/'); ?><?= $com['logo']; ?>" class="user-avatar-md"></td>
                <td><a href="<?= base_url('agent/company_details/'); ?><?= $com['id']; ?>/" class="text-decor"><?= $com['brand']; ?></a></td>
                <td><a href="<?= base_url('agent/company_contacts/'); ?><?= $com['brand']; ?>/" class="text-decor"><?= $contacts['cons']; ?></a></td>
                <td>
                    <a href="<?= base_url('agent/company_update_form/'); ?><?= $com['id']; ?>/" class="btn-sm btn-success text-decor">
                        Update
                    </a>
                </td>
                <td>
                    <a href="<?= base_url('agent/delete_company/'); ?><?= $com['id']; ?>/" class="btn-sm btn-danger text-decor" onclick="return confirm('Are you sure?');">
                        Delete
                    </a>
                </td>
            </tr>
            <?php $c++; endforeach; ?>
        </tbody>
    </table>
</div>