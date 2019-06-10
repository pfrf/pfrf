<?php

require_once('libs/T.php');
$news = require_once('configs/news.php');

?>

<link rel="stylesheet" type="text/css" href="/public/styles/news.css">
<script src="/public/scripts/news.js"></script>

<div class="news">
    <div class="title">
        <?= T::_('news'); ?> (<a href="news.php"><?= T::_('read_all_news'); ?></a>)
    </div>
    <div>
        <img src="/public/images/Arrow-1.png" width="20" height="10" class="go-top">
        <div class="items-wrapper">
            <ul class="items">
                <?php foreach ($news as $item) { ?>
                    <li class="item clear-float">
                        <a href="<?= $item['href']; ?>">
                            <div class="text ellipses">
                                <?= $item['text']; ?>
                            </div>
                            <img src="/public/images/news/<?= $item['image']; ?>"
                                 width="80"
                                 height="80"
                            >
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <img src="/public/images/Arrow-2.png" width="20" height="10" class="go-bottom">
    </div>
</div>