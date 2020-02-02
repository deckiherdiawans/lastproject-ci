<div class="nav-left-sidebar sidebar-dark">
    <ul class="navbar-nav flex-column sidebar-nav-fixed">
        <a href="<?= base_url('agent/'); ?>"><img src="<?= base_url('images/'); ?>logorevota.jpg" id="navbar-brand"></a>
        <?php foreach($menu as $m) : ?>
            <li class="nav-item">
                <?php if ($m['title'] <> 'Client Portal') : ?>
                    <?php if ($title == $m['title']) : ?>
                        <a href="<?= base_url($m['url']); ?>" class="nav-link active"><i class="<?= $m['icon']; ?>"></i><?= $m['title']; ?></a>
                    <?php else : ?>
                        <a href="<?= base_url($m['url']); ?>" class="nav-link"><i class="<?= $m['icon']; ?>"></i><?= $m['title']; ?></a>
                    <?php endif; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>