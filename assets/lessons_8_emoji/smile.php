<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smile</title>
</head>

<body>
    <?php

    $default_text = "Привет :-) как дела?";
    
    echo "$default_text<br>";

    $text = preg_replace(
        "/:-\)/",
        "<FONT SIZE=7>$0</FONT>",
        $default_text
    );

    echo "$text<br>";

    $text = preg_replace(
        "/:-\)/",
        "<img src = img/1.gif>",
        "$default_text"
    );

    echo "$text<br>";

    ?>
</body>

</html>