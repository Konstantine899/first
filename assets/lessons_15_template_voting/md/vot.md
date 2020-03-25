```php

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    error_reporting(0);

    $ind = $_POST["vot"];
    $v = file("votData.txt");
    $v[$ind] = ($v[$ind] + 1) . "\n";

    for ($i = 0; $i < count($v); $i++) {
        echo ($i + 1) . " - $v[$i]<br>";
    }

    $str = implode("", $v);
    $h = fopen("votData.txt", 'w');
    fwrite($h, $str);
    fclose($h);

    ?>
</body>

</html>

```