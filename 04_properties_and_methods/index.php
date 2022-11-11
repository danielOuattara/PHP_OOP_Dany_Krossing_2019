<?php include './includes/Person.php' ?>

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

    $daniel = new Person();
    $daniel->setName('Daniel Ouattara');
    echo $daniel->name;

    $julie = new Person();
    $julie->setName('Julie Ouattara');
    echo $julie->name;

    ?>

</body>

</html>