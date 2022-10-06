<?php
require_once('Hand.php');
require_once('HandCodes.php');
require_once('MatchResultStatus.php');

class Scissors implements Hand
{
    private $code = HandCodes::SCISSORS;

    public function getCode()
    {
        return $this->code;
    }

    public function play(Hand $otherHand)
    {
        if ($otherHand->getCode() === HandCodes::ROCK) {
            return MatchResultStatus::LOSE;
        }

        if ($otherHand->getCode() === HandCodes::PAPER) {
            return MatchResultStatus::WIN;
        }

        if ($otherHand->getCode() === HandCodes::SCISSORS) {
            return MatchResultStatus::DRAW;
        }
    }
}