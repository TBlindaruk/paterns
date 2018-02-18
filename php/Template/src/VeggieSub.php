<?php

namespace App;

class VeggieSub extends Sub
{
    public function addPrimaryToppings(): Sub
    {
        var_dump('Add some veggies');
        return $this;
    }
}