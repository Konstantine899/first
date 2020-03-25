```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gb</title>
</head>

<body>

    <?php include "show.php"; ?>

    <form method="POST" action="add.php">
        <textarea row="4" name="txt" cols="20"></textarea><br />
        <input type="txt" name="nik" size="20"><br />
        <input type="submit" value="Отправить">
        <input type="reset" value=" Сброс">
    </form>
</body>

</html>

```