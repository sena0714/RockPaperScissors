<?php
require_once('Hand.php');

class MatchResult
{
    private $hand;

    private $otherHand;

    private $matchResultStatus;

    public function __construct(Hand $hand, Hand $otherHand, int $matchResultStatus)
    {
        $this->hand = $hand;
        $this->otherHand = $otherHand;
        $this->matchResultStatus = $matchResultStatus;
    }

    public function showOutHand()
    {
        echo 'あなたは'.$this->hand->getName().'を出しました';
    }

    public function showOutOtherHand()
    {
        echo '相手は'.$this->otherHand->getName().'を出しました';
    }

    public function showMatchResult()
    {
        if ($this->matchResultStatus === MatchResultStatus::WIN) {
            echo 'あなたの勝ち！';
        }

        if ($this->matchResultStatus === MatchResultStatus::LOSE) {
            echo 'あなたの負け。。。';
        }

        if ($this->matchResultStatus === MatchResultStatus::DRAW) {
            echo '引き分け';
        }
    }
}