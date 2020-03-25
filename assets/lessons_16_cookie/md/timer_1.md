```php
<?php
setcookie("time", time() - (60 * 60));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Время посещения</title>
</head>

<body>
    <H1>Cookie установлены</H1> <br>
    <a href="2.php">Вторая страница</a>
</body>

</html>

```