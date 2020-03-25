```php
<?php
// Добавление новой записи
if ((isset($_POST["txt"])) &&
    (isset($_POST["nik"]))
) {
    include "connect.php";

    mysqli_query(
        $link,
        "INSERT INTO questbook VALUES('$_POST[txt]','$_POST[nik]');"
    );
}
header('Location: gb.php');

```