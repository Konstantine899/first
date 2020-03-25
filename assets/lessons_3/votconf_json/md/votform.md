```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="vot.php">
        <?php

        include "votconf.php";

        $v = json_decode(file_get_contents($filename));
        echo "$v[0]<br/>";

        foreach ($v[1] as $key => $value) {
            echo "<input type ='radio' name = 'vot' value = '$key'> $value<br/>";
        }

        ?>

        <input type="submit" value="Отправить">
        <input type="reset" value="Сброс">

    </form>

</body>

</html>

```