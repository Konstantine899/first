```php

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emoji</title>
</head>

<body>
<?php

$defaulttext = "Привет :-) как дела?";
    echo "$defaulttext<br>";

    $text = preg_replace("/:-\)/", "<FONT SIZE=7>$0</FONT>", $defaulttext);
    echo "$text<br>";

    $text = preg_replace("/:-\)/", "&#128103;&#127995;", "$defaulttext");
    echo "$text<br>";

?>
</body>

</html>

```