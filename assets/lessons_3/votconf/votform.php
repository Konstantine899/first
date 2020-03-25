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
        include("votconf.php");
        $v = file($VoterFile);
        echo "$v[0]<br/>";
        for ($i = 1; $i < count($v); $i++) {
            $label = explode($Separator, $v[$i]);

            echo "<input type ='radio' name = 'vot' value = '$i'> $label[0]<br/>";
        }
        ?>

        <input type="submit" value="Отправить">
        <input type="reset" value="Сброс">

    </form>

</body>

</html>