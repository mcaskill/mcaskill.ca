<?php

define('BASEPATH', dirname(__DIR__));

$icon = require BASEPATH . '/src/icon.php';

header('Content-Type: image/svg+xml; charset=UTF-8');

?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><text y=".9em" font-size="90"><?php echo $icon; ?></text></svg>
