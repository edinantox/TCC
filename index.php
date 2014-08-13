<?php
    include "./model/defines.php";
    echo DOCTYPE;
?>
<html>
    <head>
        <?php
            echo META;
        ?>
    </head>
    <body>
        <?php
            require_class("View");
            new View();
        ?>
    </body>
</html>
