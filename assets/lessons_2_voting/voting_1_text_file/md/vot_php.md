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
    $ind = $_POST["vot"];
    $v = file("votData.txt");
    $v[$ind] =  ($v[$ind] + 1) . "\n";

    foreach ($v as $key => $value) {
        echo "$key - $value <br>\n";
    }

    file_put_contents("votData.txt", implode("", $v));

    ?>

</body>

</html>

```