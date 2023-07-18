<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\getName;

function questions()
{
    $name = getName();
    line("Answer 'yes' if the number is even, otherwise answer 'no'");
    for ($i=1; $i<4; $i++) {
        $randomNumber = random_int(1, 100);
        $isEven = ($randomNumber % 2 === 0);
        $correctAnswer = $isEven ? 'yes' : 'no';
        line("Question, %d", $randomNumber);
        $userAnswer = trim(prompt("your answer: "));
        if ($userAnswer !== $correctAnswer ) {
            line("{$userAnswer} is wrong answer ;(. Correct answer was {$correctAnswer}.");
            line("Let's try again, {$name}!");
            return false;
        } else {
            line("Correct!");
        }       
    }
    line("Congratulations, {$name}!");
    return true;
}