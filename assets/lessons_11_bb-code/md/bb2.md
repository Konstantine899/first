```php

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Запрет вывода HTML тегов</title>
</head>

<body>
    <?php

    $defoulttext = "[i]курсивый шрифт,[/i] [u] подчеркнутый :-) [/u] [b], жирный[/b] <b>Выводится жирный</b>";
    echo "$defoulttext<br>\n";
    echo bb_code($defoulttext);

    function bb_code($text)
    {
        $ff1 = "\[([biu])\](.*)\[\/([biu])\]";
        return preg_replace(
            "/" . $ff1 . "/U",
            "<$1>$2</$3>",
            htmlspecialchars($text, ENT_QUOTES)
        );
    }
    ?>
</body>

</html>

```