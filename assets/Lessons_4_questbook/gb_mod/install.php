<?php

include "config.php";

// Соеденение с MySQL
$link = mysqli_connect(
    $host,
    $logname,
    $password
)
    or die("Не могу соедениться с MySQL");

foreach (
    explode(
        ";",
        file_get_contents("install.sql")
    ) as $sql
) {
    if (!empty($sql)) {
        mysqli_query(
            $link,
            $sql
        ) or die(mysqli_error($link));
    }
}
