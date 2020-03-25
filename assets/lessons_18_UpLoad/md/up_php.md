```php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Refresh" content="5; URL=list.php">
    <title>Document</title>
</head>
<body>
    <a href="list.php" style="text-align: center">Список файлов</a><br>

    <?php 
    if (file_exists($_FILES['userfile']['tmp_name']))
    {
copy($_FILES['userfile']['tmp_name'], "files\\".$_FILES['userfile']['name']);
echo 'Файл : <a style="color: red" target=_blank href=files\\';
echo $_FILES['userfile']['name'].">".$_FILES['userfile']['name'];
echo "</a> загружен.<br>";
    }
    
    ?>
</body>
</html>

```