```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
$defoulttext="Ты негодяй!!!!";
if (preg_match("/негодяй|редиска/i", $defoulttext)) {
    echo "найдено нецензурное выражение.";
} else {
    echo "цензура пройдена.";
}
    ?>
</body>
</html>

```