<?php
    $via = null;
    if ($ticket['created_by'] === $ticket['contact_name']) {
        $via = "the portal";
    } else {
        $via = "phone";
    }
?>

<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<div class="dashboard-wrapper mt-2">
    <div class="card bt-style">
        <div class="card-body">
            <div class="text-center"><h5>Ticket Details</h5></div>
            <hr>
            <div class="row ml-2 mr-2">
                <img src="<?= base_url('images/'); ?><?= $ticket['contact_image']; ?>" class="user-avatar-md ml-1 mt-2 mb-3 mr-4">
                <div>
                    <h5><?= $ticket['subject']; ?> #<?= $ticket['id']; ?></h5>
                    <p>
                        <b><?= $ticket['contact_name']; ?> (<?= $ticket['company_brand']; ?>)</b> 
                        reported via <?= $via; ?> on <b><?= date("d F Y", strtotime($ticket['date_created'])); ?></b> 
                        at <b><?= date("H:i", strtotime($ticket['date_created'])); ?></b>
                    </p>
                </div>
                <div class="detail-box mb-3">
                    <?= $ticket['description']; ?>
                    <?php if ($ticket['note'] <> null) : ?>
                        <hr>
                        <b>Note</b><br>
                        <p><?= $ticket['note']; ?>
                    <?php endif; ?>
                </div>
                <table class="no-border text-center w-100">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Module</th>
                            <th>Assignee</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $ticket['type']; ?></td>
                            <td><?= $ticket['module']; ?></td>
                            <td><?= $ticket['agent_name']; ?></td>
                            <td><?= $ticket['status']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>