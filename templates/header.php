<?php

require_once('libs\T.php');
require_once('libs\Languages.php');

?>

<link rel="stylesheet" type="text/css" href="/public/styles/header.css">
<script src="/public/scripts/header.js"></script>

<header>
    <div class="menu-items clear-float">
        <div class="menu-item menu-item-menu button-style"><?= T::_('menu'); ?></div>
        <div class="menu-item menu-item-languages">
            <div class="selected button-style" title="<?= T::_('languages_' . Languages::getCurrent()); ?>">
                <?= Languages::getCurrent(); ?>
            </div>
            <div class="list">
                <?php foreach (Languages::getList() as $language) { ?>
                    <div class="item button-style"
                         title="<?= T::_('languages_' . $language); ?>"
                         data-language="<?= $language; ?>"
                    >
                        <?= $language; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="menu-item menu-item-logo">
            <a href="/">
                <img src="/public/images/logo.svg" height="40">
                <div class="text"><?= T::_('pfrf_logo'); ?></div>
            </a>
        </div>
        <div class="menu-item menu-item-visually-impaired button-style ellipses">
            <?= T::_('visually_impaired'); ?>
        </div>
    </div>

    <?php require('templates/menu.php'); ?>
</header>