<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<div class="dashboard-wrapper">
    <form method="post" action="">
        <div class="input-group mb-2">
            <input type="text" class="form-control" id="searchcontact" name="searchcontact" placeholder="Search contact...">
            <div class="input-group-append">
                <button type="submit" class="btn btn-color icon-color"><i class="fas fa-search pl-4 pr-4"></i></button>
            </div>
        </div>
    </form>
    <table class="table table-hover bg-white text-center">
        <thead class="thead-contact-custom">
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Contact</th>
                <th scope="col">Company</th>
                <th scope="col">Email Address</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php $c = 1; foreach($contacts as $cons) : ?>
            <tr>
                <th scope="row"><?= $c; ?></th>
                <td><img src="<?= base_url('images/'); ?><?= $cons['image']; ?>" class="user-avatar-md"></td>
                <td><a href="<?= base_url('agent/contact_details/'); ?><?= $cons['id']; ?>/" class="text-decor"><?= $cons['name']; ?></a></td>
                <td><?= $cons['company_brand']; ?></td>
                <td><?= $cons['email']; ?></td>
                <td>
                    <a href="<?= base_url('agent/contact_update_form/'); ?><?= $cons['id']; ?>/" class="btn-sm btn-success text-decor">
                        Update
                    </a>
                </td>
                <td>
                    <a href="<?= base_url('agent/delete_contact/'); ?><?= $cons['id']; ?>/" class="btn-sm btn-danger text-decor" onclick="return confirm('Are you sure?');">
                        Delete
                    </a>
                </td>
            </tr>
            <?php $c++; endforeach; ?>
        </tbody>
    </table>
</div>