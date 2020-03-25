<!DOCTYPE html>
<html>

<head>
    <title>Счетчик</title>
</head>

<body>

    <?php
    $h = fopen("counter.txt", 'r');
    $co = fgets($h);
    fclose($h);

    echo $co++;

    $h = fopen("counter.txt", 'w');
    fwrite($h, $co);
    fclose($h);
    ?>

</body>

</html>