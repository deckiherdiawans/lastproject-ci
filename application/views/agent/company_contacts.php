<div class="dashboard-wrapper">
    <form method="post" action="">
        <div class="input-group mb-2">
            <input type="text" class="form-control" id="searchcompanycontact" name="searchcompanycontact" placeholder="Search contact...">
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
                <th scope="col">Contact Name</th>
                <th scope="col">Branch Address</th>
                <th scope="col">Branch City</th>
                <th scope="col">Mobile Phone</th>
                <th scope="col">Email Address</th>
                <th scope="col">Note</th>
            </tr>
        </thead>
        <tbody>
            <?php $c = 1; foreach($companycontacts as $coco) : ?>
            <tr>
                <th scope="row"><?= $c; ?></th>
                <td><img src="<?= base_url('images/'); ?><?= $coco['image']; ?>" class="user-avatar-md"></td>
                <td><?= $coco['name']; ?></td>
                <td><?= $coco['branch_address']; ?></td>
                <td><?= $coco['branch_city']; ?></td>
                <td><?= $coco['phone']; ?></td>
                <td><?= $coco['email']; ?></td>
                <td><?= $coco['note']; ?></td>
            </tr>
            <?php $c++; endforeach; ?>
        </tbody>
    </table>
</div>