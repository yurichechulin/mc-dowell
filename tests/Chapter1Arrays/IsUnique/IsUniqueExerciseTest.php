<?php

namespace Tests\Chapter1Arrays\IsUnique;

use Exercises\Chapter1Arrays\IsUnique\IsUniqueExercise;
use PHPUnit\Framework\TestCase;

class IsUniqueExerciseTest extends TestCase
{
    protected IsUniqueExercise $isUniqueExercise;

    protected function setUp(): void
    {
        $this->isUniqueExercise = new IsUniqueExercise();
    }

    public function testHasAllUniqueCharacters()
    {
        $this->assertTrue($this->isUniqueExercise->hasAllUniqueCharacters("abcde1"));
    }

    public function testHasnotAllUniqueCharacters()
    {
        $this->assertFalse($this->isUniqueExercise->hasAllUniqueCharacters("qwertq"));
    }

    public function testHasNotAllUniqueCharactersWithUpperCase()
    {
        $this->assertFalse($this->isUniqueExercise->hasAllUniqueCharacters("qwertQ"));
    }
}
