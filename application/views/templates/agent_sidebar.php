<?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT *
                  FROM `agent_menu` join `user_access_menu`
                  ON `agent_menu`.`id` = `user_access_menu`.`menu_id`
                  WHERE `user_access_menu`.`role_id` = $role_id
                  AND `agent_menu`.`is_active` = 1
                  ORDER BY `user_access_menu`.`menu_id` ASC";
    $menu = $this->db->query($queryMenu)->result_array();
?>

<div class="nav-left-sidebar sidebar-dark">
    <ul class="navbar-nav flex-column sidebar-nav-fixed">
        <a href="<?= base_url('agent/'); ?>"><img src="<?= base_url('images/'); ?>logorevota.jpg" id="navbar-brand"></a>
        <?php foreach($menu as $m) : ?>
            <?php if ($m['title'] == 'Client Portal') : ?>
                <a href="<?= base_url(); ?><?= $m['url']; ?>" class="nav-link" id="btn-sidebar"><i class="<?= $m['icon']; ?>"></i><?=$m['title']; ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
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