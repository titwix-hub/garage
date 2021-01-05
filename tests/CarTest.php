<?php

use App\Car;

use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    /** @test */
    public function can_have_car_name()
    {
        $car = new Car('Fiat Punto');

        $this->assertEquals('Fiat Punto', $car->name);
    }
}
