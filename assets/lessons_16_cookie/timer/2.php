<?php
    date_default_timezone_set('Europe/Moscow');
    echo "Время посещения первой страницы ".date('H:i:s', $_COOKIE["time"]) . "<br>";
