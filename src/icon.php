<?php

$icons = [ '🌀', '🧠', '☕️', '⚙️', '🛠', '🧰', '🎒', '⌨️', '🖥', '💻', '🌎', '🌑', '🇨🇦', '✊🏾' ];
$count = count($icons);
$index = max( 0, min( (int) round( (int) date('i') / $count ), $count ) );

return $icons[$index] ?? $icons[0];
# return $icons[mt_rand(0, (count($icons) - 1))];
