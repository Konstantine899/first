```php
//counter.php
<!DOCTYPE html>
<html>
<head>
    <title>Счетчик</title>
</head>

<body>

<?php
    $co = file_get_contents("counter.txt");
    $co++;

    echo "<b>$co</b>";

    $h = fopen("counter.txt", 'w');
    fwrite($h, $co);
    fclose($h);
    ?>

</body>
</html>

```