<?php
require_once('HandCodes.php');
require_once('Rock.php');
require_once('Paper.php');
require_once('Scissors.php');

class HandFactory
{
    public static function create(int $rockPaperScissorsCode)
    {
        if ($rockPaperScissorsCode === HandCodes::ROCK) {
            return new Rock();
        }

        if ($rockPaperScissorsCode === HandCodes::SCISSORS) {
            return new Scissors();
        }

        if ($rockPaperScissorsCode === HandCodes::PAPER) {
            return new Paper();
        }
    }

    public static function createRandom()
    {
        $hands = [new Rock(), new Scissors(), new Paper()];

        $handKey = array_rand($hands, 1);

        return $hands[$handKey];
    }
}