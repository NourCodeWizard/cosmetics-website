<?php
$counter_file = "counter.txt";

// Read the current count
$counter = file_exists($counter_file) ? (int)file_get_contents($counter_file) : 0;
$counter++;

// Update the counter
file_put_contents($counter_file, $counter);

echo $counter;
?>
