<?php

require_once('libs\T.php');

$breadcrumbs = [
    [
        'name' => T::_('main_page'),
        'href' => '/',
    ],
    [
        'name' => T::_('news'),
        'href' => 'javascript:void(0)',
    ],
];

$news = require('configs/news.php');

?>

<!DOCTYPE html>
<html>

<head>
    <title><?= T::_('pfr'); ?></title>
    <?php require('templates/head.php'); ?>
    <link rel="stylesheet" type="text/css" href="/public/styles/news_page.css">
</head>

<body>
    <div class="content">
        <?php require('templates/header.php'); ?>
        <?php require('templates/breadcrumbs.php'); ?>

        <div class="wrapper">
            <div class="news-wrapper">
                <?php foreach ($news as $item) { ?>
                    <div class="item clear-float">
                        <img src="/public/images/news/<?= $item['image']; ?>" width="160" height="160">
                        <div class="text"><?= $item['description']; ?></div>
                        <div class="date"><?= $item['date']; ?></div>
                        <a href="/"><?= T::_('read_next'); ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>

        <?php require('templates/footer.php'); ?>
    </div>
</body>

</html>