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

    $defoulttext = "
    [b][i]курсивый и жирный шрифт,[/i][/b]
    [img=100]https://st2.depositphotos.com/2001755/5408/i/450/depositphotos_54081723-stock-photo-beautiful-nature-landscape.jpg[/img]
    [u] подчеркнутый :-)  [/u] 
    [b] жирный.[/b] 
    <b>тег остается</b>";
    echo "$defoulttext<br>\n";
    echo bb_code($defoulttext);

    

    function bb_code($text)
    {
        $search = [
            "/\[([b])\](.*)\[\/([b])\]/U",
            "/\[([i])\](.*)\[\/([i])\]/U",
            "/\[([u])\](.*)\[\/([u])\]/U",
            "/\[(img)=(\d+)\](.*)\[\/(img)\]/U"
        ];
        $replace = [
            "<$1>$2</$3>",
            "<$1>$2</$3>",
            "<$1>$2</$3>",
            "<$1 width=$2 src='$3'/>"
        ];


        return preg_replace(
            $search,
            $replace,
            htmlspecialchars($text, ENT_QUOTES)
        );
    };
    ?>
</body>

</html>

```