<?php

namespace viandry\andreylb3\Database\Factories;

use JohnDoe\BlogPackage\Models\TOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = TOrder::class;

    public function definition()
    {
        return [
            "status" => "test",
            "delivery" => "test"
        ];
    }
}