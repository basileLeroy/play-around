
<?php

class RockPaperScissors
{
    public $computerPick = ["rock", "paper", "scissors"];
    public $result;
    public $yourPick;

    public function run()
    {
        // This function functions as your game "engine"
        // Now it's on to you to take the steering wheel and determine how it will work

        //TODO: Have the player pick an option and submit
        if (!empty($_POST['name'])) {
            $this->yourPick = $_POST['name'];
            $this->computerChoice();
            $this->gameResult();
        }
    }

    public function computerChoice()
    {
        $computerPick = Array("rock", "paper", "scissors");

        $this->computerPick = $computerPick[array_rand($computerPick)];
        
        
    }

    public function gameResult()
    {
        if ($_POST['name'] === "rock") {
            // == because the value is the same but not the the exact same variable
            if ($this->computerPick == 'paper') {
                $this->result = "You Lost!";
            }
            if ($this->computerPick == 'rock') {
                $this->result = "DRAW!";
            }
            if ($this->computerPick == 'scissors') {
                $this->result = "You Won!";
            }
        }

        if ($_POST['name'] === "paper") {
            if ($this->computerPick == 'paper') {
                $this->result = "DRAW!";
            }
            if ($this->computerPick == 'rock') {
                $this->result = "You Lost!";
            }
            if ($this->computerPick == 'scissors') {
                $this->result = "You Won!";
            }
        }

        if ($_POST['name'] === "scissors") {
            if ($this->computerPick == 'paper') {
                $this->result = "You Won!";
            }
            if ($this->computerPick == 'rock') {
                $this->result = "You Lost!";
            }
            if ($this->computerPick == 'scissors') {
                $this->result = "DRAW!";
            }
        }

        
    }
}