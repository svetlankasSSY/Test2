<?php header("Content-type: text/html;charset=utf-8"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<html>
    <head>
        <title><?php echo $pageTitle; ?></title>
    </head>
    <body>
        <ul>
            <?php foreach ($array as $item) { ?>
            <li><?php echo $item; ?></li>
            <?php } ?>
        </ul>
    </body>
</html>
