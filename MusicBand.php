<?php

interface Orchester
{
    /**
     * @return void
     */
    public function play():void;
}

class Guitar implements Orchester
{
    public function play(): void
    {
        echo "Guitar is making noise ..." . PHP_EOL;
    }
}

class Drums implements Orchester
{
    public function play(): void
    {
        echo "Drums do bang bang..." . PHP_EOL;
    }
}

class Vocal implements Orchester
{
    public function play(): void
    {
        echo "Vocal master does AAAaaaAAAaaaaa ..." . PHP_EOL;
    }
}

class MusicBand
{
    private array $participants;

    public function __construct(array $participants)
    {
        $this->participants = $participants;
    }
}

$guitar = new Guitar();
$drums = new Drums();
$vocal = new Vocal();

$orchester = [$guitar, $drums, $vocal];

foreach ($orchester as $participant)
{
    $participant->play();
}
