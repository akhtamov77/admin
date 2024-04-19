<?php

    if(!isset($_SESSION['id'])){
        ?>
            <script>
                window.location.href="loginkirish.php";
            </script>
        <?
    }