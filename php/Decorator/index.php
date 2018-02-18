<?php

interface CarService
{
    public function getCost();

    public function getDescription();
}

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 25;
    }

    public function getDescription()
    {
        return "Basic Inspection";
    }
}

class OilChange implements CarService
{
    protected $carService;

    function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 19 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ", and Oil Change";
    }
}

class TireRotation implements CarService
{
    protected $carService;

    function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 15 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ", and Tire Rotation";
    }
}

$service1 = new OilChange(new TireRotation(new BasicInspection));
$service2 = new OilChange((new BasicInspection));
echo $service1->getDescription() . " . Cost of service is: " . $service1->getCost() . "\n";
echo $service2->getDescription() . " . Cost of service is: " . $service2->getCost() . "\n";