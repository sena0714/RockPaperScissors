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

        $matchResult = $hand->play($otherHand);

        if ($matchResult === MatchResultStatus::WIN) {
            echo 'あなたの勝ち！';
        }

        if ($matchResult === MatchResultStatus::LOSE) {
            echo 'あなたの負け。。。';
        }

        if ($matchResult === MatchResultStatus::DRAW) {
            echo '引き分け';
        }
    }
}