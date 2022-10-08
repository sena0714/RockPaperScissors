<?php
require_once('Hand.php');
require_once('Constant/HandCodes.php');
require_once('Constant/HandNames.php');
require_once('Constant/MatchResultStatus.php');

class Rock implements Hand
{
    public function getName()
    {
        return HandNames::ROCK;
    }

    public function getCode()
    {
        return HandCodes::ROCK;
    }

    public function play(Hand $otherHand)
    {
        if ($otherHand->getCode() === HandCodes::ROCK) {
            return MatchResultStatus::DRAW;
        }

        if ($otherHand->getCode() === HandCodes::PAPER) {
            return MatchResultStatus::LOSE;
        }

        if ($otherHand->getCode() === HandCodes::SCISSORS) {
            return MatchResultStatus::WIN;
        }
    }
}