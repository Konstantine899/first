```php

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BB коды</title>
</head>

<body>
    <?php

    $defoulttext = "[b] Использую BB код [b] и после преобразую в HTML :-) [/b]";
    echo "$defoulttext<br>\n";
    $text = preg_replace("/\[b\](.*)\[\/b\]/", "<b>$1</b>", $defoulttext);
    echo "$text<br>\n";

    ?>
</body>

</html>

```