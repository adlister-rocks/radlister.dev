<?php

// Mock data for multiple advertisements
$ads = [
    [
        'id'          => 100,
        'user_id'     => 100,
        'name'        => 'SNES',
        'description' => 'Plays like new! Includes mario kart.',
        'price'       => 75.00,
        'image_url'   => '/img/uploads/100.png'
    ],
    [
        'id'          => 101,
        'user_id'     => 101,
        'name'        => 'Sega Genesis',
        'description' => 'Plays like new! Includes Altered Beast and Golden Axe',
        'price'       => 100.00,
        'image_url'   => '/img/uploads/sega.png'
    ],
    [
        'id'          => 102,
        'user_id'     => 102,
        'name'        => 'Huffy Bike',
        'description' => 'Guaranteed Not Stolen!',
        'price'       => 75.00,
        'image_url'   => '/img/uploads/huffy_bike.png'
    ],
];








?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Advertisements</title>
    <link rel="stylesheet" href="">
</head>
<body>

    <?php foreach($ads as $ad): ?>
        <h1><?= $ad['name']; ?></h1>
        <p>Price: <?= $ad['price']; ?></p>
        <p>Description: <?= $ad['description']; ?></p>
        <img src="<?=$ad['image_url']; ?>" alt="<?= $ad['name']; ?>">
    <?php endforeach; ?>

</body>
</html>
