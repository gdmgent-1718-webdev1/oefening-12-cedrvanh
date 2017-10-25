<?php 

$cities = ['Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];
sort($cities);

foreach ($cities  as $key) {
    echo '<ol>';
    echo strtoupper($key);
    echo '</ol>';
};