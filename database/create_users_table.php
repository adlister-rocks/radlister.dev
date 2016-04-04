<?php

// require database connection file

$tableCreate = "
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(255),
    last_name  VARCHAR(255),
    email
    content TEXT NOT NULL,
    PRIMARY KEY (id);";


$ad = new Ad();
$ad->first_name = Input::get('first_name');
$ad->save();
