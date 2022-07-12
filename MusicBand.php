<?php

interface Conductor //diriģents
{
    public function play():void;
}

class Cello implements Conductor
{
    public function play(): void
    {
        echo "Cello supports the bass line of the ensemble" . PHP_EOL;
    }
}

class Harp implements Conductor

//Arfas atskaņotāji atskaņo mūziku, nospiežot stīgas pareizā secībā un īstajā laikā.
{
    public function play(): void
    {
        echo "Harp players play music by plucking the strings in the right order and at the right time." . PHP_EOL;
    }
}

class Viola implements Conductor
{
    public function play(): void
    {
        echo "Violas are perfect foils to play rhythmic or harmonic accompaniments to the violins, leaving the second violins free to contribute to the melody" . PHP_EOL;
    }
}

class MusicBand
{
    private array $participants;

    public function __construct(array $participants)
    {
        $this->participants = $participants;
    }

    public function StartConcert():void
    {
        /** @var Cello $participant */
        foreach ($this->participants as $participant)
        {
            $participant->play();
        }
    }
}
$participants = [new Cello(), new Viola(), new Harp()];

$musicBand = new MusicBand($participants);
$musicBand->StartConcert();