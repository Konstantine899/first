```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список файлов</title>
</head>

<body>
    <a style="text-align: center" href="up.htm"></a>

    <?php
    $d = dir("files");

    while (false !== ($entry = $d->read())) {
        echo '<a href="files\\' . $entry . '">' . $entry . "</a<br>\n";
    }
    $d->close();
    ?>
</body>

</html>

```