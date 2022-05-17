<?php

namespace viandry\andreylb3\Database\Factories;

use JohnDoe\BlogPackage\Models\TWarehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

class WarehouseFactory extends Factory
{
    protected $model = TWarehouse::class;

    public function definition()
    {
        return [
            "number" => 1,
            "addressname" => "addresTest",
            "telephone" => "0710000000"
        ];
    }
}