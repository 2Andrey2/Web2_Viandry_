<?php

namespace viandry\andreylb3\Database\Factories;

use JohnDoe\BlogPackage\Models\TProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = TProduct::class;

    public function definition()
    {
        return [
            "name" => "Test",
            "type" => 0,
            "supplier" => 0,
            "warehouse" => 0,
            "client" => 0,
            "order" => 0
        ];
    }
}