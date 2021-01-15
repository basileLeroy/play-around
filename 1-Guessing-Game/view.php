<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Casino royale - guessing game</title>
</head>
<body>

<div class="title">
    <h1>Guess the Number!</h1>
</div>
<br><br>
<div class="guessInput">
    <?php
        pre_r($_POST['guess']);
        echo $_SESSION['secretNumber'];
    ?>

    <form method="POST">
        you have {{ numberOfGuesses }} left! <br><br>
        <div class="form-group col-md-6">
            <label for="guess">guess:</label>
            <input type="text" name="guess" id="guess" class="form-control" value="<?php echo isset($_POST['guess']) ? $_POST['guess'] : '' ?>">
        </div>
        <button type="submit" >Try your luck</button>
    </form>
</div>

</body>
</html>
<?php
    function pre_r( $array ) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
?>