<?php

namespace Deg540\PHPTestingBoilerplate;

use Exception;

 class StringCalculator
{
    /**
     * @throws Exception
     */
    public function add(string $numbers = ""): int|array
    {
      if(strlen($numbers) == 0) return 0;
      if(strlen($numbers) == 1) return intval($numbers);
      if($this->isNegativeSequence($numbers)){
          throw new Exception("No se admiten números negativos");
      }
      //$delimiters = '/[;,]/';
      $values = $this->parsingWithMultipleDelimiters($numbers);

      //$values = explode(",", $numbers);

      $validationNumbers = $this->areNumbersOutOfBounds($values);

      if($validationNumbers['outOfBounds']){
          $outOfBoundsPos = $validationNumbers['position'];
          unset($values[$outOfBoundsPos]);
      }
      //$values = preg_split($delimiters,$numbers);


      return array_sum($values);

    }
    public function parsingWithMultipleDelimiters(string $numbers) : array
    {
        $delimiters = '/[;,]/';

        $values = preg_split($delimiters,$numbers);

        return $values;
    }
    public function isNegativeSequence(string $numbers): bool
    {
        $isNegativePlaced = strpos($numbers,"-");

        if($isNegativePlaced === false){
            return false;
        }
        return true;
    }

    public function areNumbersOutOfBounds(array $numbers):array
    {
        $outOfBounds = false;
        $position = -1;

        foreach ($numbers as $key => $num) {
            if (intval($num) >= 1000) {
                $outOfBounds = true;
                $position = $key;
                break;
            }
        }

        return array('outOfBounds' => $outOfBounds, 'position' => $position);
    }
}