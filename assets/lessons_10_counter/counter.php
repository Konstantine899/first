<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Счетчик</title>
</head>
<body>
    
    <?php
    $co = file_get_contents("counter.txt");
    $co++;

    echo preg_replace("/\d/","<img src = img/$0.gif>", $co);

    $h = fopen("counter.txt",'w');
    fwrite($h, $co);
    fclose($h);
    ?>
</body>
</html>