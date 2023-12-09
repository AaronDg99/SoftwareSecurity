<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    /**
     * Test if the sum of two numbers is correct.
     */
    public function test_sum_of_two_numbers(): void
    {
        $a = 2;
        $b = 3;
        $sum = $a + $b;

        $this->assertEquals(5, $sum);
    }
}
