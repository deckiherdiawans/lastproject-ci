<?php
    $via = null;
    if ($ticket['created_by'] === $ticket['contact_name']) {
        $via = "the portal";
    } else {
        $via = "phone";
    }
?>

<div class="dashboard-wrapper mt-2">
    <div class="card">
        <div class="card-body">
            <div class="row ml-2 mr-2">
                <img src="<?= base_url('images/'); ?><?= $ticket['contact_image']; ?>" class="user-avatar-md mr-4 mt-2">
                <div>
                    <h5><?= $ticket['subject']; ?></h5>
                    <p><b><?= $ticket['contact_name']; ?></b> reported via <?= $via; ?> on <?= date("d F Y", strtotime($ticket['date_created'])); ?></p>
                </div>
                <div class="detail-box">
                    <?= $ticket['description']; ?>  
                </div>
            </div>
        </div>
    </div>
</div>