<?php


class GuessingGame
{
    public $maxGuesses;
    public $secretNumber;
    public $result;
    public $attempts = 5;
    

    // TODO: set a default amount of max guesses
    public function __construct(int $maxGuesses)
    {
        // We ask for the max guesses when someone creates a game
        // Allowing your settings to be chosen like this, will bring a lot of flexibility
        $this->maxGuesses = $maxGuesses;

        //When Session is NOT empty, it will generate {$this->secretNumber} with the value from the session
        if (!empty($_SESSION['secretNumber'])) {
            $this->secretNumber = $_SESSION['secretNumber'];
        }
        
        if(!empty($_SESSION["attempts"])){
            $this->attempts = $_SESSION["attempts"];
        }
    }



    public function run()
    {
        // This function functions as your game "engine"
        // It will run every time, check what needs to happen and run the according functions (or even create other classes)

        // TODO: check if a secret number has been generated yet
        if (!empty($this->secretNumber)) {
            
            $this->generatSecretNumber();
        }
        // --> if not, generate one and store it in the session (so it can be kept when the user submits the form)
        // TODO: check if the player has submitted a guess
        if (!empty($_POST['guess'])) {
            $this->playerGuess();
        }
        // --> if so, check if the player won (run the related function) or not (give a hint if the number was higher/lower or run playerLoses if all guesses are used).
        // TODO as an extra: if a reset button was clicked, use the reset function to set up a new game
    }

    public function generatSecretNumber()
    {
        $this->secretNumber = rand(1, 10);
        $_SESSION['secretNumber'] = $this->secretNumber;
        return;
    }

    public function playerGuess()
    {
        // Check if player has made a guess
        if (!empty($_POST['guess'])) {
            $this->attempts--;
            
        }
        $_SESSION["attempts"] = $this->attempts;
        var_dump($_SESSION["attempts"]);

        if ($this->attempts == 0) {
            $this->playerLoses();
        }

        // TODO: Adding +1 to the amount of guesses already tried

        if ($_POST['guess'] == $this->secretNumber) {
            $this->playerWins();
            

        } else if ($_POST['guess'] != $this->secretNumber) {
            $this->playerLoses();
            
            // TODO: when a player guessed wrong, adding +1 to $amountOfGuesses
            
        }
    }

    public function playerWins()
    {
        // TODO: show a winner message (mention how many tries were needed)
        $this->result = "You won!";
    }

    public function playerLoses()
    {
        // TODO: show a lost message (mention the secret number)
        $this->result = "You lost! Try again!";
        $this->reset();
    }

    public function reset()
    {
        // TODO: Generate a new secret number and overwrite the previous one

        // TODO: Have a reset option when guessing <max guess num> times wrong

        $_SESSION["attempts"] = 5;
        $this->attempts = 5;
    }
}