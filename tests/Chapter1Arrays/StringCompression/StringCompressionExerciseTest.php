<?php

namespace Tests\Chapter1Arrays\StringCompression;

use Exercises\Chapter1Arrays\StringCompression\StringCompressionExercise;
use PHPUnit\Framework\TestCase;

class StringCompressionExerciseTest extends TestCase
{
    protected StringCompressionExercise $stringCompressionExercise;

    protected function setUp(): void
    {
        $this->stringCompressionExercise = new StringCompressionExercise();
    }

    public function testCompress()
    {
        $this->assertEquals("a2b1c5a3", $this->stringCompressionExercise->compress("aabcccccaaa"));
    }


    public function testReturnIfCompressedStringIsLonger()
    {
        $this->assertEquals("abca", $this->stringCompressionExercise->compress("abca"));
    }
}
