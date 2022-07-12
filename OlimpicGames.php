<?php
interface AthletesAction
{
    public function throw():void;
}

class JavelinThrower implements AthletesAction
{
    public function throw(): void
    {
        echo "Athlete throws javelin in " . rand(50,150) . "m distance" . PHP_EOL;
    }
}

class HammerThrower implements AthletesAction
{
    public function throw(): void
    {
        echo "Athlete throws hammer in " . rand(50,150) . "m distance" . PHP_EOL;
    }
}

class DiscThrower implements AthletesAction
{
    public function throw(): void
    {
        echo "Athlete throws disc in " . rand(50,150) . "m distance" . PHP_EOL;
    }
}

class OlympicGames
{
    /**
     * @param AthletesAction $athlete
     * @return void
     */
    public function ReadySteadyGo($athlete):void
    {
        $athlete->throw();
    }
}

$competition = new OlympicGames();

$i=1;
while ($i!=4)
{
    echo "*****ROUND $i *****" . PHP_EOL;
    $competition->ReadySteadyGo($athlete1 = new HammerThrower());
    $competition->ReadySteadyGo($athlete2 = new JavelinThrower());
    $competition->ReadySteadyGo($athlete3 = new DiscThrower());
    $i++;


}
