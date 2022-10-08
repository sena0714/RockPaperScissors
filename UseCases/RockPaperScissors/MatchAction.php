<?php
require_once(__DIR__.'/../../Service/RockPaperScissors/HandFactory.php');
require_once(__DIR__.'/../../Service/RockPaperScissors/MatchResultStatus.php');
require_once(__DIR__.'/../../Service/RockPaperScissors/MatchResult.php');

class MatchAction
{
    private $handCode;

    public function __construct(int $handCode)
    {
        $this->handCode = $handCode;
    }

    public function execute()
    {
        $hand = HandFactory::create($this->handCode);

        $otherHand = HandFactory::createRandom();

        $matchResultStatus = $hand->play($otherHand);

        $matchResult = new MatchResult($hand, $otherHand, $matchResultStatus);

        $matchResult->showOutHand();

        echo nl2br(PHP_EOL);

        $matchResult->showOutOtherHand();

        echo nl2br(PHP_EOL);

        $matchResult->showMatchResult();
    }
}