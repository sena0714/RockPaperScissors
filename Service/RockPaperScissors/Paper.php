<?php
require_once('Hand.php');
require_once('Constant/HandCodes.php');
require_once('Constant/HandNames.php');
require_once('Constant/MatchResultStatus.php');

class Paper implements Hand
{
    public function getName()
    {
        return HandNames::PAPER;
    }

    public function getCode()
    {
        return HandCodes::PAPER;
    }

    public function play(Hand $otherHand)
    {
        if ($otherHand->getCode() === HandCodes::ROCK) {
            return MatchResultStatus::WIN;
        }

        if ($otherHand->getCode() === HandCodes::PAPER) {
            return MatchResultStatus::DRAW;
        }

        if ($otherHand->getCode() === HandCodes::SCISSORS) {
            return MatchResultStatus::LOSE;
        }
    }
}