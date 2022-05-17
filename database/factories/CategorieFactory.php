<?php

namespace viandry\andreylb3\Database\Factories;

use JohnDoe\BlogPackage\Models\TCategorie;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieFactory extends Factory
{
    protected $model = TCategorie::class;

    public function definition()
    {
        return [
            "name" => "test"
        ];
    }
}