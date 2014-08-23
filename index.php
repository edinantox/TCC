<?php
    include "./model/defines.php";

?>
<!DOCTYPE HTML>
<html lang='pt' dir='ltr'>
    <head>
        <?php
            include_once './model/header.php';
        ?>

    </head>
    <body>
        <?php
            require_class("View");
            new View();
        ?>
    </body>
</html>
