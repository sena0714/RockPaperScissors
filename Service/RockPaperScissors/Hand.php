<?php
interface Hand
{
    public function getName();

    public function getCode();

    public function play(Hand $otherHand);
}