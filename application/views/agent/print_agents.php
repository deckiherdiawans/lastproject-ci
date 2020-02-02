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
            <tbody>
                <tr>
                    <th class="text-center pt-4"><h5>PT. Ava Revota</h5></th>
                </tr>
                <tr>
                    <td class="text-center" id="no-border"><h5>Agent List</h5></td>
                </tr>
            </tbody>
        </table>
        <table class="table bg-white text-center">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col"></th>
                    <th scope="col">Agent Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Mobile Phone</th>
                    <th scope="col">Email Address</th>
                </tr>
            </thead>
            <tbody>
                <?php $c = 1; foreach($agents as $ag) : ?>
                <tr>
                    <th scope="row"><?= $c; ?></th>
                    <td><img src="<?= base_url('images/'); ?><?= $ag['image']; ?>" class="user-avatar-md"></td>
                    <td><?= $ag['name']; ?></td>
                    <td><?= $ag['address']; ?></td>
                    <td><?= $ag['city']; ?></td>
                    <td><?= $ag['phone']; ?></td>
                    <td><?= $ag['email']; ?></td>
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