<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function play($task, $correctAnswer){
    line("Question: " . $task);
    $userAnswer = trim(prompt("your answer: "));
    if ($userAnswer !== $correctAnswer ) {
        line("{$userAnswer} is wrong answer ;(. Correct answer was {$correctAnswer}.");
        line("Let's try again, {$name}!");
        return false;
    } else {
        line("Correct!");
    }
    return true;       
}