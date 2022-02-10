#!/usr/local/bin/php
<?php
declare(strict_types=1);
require_once('Distance.php');

// Read strings from user input
$a = readline('Please type the first string: ');
$b = readline('Please type the second string: ');

// Try to get the Levenshtein distance
try {
    $result = LevenshteinDistance::get($a, $b);
} catch(Throwable $e) {
    echo $e->getMessage() . "\n";
}

// Output result if exists
if(!empty($result)) {
  echo $result . "\n";
}