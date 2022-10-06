<?php
require_once('HandFactory.php');
require_once('MatchResultStatus.php');

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

        $this->showMatchResult($matchResultStatus);
    }

    private function showMatchResult(int $matchResultStatus)
    {
        if ($matchResultStatus === MatchResultStatus::WIN) {
            echo 'あなたの勝ち！';
        }

        if ($matchResultStatus === MatchResultStatus::LOSE) {
            echo 'あなたの負け。。。';
        }

        if ($matchResultStatus === MatchResultStatus::DRAW) {
            echo '引き分け';
        }
    }
}