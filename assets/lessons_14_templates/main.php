<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шаблон</title>
</head>

<body>
    <?php

    if (isset($_GET["pg"])) {
        $pg = $_GET["pg"];
    } else {
        $pg = "";
    }

    switch ($pg) {
        case "pg1":
            $incpg = "one.php";
            break;
        case "pg2":
            $incpg = "two.php";
            break;
        case "pg3":
            $incpg = "three.php";
            break;
        default:
            $incpg = "one.php";
    };

    ?>
    <table border="1" width="100%" height="100%">
        <tr>
            <td height="164" width="91">
                <a href="?pg=pg1">пункт 1</a> <br>
                <a href="?pg=pg2">пункт 2</a> <br>
                <a href="?pg=pg3">пункт 3</a> <br>
            </td>
            <td height="164" width="253">
                <?php
                include($incpg);
                ?>
            </td>
        </tr>
    </table>
</body>

</html>