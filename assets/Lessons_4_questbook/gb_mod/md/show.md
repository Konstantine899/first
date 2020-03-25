```php

<?php

include "connect.php";

// Выборка всех записей из таблицы
$result = mysqli_query(
    $link,
    "SELECT text, name FROM questbook;"
);

// Отрисовка данных из таблицы 
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<i>$row[text]</i> <b>$row[name]</b><br/>";
}
mysqli_free_result($result);


```