<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<div class="ticket-box">
    <?php if (!$tickets) : ?>
        <div class="dashboard-wrapper text-center">
            <h4>No tickets here.</h4>
            <p>You don't have any tickets today.</p>
            <a href="<?= base_url('client/ticket_form/'); ?>">Create new ticket</a>
        </div>
    <?php endif; ?>
    <?php foreach($tickets as $t) : ?>
        <div class="col-xl-auto mb-3">
            <div class="card shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <table class="no-border mr-5 tmr">
                            <tr>
                                <th rowspan="3">
                                    <a href="<?= base_url('client/ticket_details/'); ?><?= $t['id']; ?>/">
                                        <img src="<?= base_url('images/'); ?><?= $t['contact_image']; ?>" class="user-avatar-md mr-3">
                                    </a>
                                </th>
                                <td>#<?= $t['id']; ?></td>
                            <tr>
                                <td><a href="<?= base_url('client/ticket_details/'); ?><?= $t['id']; ?>/" id="ticket-link"><?= $t['subject']; ?><a></td>
                            </tr>
                            <tr>
                                <td><?= $t['contact_name']; ?> (<?= $t['company_brand']; ?>) | Created on <?= date("d F Y", strtotime($t['date_created'])); ?></td>
                            </tr>
                        </table>
                        <table class="no-border ml-5 tml">
                            <tr>
                                <td>Priority: <?= $t['priority']; ?></td>
                            </tr>
                            <tr>
                                <td>Assignee: <?= $t['agent_name']; ?></td>
                            </tr>
                            <tr>
                                <td>Status: <?= $t['status']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="ticket-filter">
    <div class="text-center mb-3">FILTERS</div>
    <form method="post" action="">
        <div class="form-group input-group">
            <input type="text" class="form-control" id="searchticket" name="searchticket" placeholder="Search...">
            <div class="input-group-append">
                <button type="submit" class="btn btn-grey"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <form method="post" action="">
        <div class="form-group">
            <label for="created">Created</label>
            <select class="form-control" id="created" name="created">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="created">Created</label>
            <select class="form-control" id="created" name="created">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="created">Created</label>
            <select class="form-control" id="created" name="created">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="created">Created</label>
            <select class="form-control" id="created" name="created">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="created">Created</label>
            <select class="form-control" id="created" name="created">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </form>
</div>