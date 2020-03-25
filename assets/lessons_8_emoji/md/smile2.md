```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>smile2</title>
</head>

<body>
    <?php

    function sm($text)
    {
        $search = array("/:-\)/", "/:-\(/");
        $replace = array("<img src= img/1.gif>", "<img src =  img/sad.gif>");

        return preg_replace($search, $replace, $text);
    };
    $defaulttext = ":-( Привет :-) как дела?";

    echo sm($defaulttext);


    ?>
</body>

</html>

```