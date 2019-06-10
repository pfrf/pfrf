<?php

require_once('libs\T.php');

$breadcrumbs = [
    [
        'name' => T::_('main_page'),
        'href' => 'javascript:void(0)',
    ],
];

?>

<!DOCTYPE html>
<html>

<head>
    <title><?= T::_('pfr'); ?></title>
    <?php require('templates/head.php'); ?>
    <link rel="stylesheet" type="text/css" href="/public/styles/main_page.css">
</head>

<body>
    <div class="content">
        <?php require('templates/header.php'); ?>
        <?php require('templates/breadcrumbs.php'); ?>

        <div class="main-items clear-float">
            <div class="main-item main-item-left"><?php require('templates/useful_links.php'); ?></div>
            <div class="main-item main-item-center"><?php require('templates/info.php'); ?></div>
            <div class="main-item main-item-right"><?php require('templates/news.php'); ?></div>
        </div>

        <?php require('templates/footer.php'); ?>
    </div>
</body>

</html>