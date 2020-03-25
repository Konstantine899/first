<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emoji</title>
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
        "&#128103;&#127995;",
        "$default_text"
    );
    
    echo "$text<br>";

    ?>
</body>

</html>