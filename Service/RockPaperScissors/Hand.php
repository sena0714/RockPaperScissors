<?php
interface Hand
{
    public function getCode();

    public function play(Hand $otherPlayerHand);
}