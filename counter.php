<?php
// Path to store the visitor count
$counterFile = 'page_visits.txt';

// Check if the file exists; create it if not
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, 75);
}

// Read the current count
$visitCount = (int)file_get_contents($counterFile);

// Increment the count
$visitCount++;

// Save the updated count back to the file
file_put_contents($counterFile, $visitCount);

// Return the updated count
 echo $visitCount;

?>