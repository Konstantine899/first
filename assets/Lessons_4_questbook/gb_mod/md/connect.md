```php
<?php

include "config.php";

// Соеденение с MySQL
$link = mysqli_connect(
    $host,
    $logname,
    $password,
    $database
)
    or die("Не могу соедениться с MySQL");

```