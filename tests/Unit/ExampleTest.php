<?php

namespace Tests\Unit;

use App\Http\Controllers\SumaController;
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
        $sumaController = app(SumaController::class);
        //$sum = app('app\Http\Controllers\SumaController')

        // Aserción 1: Comprobar la suma de 3 + 3 es igual a 6
        $this->assertEquals(6, $sumaController->add(3, 3));

        // Aserción 2: Comprobar que la suma de 0 + 0 es igual a 0
        $this->assertEquals(0, $sumaController->add(0, 0));

        // Aserción 3: Comprobar la suma de números negativos, por ejemplo, -2 + (-3) es igual a -5
        $this->assertEquals(-5, $sumaController->add(-2, -3));

        // Aserción 4: Comprobar la suma de números positivos y negativos, por ejemplo, 5 + (-3) es igual a 2
        $this->assertEquals(2, $sumaController->add(5, -3));

        // Aserción 5: Comprobar la suma de números decimales, por ejemplo, 2.5 + 3.5 es igual a 6.0
        $this->assertEquals(6.0, $sumaController->add(2.5, 3.5));
    }

    /**
     * Test if the sum of two large numbers is correct.
     */
    public function test_sum_of_two_large_numbers(): void
    {
        $sumaController = app(SumaController::class);

        // Aserción: Comprobar la suma de dos grandes números
        $this->assertEquals(2000000000, $sumaController->add(1000000000, 1000000000));
    }

    /**
     * Test if the sum of two different numbers is not equal to a given value.
     */
    public function test_sum_not_equal_to_given_value(): void
    {
        $sumaController = app(SumaController::class);

        // Aserción: Comprobar que la suma de 2 + 3 no es igual a 7
        $this->assertNotEquals(7, $sumaController->add(2, 3));
    }

    /**
     * Test if the sum of two numbers is greater than a given value.
     */
    public function test_sum_greater_than_given_value(): void
    {
        $sumaController = app(SumaController::class);

        // Aserción: Comprobar que la suma de 5 + 4 es mayor que 8
        $this->assertGreaterThan(8, $sumaController->add(5, 4));
    }

    /**
     * Test if the sum of two numbers is less than a given value.
     */
    public function test_sum_less_than_given_value(): void
    {
        $sumaController = app(SumaController::class);

        // Aserción: Comprobar que la suma de 2 + 3 es menor que 10
        $this->assertLessThan(10, $sumaController->add(2, 3));
    }
}
