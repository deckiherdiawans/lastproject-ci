<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="<?= base_url('images/'); ?>iconrevota.jpg">
        <title>Revota Support System</title>
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/fonts/fontawesome/css/fontawesome-all.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>libs/css/sb-admin-2.min.css" >
    </head>
    <body>
        <div class="container-fluid">
            <div class="text-center">
                <div class="error mx-auto" data-text="403">403</div>
                <p class="lead text-gray-800 mb-5">Access Forbidden</p>
                <p class="text-gray-500 mb-5">Don't even think about it.</p>
                <?php if ($this->session->userdata('role_id') == 1) : ?>
                    <a href="<?= base_url('agent/'); ?>">&larr; Back to your site</a>
                <?php elseif ($this->session->userdata('role_id') == 2) : ?>
                    <a href="<?= base_url('staff/'); ?>">&larr; Back to your site</a>
                <?php else : ?>
                    <a href="<?= base_url('client/'); ?>">&larr; Back to your site</a>
                <?php endif; ?>
            </div>
        </div>
        <!-- jquery 3.3.1 -->
        <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery-3.3.1.min.js"></script>
        <!-- bootstrap bundle js -->
        <script src="<?= base_url('assets/'); ?>bootstrap-441/js/bootstrap.bundle.js"></script>
    </body>
</html>