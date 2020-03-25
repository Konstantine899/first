<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gb</title>
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
    $link = mysqli_connect(
        $host,
        $logname,
        $password,
        $database
    )
        or die("Не могу соедениться с MySQL");

    // Добавление новой записи
    if ((isset($_POST["txt"])) &&
        (isset($_POST["nik"]))
    ) {
        mysqli_query(
            $link,
            "INSERT INTO questbook VALUES('$_POST[txt]','$_POST[nik]');"
        );
    }

    // Выборка всех записей из таблицы
    $result = mysqli_query(
        $link,
        "SELECT text, name FROM questbook;"
    );

    // Отрисовка данных из таблицы 
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<i>$row[text]</i> <b>$row[name]</b><br/>";
    }

    // Освобождение памяти
    mysqli_free_result($result);

    // Закрытие соединения с MySQL 
    mysqli_close($link);
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