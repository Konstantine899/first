```php

<!DOCTYPE html>
<html>

<head>
    <title>Голосование</title>
</head>

<body>

    <?php
    $co = file_get_contents("counter.txt")+1;

    echo $co;

    file_put_contents("counter.txt", $co);
    ?>

</body>

</html>

```