
<?php

class RockPaperScissors
{
    //TODO: What I will need: Pc-Pick; Player-Pick & a Result
    public $computerPick = ["rock", "paper", "scissors"];
    public $result;
    public $yourPick;
    public $pcScore = 0;
    public $yourScore = 0;

    public function run()
    {
        // This function functions as your game "engine"
        // Now it's on to you to take the steering wheel and determine how it will work

        //TODO: Have the player pick an option and submit to trigger the other functions
        if (!empty($_POST['name'])) {
            $this->yourPick = $_POST['name'];
            $this->computerChoice();
            $this->gameResult();

            if(!empty($_SESSION["pcScore"])){
                $this->pcScore = $_SESSION["pcScore"];
            }
            if(!empty($_SESSION["yourScore"])){
                $this->yourScore = $_SESSION["yourScore"];
            }
        }

        $_SESSION["pcScore"] = $this->pcScore;
        $_SESSION["yourScore"] = $this->yourScore;

    }

    //TODO: Making a randomizer to select the computer choice
    public function computerChoice()
    {
        $computerPick = Array("rock", "paper", "scissors");

        $this->computerPick = $computerPick[array_rand($computerPick)];

    }

    //TODO: Defining the results
    public function gameResult()
    {
        if ($_POST['name'] === "rock") {
            // == because the value is the same but not the the exact same variable
            if ($this->computerPick == 'paper') {
                $this->result = "You Lost!";
                $_SESSION['pcScore']++;
            }
            if ($this->computerPick == 'rock') {
                $this->result = "DRAW!";
            }
            if ($this->computerPick == 'scissors') {
                $this->result = "You Won!";
                $_SESSION['yourScore']++;
            }
        }

        if ($_POST['name'] === "paper") {
            if ($this->computerPick == 'paper') {
                $this->result = "DRAW!";
            }
            if ($this->computerPick == 'rock') {
                $this->result = "You Won!";
                $_SESSION['pcScore']++;
            }
            if ($this->computerPick == 'scissors') {
                $this->result = "You Lost!";
                $_SESSION['yourScore']++;
            }
        }

        if ($_POST['name'] === "scissors") {
            if ($this->computerPick == 'paper') {
                $this->result = "You Won!";
                $_SESSION['yourScore']++;
            }
            if ($this->computerPick == 'rock') {
                $this->result = "You Lost!";
                $_SESSION['pcScore']++;
            }
            if ($this->computerPick == 'scissors') {
                $this->result = "DRAW!";
            }
        }
    }
}