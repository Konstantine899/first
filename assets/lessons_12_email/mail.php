<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка email</title>
</head>

<body>
    <?php

    if (preg_match('/^(.+@.+..+|)$/', $_POST["email"])) {
        echo "Проверка пройдена";
    } else {
        echo "Провверка НЕ пройдена";
    }

    ?>
</body>

</html>