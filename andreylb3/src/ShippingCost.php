<?php

namespace viandry\andreylb3;

class ShippingCost
{
    private $result;

    public function __construct()
    {
        $this->result = 0;
    }

    public function SetCurrency($pointA, $pointB)
    {
        return $this->result;
    }

    public function getResult()
    {
        return $this->result;
    }
}