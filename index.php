<?php

$feed = file_get_contents('https://ajax.googleapis.com/ajax/services/feed/find?v=1.0&q=news');

echo "<pre>";
print_r(json_decode($feed));
echo "</pre>";