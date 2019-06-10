<?php

require_once('libs\T.php');

$regions = require('configs/regions.php');

$current_region = $_COOKIE['region'] ?? '';

$tabs = require('configs/menu_tabs.php');

$count_tabs = count($tabs);

?>

<link rel="stylesheet" type="text/css" href="/public/styles/menu.css">
<script src="/public/scripts/menu.js"></script>

<div class="main-menu">
    <div class="head clear-float">
        <div class="item title"><?= T::_('menu'); ?></div>
        <div class="item social-links clear-float">
            <a href="/" class="link"><img src="/public/images/socials/1.png" width="60" height="60"></a>
            <a href="/" class="link"><img src="/public/images/socials/2.png" width="60" height="60"></a>
            <a href="/" class="link"><img src="/public/images/socials/3.png" width="60" height="60"></a>
            <a href="/" class="link"><img src="/public/images/socials/4.png" width="60" height="60"></a>
            <a href="/" class="link"><img src="/public/images/socials/5.png" width="60" height="60"></a>
            <a href="/" class="link"><img src="/public/images/socials/6.png" width="60" height="60"></a>
            <a href="/" class="link"><img src="/public/images/socials/7.png" width="60" height="60"></a>
            <a href="/" class="link google-play">
                <img src="/public/images/socials/8.png" width="201" height="60">
            </a>
            <a href="/" class="link apple-store">
                <img src="/public/images/socials/9.png" width="201" height="60">
            </a>
        </div>
        <div class="item close">
            <img src="/public/images/close.png" width="60" height="60">
        </div>
    </diV>
    <div class="user-data clear-float">
        <div class="auth clear-float">
            <img src="/public/images/auth.png" width="60" height="60">
            <div class="text"><?= T::_('lc_fio'); ?></div>
        </div>
        <div class="region clear-float">
            <div class="title"><?= T::_('my_region'); ?>:</div>
            <select class="select-region">
                <?php if (in_array($current_region, $regions)) { ?>
                    <option value="<?= $current_region; ?>" selected>
                        <?= T::_('regions_' . $current_region) ?>
                    </option>
                <?php } else { ?>
                    <option selected><?= T::_('select_region'); ?></option>
                <?php } ?>
                <?php foreach ($regions as $region) { ?>
                    <?php if ($region === $current_region) continue; ?>
                    <option value="<?= $region; ?>"><?= T::_('regions_' . $region) ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="tabs">
        <div class="tabs-buttons clear-float">
            <?php foreach ($tabs as $index => $tab) { ?>
                <div class="tab-button <?= $index === 0 ? 'active' : ''; ?>"
                    data-index="<?= $index; ?>"
                    style="width: calc((100% - <?= 20 * $count_tabs; ?>px) / <?= $count_tabs; ?>)"
                >
                    <?= $tab['name']; ?>
                </div>
            <?php } ?>
        </div>
        <?php foreach ($tabs as $index => $tab) { ?>
            <div class="tab-content <?= $index === 0 ? 'active' : ''; ?>" data-index="<?= $index; ?>">
                <div class="list clear-float">
                <?php if (!empty($tab['list'])) { ?>
                    <?php foreach ($tab['list'] as $item) { ?>
                        <a href="<?= $item['href']; ?>" class="item"><?= $item['name']; ?></a>
                    <?php } ?>
                <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>