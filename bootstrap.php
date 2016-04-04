<?php

// Load the environment variables.
$_ENV = require_once __DIR__ . "/.env.php";

// Require Utility Classes
require_once __DIR__ . "/utils/Auth.php";
require_once __DIR__ . "/utils/Input.php";
require_once __DIR__ . "/utils/Log.php";

// Require Model Classes
require_once __DIR__ . "/models/Model.php";
require_once __DIR__ . "/models/Ad.php";
require_once __DIR__ . "/models/User.php";
