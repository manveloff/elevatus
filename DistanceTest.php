<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('Distance.php');

final class DistanceTest extends TestCase {

    /**
    * Hamming distance testing
    * 
    * Checking if it calculates well known Hamming distance
    * between two known strings correctly.
    */
    public function testHammingDistance(): void
    {
        $str1 = 'Moscow';
        $str2 = 'moz';
        $this->assertTrue(HammingDistance::get('Moscow', 'moz') === 5);
    }

    /**
    * Levenshtein distance testing
    * 
    * Checking if it calculates well known Levenshtein distance
    * between two known strings correctly.
    */
    public function testLevenshteinDistance(): void
    {
        $str1 = 'Moscow';
        $str2 = 'moz';
        $this->assertTrue(LevenshteinDistance::get('Moscow', 'moz') === 5);
    } 

}