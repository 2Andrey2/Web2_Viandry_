<?php

namespace viandry\andreylb3\Database\Factories;

use JohnDoe\BlogPackage\Models\TClient;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = TClient::class;

    public function definition()
    {
        return [
            "name" => "test",
            "addressname" => "test",
            "telephone" => "trst"
        ];
    }
}