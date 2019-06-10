<?php

require_once('libs\T.php');

?>

<link rel="stylesheet" type="text/css" href="/public/styles/breadcrumbs.css">

<ul class="breadcrumbs clear-float">
    <?php foreach ($breadcrumbs as $index => $item) { ?>
        <li>
            <a href="<?= $item['href']; ?>"><?= $item['name']; ?></a>
        </li>
    <?php } ?>
</ul>