<?php
interface Vehicle
{
    public function wash(): void;

}

class Car implements Vehicle
{
    public function wash(): void
    {
        var_dump("Car is washing...");
    }
}

class Scooter implements Vehicle
{
    public function wash(): void
    {
        var_dump("Scooter is washing ...");
    }
}

class Motocycle implements Vehicle
{
    public function wash():void
    {
        var_dump("Motocycle is washing...");
    }
}

class CarWash
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

    public function driveInCarWash(): void
    {
        foreach ($this->vehicles as $vehicle)
        {
            $vehicle->wash();
        }
    }
}

$carwash = new CarWash([
    new Car(),
    new Scooter(),
    new Motocycle()
]);

$carwash->driveInCarWash();