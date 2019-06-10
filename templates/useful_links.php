<?php

require_once('libs/T.php');
$useful_links = require_once('configs/useful_links.php');

?>

<link rel="stylesheet" type="text/css" href="/public/styles/useful_links.css">
<script src="/public/scripts/useful_links.js"></script>

<div class="useful-links">
    <div class="title"><?= T::_('useful_links'); ?></div>
    <div>
        <img src="/public/images/Arrow-1.png" width="20" height="10" class="go-top">
        <div class="items-wrapper">
            <ul class="items">
                <?php foreach ($useful_links as $useful_link) { ?>
                    <li class="item">
                        <a href="<?= $useful_link['href']; ?>">
                            <img src="/public/images/useful_links/<?= $useful_link['image']; ?>"
                                 width="310"
                                 height="100"
                            >
                            <div class="text"
                                 style="
                                    left: <?= $useful_link['left'] ?>px;
                                    width: <?= 310 - $useful_link['left'] ?>px;
                                    color: <?= $useful_link['color']; ?>;
                                "
                            >
                                <?= $useful_link['text']; ?>
                            </div>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <img src="/public/images/Arrow-2.png" width="20" height="10" class="go-bottom">
    </div>
</div>