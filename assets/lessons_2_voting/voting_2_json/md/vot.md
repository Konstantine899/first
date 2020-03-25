```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Голосование</title>
</head>

<body>

    <?php

    $v = json_decode(file_get_contents("data.json"));

    $v[$_POST["vot"]] += 1;

    foreach ($v as $key => $value) {
        echo "$key - $value <br>\n";
    }

    file_put_contents("data.json", json_encode($v));

    ?>

</body>

</html>

```