<?php


 function getCurrentDateTime()
{
    $years = date("d/m/Y");
    $times = date("H:i:s");
    $day = date("l");
    return "Nous sommes le " . $day . " " . $years . " " . ", il est " . $times;

}

 function chooseRandomNumberAndParity()
{
    $number = rand(1, 10);

    if ($number % 2 !== 0) {
        return "J'ai choisi le nombre" . " " . $number . " " . "C'est un nombre impair.";
        # code...
    } else {
        return "J'ai choisi le nombre" . " " . $number . " " . "C'est un nombre pair.";
    }

}

 function reverseName(string $robotName)
{
   return "Mon nom à l'envers s'écrit" ." ". strrev($robotName). ". Ah. Ah. Ah. Ah.";
}

 function RobotBehavion()
{
    $num = rand(1, 3);
    if (($num) > 1) {
        # code...
        return "Vous voulez un café ?";
    }
    // une fois sur trois le robot devient diabolique
    return "Extermination ! Extermination ! ";
}