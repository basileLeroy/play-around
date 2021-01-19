<?php

class Blackjack
{
    public $totalScore;
    public $result;
    public $YourDeck;
    public $computerDeck;

    public function run()
    {
        if (!empty($_POST['submit'])) {

            $this->givePlayerCards();
            

            if(!empty($_SESSION["yourCards"])){
                $this->yourDeck = $_SESSION["yourCards"];
            }

        }
        if (!empty($_POST['stop'])) {
            $this->giveComputerCards();
            

            if(!empty($_SESSION["pcCards"])){
                $this->computerDeck = $_SESSION["pcCards"];
            }
        }


        $_SESSION['yourCards'] = $this->YourDeck;
        $_SESSION['pcCards'] = $this->computerDeck;

    }

    public function givePlayerCards()
    {
        $yourDeck = Array(
            1,
            2,
            3, 
            4, 
            5, 
            6, 
            7, 
            8, 
            9, 
            10, 
            11, 
            12, 
            13
        );

        $this->yourDeck = $yourDeck;
    }

    public function giveComputerCards()
    {
        $computerDeck = Array(
            1,
            2,
            3, 
            4, 
            5, 
            6, 
            7, 
            8, 
            9, 
            10, 
            11, 
            12, 
            13
        );

        $this->computerDeck = $computerDeck;
    }
}