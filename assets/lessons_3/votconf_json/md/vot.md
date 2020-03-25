```php

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include "votconf.php";

    $v = json_decode(file_get_contents($filename));

    if (isset($_POST["vot"])) {
        $v[2][$_POST["vot"]]++;
        file_put_contents($filename, json_encode($v));
    }

    echo "$v[0]<br/>";

    foreach ($v[1] as $key => $value) {
        echo "$value - " . $v[2][$key] . "<br/>\n";
    }

    ?>
</body>

</html>

```