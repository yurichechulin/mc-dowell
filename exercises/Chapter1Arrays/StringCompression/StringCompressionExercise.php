<?php


namespace Exercises\Chapter1Arrays\StringCompression;


class StringCompressionExercise
{
    public function compress(string $inputString) : string {
        $size = 0;
        $count = 1;
        $resultString = '';
        $lastSymbol = $inputString[0];


        for ($i = 1; $i < strlen($inputString); $i++) {
            if ($lastSymbol == $inputString[$i]) {
                $count++;
            } else {
                $size += 1 + strlen((string)$count);
                $resultString .= $lastSymbol;
                $resultString .= (string)$count;

                $lastSymbol = $inputString[$i];
                $count = 1;
            }
        }

        $resultString .= $lastSymbol;
        $resultString .= (string)$count;

        if ($size > strlen($inputString)) {
            return $inputString;
        }

        return $resultString;
    }
}