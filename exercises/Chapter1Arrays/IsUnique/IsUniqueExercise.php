<?php
namespace Exercises\Chapter1Arrays\IsUnique;

class IsUniqueExercise
{
    /**
     * @param string $inputString
     * @return bool
     */
    public function hasAllUniqueCharacters(string $inputString) : bool {
        $inputString = strtolower($inputString);

        $indexes = [];

        for ($i = 0; $i < strlen($inputString); $i++) {
            $symbol = $inputString[$i];

            if (isset($indexes[ord($symbol)]) && $indexes[ord($symbol)] == -1) {
                return false;
            }

            $indexes[ord($symbol)] = -1;
        }

        return true;
    }
}