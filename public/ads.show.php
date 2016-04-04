<?php

// Mock data to show an individual ad
$ad = [
    'id'          => 100,
    'user_id'     => 100,
    'name'        => 'SNES',
    'description' => 'Plays like new! Includes mario kart.',
    'price'       => 150.00,
    'image_url'   => '/img/uploads/100.png'
];



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1><?= $ad['name'] ?></h1>
    <p>Price: <?= $ad['price'] ?></p>
    <p>Description: <?= $ad['description'] ?></p>
    <img src="<?=$ad['image_url'] ?>" alt="<?= $ad['name'] ?>">

</body>
</html>
