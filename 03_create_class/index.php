<?php
include './includes/NewClass.php';
include './includes/Person.php';

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

    $person_1 = new Person();
    echo $person_1->personFirst();

    echo '<br>--------------------------<br>';

    $pet_1 = new Pets();
    echo $pet_1->owner();

    ?>

</body>

</html>