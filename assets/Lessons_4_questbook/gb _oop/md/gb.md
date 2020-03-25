```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gb1</title>
</head>

<body>

    <?php
    /*    
    CREATE DATABASE IF NOT EXISTS `info`;
    USE `info`;
    
    CREATE TABLE questbook (
      text text,
      name varchar(50)
    );

    INSERT INTO `questbook` VALUES('Привет', 'test');
    INSERT INTO `questbook` VALUES('Hi', 'Vasya');
    */

    $host     = 'localhost';
    $logname  = 'root';
    $password = '';
    $database = 'info';

    // Соеденение с MySQL
    $mysql = new mysqli(
        $host,
        $logname,
        $password,
        $database
    );

    // Добавление новой записи
    if ((isset($_POST["txt"])) &&
        (isset($_POST["nik"]))
    ) {

        $mysql->query(
            "INSERT INTO questbook VALUES('$_POST[txt]','$_POST[nik]');"
        );
    }

    // Выборка всех записей из таблицы
    $result = $mysql->query("SELECT text, name FROM questbook;");

    // Отрисовка данных из таблицы 
    while ($obj = $result->fetch_object()) {
        echo "<i>$obj->text</i> <b>$obj->name</b><br/>";
    }
    // Освобождение памяти
    $result->close();

    // Закрытие соединения с MySQL
    $mysql->close();
    ?>

    <form method="POST" action="">
        <textarea row="4" name="txt" cols="20"></textarea><br>
        <input type="txt" name="nik" size="20"><br>
        <input type="submit" value="Отправить">
        <input type="reset" value=" Сброс">
    </form>

    <a href="<?php echo $_SERVER['PHP_SELF']; ?>">Обновить</a>
</body>

</html>

```