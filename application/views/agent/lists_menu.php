<?php
    $role_id = $this->session->userdata('role_id');
    $queryListsMenu = "SELECT *
                       FROM `agent_lists_menu` join `user_access_menu`
                       ON `agent_lists_menu`.`id` = `user_access_menu`.`lists_menu_id`
                       WHERE `user_access_menu`.`role_id` = $role_id
                       AND `agent_lists_menu`.`is_active` = 1
                       ORDER BY `user_access_menu`.`lists_menu_id` ASC
                      ";
    $listsMenu = $this->db->query($queryListsMenu)->result_array();
?>

<div class="menu-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php foreach($listsMenu as $lm) : ?>
            <div class="col-lg-12 mb-3">
                <a href="<?= base_url($lm['url']); ?>" class="text-decor">
                    <div class="card">
                        <div class="card-body text-center" id="<?= $lm['div_id']; ?>">
                            <h5 id="<?= $lm['header_id']; ?>"><?= $lm['sub_menu']; ?></h5>
                            <i class="<?= $lm['icon']; ?>"></i>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>