<?php
date_default_timezone_set("Africa/Porto-Novo");


function generateRandomRobotName()
{
    $letters = range('A', 'Z');
    $randomLetters = $letters[array_rand($letters)]
        . $letters[array_rand($letters)];
    $randomNumbers = rand(1000, 9999);

    return $randomLetters . '-' . $randomNumbers;
}
$robotName = generateRandomRobotName();

// Bonus 2

// Définition du fuseau horaire
$years = date("d/m/Y");
$times = date("H:i:s");
$day = date("l");

//  Bonus 3
$number = rand(1, 10);
function checkEventOld($number)
{
    if ($number % 2 !== 0) {
        return "J'ai choisi le nombre" . " " . $number . " " . "C'est un nombre impair.";
        # code...
    }
    return "J'ai choisi le nombre" . " " . $number . " " . "C'est un nombre pair.";
}
$result = checkEventOld($number);

// Bonus 4

// Deux fois sur trois, le robot offre un café
function nature($num)
{
    if (($num) > 1) {
        # code...
        return "Vous voulez un café ?";
    }
    // une fois sur trois le robot devient diabolique
    return "Extermination ! Extermination ! ";
}

$numb = rand(1, 3);
$robotNature = nature($numb);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p> Salut humain , Je suis
        <?php echo $robotName ?>
    </p>
    <!-- <p> Salut humain , Je suis <?= $robotName ?> </p>  -->
    <p>Nous sommes le
        <?= $day . " " . $years . " " . ", il est " . $times ?>
    </p>
    <p>
        <?= $result ?>
    </p>
    <p>Mon nom à l'envers s'écrit
        <?= strrev($robotName) ?> . Ah. Ah. Ah. Ah
    </p>
    <p>
        <?= $robotNature ?>
    </p>

</body>

</html>