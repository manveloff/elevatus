<?php
declare(strict_types=1);

/**
 * Class BaseDistance
 * 
 * BaseDistance is a class that contains base logic
 * for calculation of Hamming/Levenshtein distance
 * between 2 strings. Not intended for standalone use.
 */
class BaseDistance {
    protected $state;
    protected string $a;
    protected string $b;
    static public function get(string $a, string $b): int {
        $state = new static($a, $b);
        $state->a = $a;
        $state->b = $b;
        return $state->calculate();
    }
}

/**
* Class HammingDistance
* 
* HammingDistance is a class that extends the 
* BaseDistance class and allows calculating of
* a Hamming distance between two strings. 
* Does not support UTF-8.
*/
class HammingDistance extends BaseDistance {

    /**
    * Calculates Hamming Distance between
    * two strings.
    * 
    * @return int
    */
    protected function calculate() {
      return count(
        array_diff_assoc(
          str_split(
            str_pad($this->a, strlen($this->b) - strlen($this->a), ' ')
          ), 
          str_split(
            str_pad($this->b, strlen($this->a) - strlen($this->b), ' ')
          )
        )
      );
    }

}

/**
* Class LevenshteinDistance
* 
* LevenshteinDistance is a class that extends the 
* BaseDistance class and allows calculating of
* a Levenshtein distance between two strings.
* Does not support UTF-8.
*/
class LevenshteinDistance extends BaseDistance {

    /**
    * Calculates Levenshtein Distance between
    * two strings.
    * 
    * @return int
    */
    protected function calculate() {
      return levenshtein($this->a, $this->b);
    }

}