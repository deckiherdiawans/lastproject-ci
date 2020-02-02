<!DOCTYPE html>
<html class="bg-white">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
    	<link rel="icon" type="image/png" href="<?= base_url('images/'); ?>iconrevota.jpg">
    	<title>Revota Support System</title>
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap-441/css/bootstrap.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>libs/css/style-agent.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/fonts/fontawesome/css/fontawesome-all.css">
    </head>
    
    <body class="bg-white">
        <table class="table">
            <th class="text-center pt-4"><h5>PT. Ava Revota</h5></th>
        </table>
        <table class="table">
            <tbody>
                <tr>
                    <th class="text-center pt-4"><h5><?= str_replace('%20', ' ', $this->uri->segment(3)); ?> Contact List</h5></th>
                </tr>
                <tr>
                    <td class="text-center" id="no-border"><h5>Headquarter Address: <?= $company['headquarter_address']; ?>, <?= $company['headquarter_city']; ?></h5></td>
                </tr>
            </tbody>
        </table>
        <table class="table bg-white text-center">
            <thead>
                <tr>
                    <th scope="col">No.</th>
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
        <hr>

        <script type="text/javascript">
            setTimeout("window.print()", 1);
        </script>
    </body>
</html>