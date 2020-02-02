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
        <?php
            $via = null;
            if ($ticket['created_by'] === $ticket['contact_name']) {
                $via = "Portal";
            } else {
                $via = "Phone";
            }
        ?>

        <h5>
            <table class="table">
                <th class="pt-4">PT. Ava Revota</th>
                <td class="text-right pt-4"><b>#<?= $ticket['id']; ?></b></td>
            </table>
        </h5>
        <div>
            <table class="table">
                <tbody>
                    <tr>
                        <th class="text-center pt-4"><h5><b>Ticket Details</b></h5></th>
                    </tr>
                </tbody>
            </table>
            <div class="properties mb-5">
                <span>
                    <b>Type</b><br>
                    <?= $ticket['type']; ?>
                </span>
                <span>
                    <b>Module</b><br>
                    <?= $ticket['module']; ?>
                </span>
                <span>
                    <b>Priority</b><br>
                    <?= $ticket['priority']; ?>
                </span>
                <span>
                    <b>Agent</b><br>
                    <?= $ticket['agent_name']; ?>
                </span>
                <span>
                    <b>Status</b><br>
                    <?= $ticket['status']; ?>
                </span>
                <span>
                    <b>Start Time</b><br>
                    <?php if ($ticket['start_time'] == null OR $ticket['start_time'] === '0000-00-00 00:00:00') : ?>
                        ---
                    <?php else : ?>
                        <?= date("d F Y | H:i", strtotime($ticket['start_time'])); ?>
                    <?php endif; ?>
                </span>
                <span>
                    <b>Finish Time</b><br>
                    <?php if ($ticket['finish_time'] == null OR $ticket['finish_time'] === '0000-00-00 00:00:00') : ?>
                        ---
                    <?php else : ?>
                        <?= date("d F Y | H:i", strtotime($ticket['finish_time'])); ?>
                    <?php endif; ?>
                </span>
                <?php if ($ticket['note'] <> null) : ?>
                    <span>
                        <b>Note</b><br>
                        <?= $ticket['note']; ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <hr>
        <div class="ml-5 mr-5 mb-5">
            <p class="mt-5">
                <b><?= $ticket['contact_name']; ?></b> from <b><?= $ticket['company_brand']; ?></b> 
                reported via <b><?= $via; ?></b> on <b><?= date("d F Y", strtotime($ticket['date_created'])); ?></b> 
                at <b><?= date("H:i", strtotime($ticket['date_created'])); ?></b>
            </p>
            <br>
            <div><b><?= $ticket['subject']; ?></b></div>
            <br>
            <div><?= $ticket['description']; ?></div>
        </div>
        <hr>

        <script type="text/javascript">
            setTimeout("window.print()", 1);
        </script>
    </body>
</html>