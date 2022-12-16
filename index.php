<?php
// CONNECTING
    require 'moduls/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_POST['submit'])) {
            require_once 'moduls/form.php';
        } else {
            require_once 'moduls/insert-data.php';
            echo '<br />';
            require_once 'moduls/fetch-data.php';
        }
    ?>
</body>
</html>