<?php

namespace viandry\andreylb3\Database\Factories;

use JohnDoe\BlogPackage\Models\TSupplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    protected $model = TSupplier::class;

    public function definition()
    {
        return [
            "name" => "Test",
            "addressname" => "addresTest",
            "telephone" => "0710000000"
        ];
    }
}