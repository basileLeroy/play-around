<?php

class Blackjack
{
    public $totalScore;
    public $result;
    public $deck;

    public function run()
    {
        if (!empty($_POST['submit'])) {

            $this->giveFirstCards();

        }


    }

    public function giveFirstCards()
    {
        $deck = rand(1, 13);

        $this->deck = $deck;
    }
}