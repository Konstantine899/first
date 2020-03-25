<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("votconf.php");

    $v = file($VoterFile);

    if (isset($_POST["vot"])) {
        $ind = $_POST["vot"];
        $substr = explode($Separator, $v[$ind]);
        $v[$ind] = $substr[0] . $Separator . ($substr[1] + 1) . "\n";

        file_put_contents($VoterFile, implode("", $v));
    }
    echo "<b>$v[0]</b><br/>";

    for ($i = 1; $i < count($v); $i++) {
        echo "<i>$v[$i]</i><br/>";
    }

    ?>
</body>

</html>