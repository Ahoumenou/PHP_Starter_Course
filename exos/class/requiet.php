
<?php
date_default_timezone_set("Africa/Porto-Novo");


class Robot
{
    private $robotName;
    public $letters;
    public $randomNumbers;
    public $randomLetters;
    public $years;
    public $day;
    public $times;
    public $number;
    public $current;
    public $num;
    public function __construct()
    {
        $this->generateRandomRobotName();
    }

    public function generateRandomRobotName()
    {
        
        $this->letters = range('A', 'Z');
        $this->randomLetters = $this->letters[array_rand($this->letters)]
            . $this->letters[array_rand($this->letters)];
        $this->randomNumbers = rand(1000, 9999);

        return $this->robotName = $this->randomLetters . '-' . $this->randomNumbers;
    }

    public function greet()
    {
        return 'hello humain , je suis ';
    }

    public function getCurrentDateTime()
    {
        $this->years = date("d/m/Y");
        $this->times = date("H:i:s");
        $this->day = date("l");
        return "Nous sommes le " . $this->current = $this->day . " " . $this->years . " " . ", il est " . $this->times;

    }

    public function chooseRandomNumberAndParity()
    {
        $this->number = rand(1, 10);

        if ($this->number % 2 !== 0) {
            return "J'ai choisi le nombre" . " " . $this->number . " " . "C'est un nombre impair.";
            # code...
        } else {
            return "J'ai choisi le nombre" . " " . $this->number . " " . "C'est un nombre pair.";
        }
        // return $this->result = checkEventOld($this -> number);

    }
       
    public function checkEventOld(int $number)
    {
    }

    public function reverseName()
    {
       return "Mon nom à l'envers s'écrit" ." ". strrev($this->robotName). ". Ah. Ah. Ah. Ah.";
    }

    public function RobotBehavion()
    {
        $this->num = rand(1, 3);
        if (($this->num) > 1) {
            # code...
            return "Vous voulez un café ?";
        }
        // une fois sur trois le robot devient diabolique
        return "Extermination ! Extermination ! ";
    }

    
    
}

$RobotMartin = new Robot();


?>

<p>
    <?= 
      $RobotMartin->greet() . $RobotMartin->generateRandomRobotName() ?>
</p>
<p class="p_1">
    <?= $RobotMartin->reverseName() ?>
</p>
<p class="p_2">
    <?= $RobotMartin->chooseRandomNumberAndParity() ?>
</p>
<p class="p_3">
    <?= $RobotMartin->RobotBehavion() ?>
</p>
<p class="p_4">
    <?= $RobotMartin->getCurrentDateTime() ?>
</p>


