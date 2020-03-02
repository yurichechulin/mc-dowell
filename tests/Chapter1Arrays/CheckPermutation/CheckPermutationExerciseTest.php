<?php

namespace Tests\Chapter1Arrays\CheckPermutation;

use Exercises\Chapter1Arrays\CheckPermutation\CheckPermutationExercise;
use PHPUnit\Framework\TestCase;

class CheckPermutationExerciseTest extends TestCase
{
    protected CheckPermutationExercise $checkPermutationExercise;

    protected function setUp(): void
    {
        $this->checkPermutationExercise = new CheckPermutationExercise();
    }

    public function testIsPermutation()
    {
        $this->assertTrue($this->checkPermutationExercise->isPermutation("abcde1", "abdce1"));
    }

    public function testIsPermutationWithUppercase()
    {
        $this->assertTrue($this->checkPermutationExercise->isPermutation("Abcde1 234", "abdce1 432"));
    }

    public function testIsNotPermutation()
    {
        $this->assertFalse($this->checkPermutationExercise->isPermutation("Abcde1 234", "abdcfe1 432"));
    }

    public function testIsNotPermutation2()
    {
        $this->assertFalse($this->checkPermutationExercise->isPermutation("aaa     ", "aa a"));
    }
}
