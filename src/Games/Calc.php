<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\getName;
use function BrainGames\Engine\play;


function calculator()
{
    $name = getName();
    for ($i=1; $i<4; $i++) {
        line("What is the result of the expression?");
        $operations = ['+', '-', '/', '*'];
        $randomNumber1 = random_int(1, 100);
        $randomNumber2 = random_int(1, 100);
        $randomOperationKey = array_rand($operations, 1);
        $randomOperation = $operations[$randomOperationKey];
        $correctAnswer = match ($randomOperation) {
            '+' => $randomNumber1 + $randomNumber2 , 
            '-' => $randomNumber1 - $randomNumber2 ,
            '/' => $randomNumber1 / $randomNumber2 ,
            '*' => $randomNumber1 * $randomNumber2 ,
        };
        var_dump($correctAnswer);
        $task = "{$randomNumber1}{$randomOperation}{$randomNumber2}";
        $result = play($task, (string)$correctAnswer);
        if ($result === false){
            return false;
        }
    }
    line("Congratulations, {$name}!");
    return true;
}