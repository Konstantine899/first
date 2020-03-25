<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    
    $d = dir("files");

    while (false !== ($entry = $d->read())) {
        echo "<a href='files/$entry'>$entry</a><br>\n";        
    }

    $d->close();
    ?>

    <br>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input name="userfile" type="file">
        <input type="submit" value="Ok">
    </form>
</body>

</html>