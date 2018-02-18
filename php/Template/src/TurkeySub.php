<?php

namespace App;

class TurkeySub extends Sub
{
    public function addPrimaryToppings(): Sub
    {
        var_dump('Add some turkey');
        return $this;
    }
}