<?php


namespace Exercises\Chapter1Arrays\CheckPermutation;


class CheckPermutationExercise
{
    public function isPermutation(string $firstString, string $secondString) : bool {
        if (strlen($firstString) != strlen($secondString)) {
            return false;
        }

        $firstString = strtolower($firstString);
        $secondString = strtolower($secondString);

        $indexes = [];

        for ($i = 0; $i < strlen($firstString); $i++) {
            $symbol = $firstString[$i];

            if (!isset($indexes[ord($symbol)])) {
                $indexes[ord($symbol)] = 1;
            } else {
                $indexes[ord($symbol)]++;
            }
        }

        for ($i = 0; $i < strlen($secondString); $i++) {
            $symbol = $secondString[$i];

            if (!isset($indexes[ord($symbol)])) {
                return false;
            }

            $indexes[ord($symbol)]--;

            if ($indexes[ord($symbol)] < 0) {
                return false;
            }
        }

        return true;
    }
}