<?php
interface Vehicle
{
    public function driveInCarWash(): void;

}

class Car implements Vehicle
{
    public function driveInCarWash(): void
    {
        var_dump("Car is in line and will be washed");
    }
}

class Scooter implements Vehicle
{
    public function driveInCarWash(): void
    {
        var_dump("Scooter is in line and will be washed");
    }
}

class Motocycle implements Vehicle
{
    public function driveInCarWash():void
    {
        var_dump("Motocycle is in line and will be washed");
    }
}

class CarWashStation
{
    /** @var Vehicle[] */
    private array $vehicles;

    public function __construct(array $vehicles)
    {
        foreach ($vehicles as $vehicle)
        {
            $this->add($vehicle);
        }
    }

    public function add(Vehicle $vehicle): void
    {
        $this->vehicles[] = $vehicle;
    }

    public function washAllVehicles(): void
    {
        foreach ($this->vehicles as $vehicle)
        {
            $vehicle->driveInCarWash();
        }
    }
}

$carWashPitStop = new CarWashStation([
    new Car(),
    new Scooter(),
    new Motocycle()
]);

$carWashPitStop->washAllVehicles();

