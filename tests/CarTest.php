<?php

namespace Tests;

use App\Voiture;

class CarTest extends TestCase
{
    /** @test */
    public function creation_voiture()
    {
        $car = new Voiture(1000, 2000, '205', 3000, 'Peugeot');

        $this->assertEquals('Peugeot', $car->nameMarque);
        $this->assertEquals('Peugeot 205', $car->giveDenomination());
    }
}
