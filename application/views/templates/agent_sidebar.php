<div class="nav-left-sidebar sidebar-dark">
    <ul class="navbar-nav flex-column sidebar-nav-fixed">
        <a href="<?= base_url('agent/'); ?>"><img src="<?= base_url('images/'); ?>logorevota.jpg" id="navbar-brand"></a>
        <li class="nav-item">
            <?php if ($title == 'Tickets') : ?>
                <a href="<?= base_url('agent/'); ?>" class="nav-link active"><i class="fas fa-fw fa-ticket-alt"></i>Tickets</a>
            <?php else : ?>
                <a href="<?= base_url('agent/'); ?>" class="nav-link"><i class="fas fa-fw fa-ticket-alt"></i>Tickets</a>
            <?php endif; ?>
            <?php if ($title == 'Lists') : ?>
                <a href="<?= base_url('agent/lists_menu/'); ?>" class="nav-link active"><i class="fa fa-fw fa-user-circle"></i>Lists</a>
            <?php else : ?>
                <a href="<?= base_url('agent/lists_menu/'); ?>" class="nav-link"><i class="fa fa-fw fa-user-circle"></i>Lists</a>
            <?php endif; ?>
            <?php if ($title == 'Reports') : ?>
                <a href="<?= base_url('agent/reports_menu/'); ?>" class="nav-link active"><i class="far fa-fw fa-chart-bar"></i>Reports</a>
            <?php else : ?>
                <a href="<?= base_url('agent/reports_menu/'); ?>" class="nav-link"><i class="far fa-fw fa-chart-bar"></i>Reports</a>
            <?php endif; ?>
        </li>
    </ul>
</div>