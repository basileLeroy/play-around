<?php

use function PHPSTORM_META\elementType;

class GuessingGame
{
    public $maxGuesses;
    public $secretNumber;
    public $result;
    public $attempts = 1;
    

    // TODO: set a default amount of max guesses
    public function __construct(int $maxGuesses = 5)
    {
        // We ask for the max guesses when someone creates a game
        // Allowing your settings to be chosen like this, will bring a lot of flexibility
        $this->maxGuesses = $maxGuesses;

        //When Session is NOT empty, it will generate {$this->secretNumber} with the value from the session
        if (!empty($_SESSION["secretNumber"])) {
            $this->secretNumber = $_SESSION["secretNumber"];
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
        if (empty($this->secretNumber)) {
            
            $this->generatSecretNumber();
        }
        // --> if not, generate one and store it in the session (so it can be kept when the user submits the form)
        // TODO: check if the player has submitted a guess
        if (!empty($_POST['guess'])) {
            $this->attempts++;

            if ($_POST['guess'] == $this->secretNumber) {
                $this->playerWins();

            } else if ($_POST['guess'] < $this->secretNumber) {
                $this->higher();

            } else if ($_POST['guess'] > $this->secretNumber) {
                $this->lower();

            }
        }

        $_SESSION['attempts'] = $this->attempts;

        if ($this->attempts > $this->maxGuesses) {
            $this->playerLoses();
        }
        // --> if so, check if the player won (run the related function) or not (give a hint if the number was higher/lower or run playerLoses if all guesses are used).
        // TODO as an extra: if a reset button was clicked, use the reset function to set up a new game
    }

    public function generatSecretNumber()
    {
        $this->secretNumber = rand(1, 20);
        $_SESSION['secretNumber'] = $this->secretNumber;
        
    }

    public function higher()
    {
        $this->result = "Aim a little bit higher!";
    }

    public function lower()
    {
        $this->result = "Aim a little bit lower!";
    }

    public function playerWins()
    {
        // TODO: show a winner message (mention how many tries were needed)
        $this->result = "<h4>You won!</h4><br><br><p>The secret number was indeed: {$this->secretNumber}</p>";
        $this->reset();
    }

    public function playerLoses()
    {
        // TODO: show a lost message (mention the secret number)
        $this->result = "<h4>You lost!</h4><br><br><p>The secret number was: {$this->secretNumber}</p>";
        $this->reset();
    }

    public function reset()
    {
        // TODO: Generate a new secret number and overwrite the previous one

        // TODO: Have a reset option when guessing <max guess num> times wrong

        $_SESSION["attempts"] = 1;
        $this->attempts = 1;

        // Creating a new secret number
        $this->generatSecretNumber();
    }
}