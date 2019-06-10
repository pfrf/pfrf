<?php

require_once('libs/T.php');
$info_items = require('configs/info.php');

?>

<link rel="stylesheet" type="text/css" href="/public/styles/info.css">
<script src="/public/scripts/info.js"></script>

<div class="main-info-items">
    <?php foreach ($info_items as $index => $item) { ?>
        <a href="<?= $item['href']; ?>" class="main-info-item <?= $index === 0 ? 'active' : ''; ?>">
            <img src="/public/images/info/<?= $item['image']; ?>" class="main-info-item-image">
            <div class="description clear-float" style="<?= $item['text_position']; ?>: -10px;">
                <img src="/public/images/logo.png" class="logo <?= $item['text_position']; ?>">
                <div class="text ellipses"><?= $item['text']; ?></div>
            </div>
        </a>
    <?php } ?>

    <div class="controls">
        <div class="controls-item previous"></div>
        <div class="controls-item next"></div>
    </div>
</div>