<?php

 function generateRandomRobotName()
    {
        
        $letters = range('A', 'Z');
        $randomLetters = $letters[array_rand($letters)]
            . $letters[array_rand($letters)];
        $randomNumbers = rand(1000, 9999);

        return  $randomLetters . '-' . $randomNumbers;
    }

    function greet()
    {
        return 'hello humain , je suis ';
    }