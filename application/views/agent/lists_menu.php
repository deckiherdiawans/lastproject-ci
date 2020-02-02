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