<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Casino royale - rock, paper, scissors</title>
</head>
<body>
    <div class="title">
        <h1>Rock Paper Scissors!</h1>
    </div>
    <br><br>

    <!-- <?php
    pre_r($_POST);
    echo $_POST['name'];
    ?> -->

    <div class="game-field">
    <form action="index.php" method="POST">
        <div class="computer-pick">
            <h3>Computer pick:</h3>
            <p>The Computer chose: <b><?php if(!empty($_POST['name'])){echo $game->computerPick;};?></b></p>
            <br>
            <h3>Your pick:</h3>
            <p>You chose: <b><?php if(!empty($_POST['name'])){echo $_POST['name'];};?></b></p>

            <div class="result">
                <p>Result: <?php if(!empty($_POST['name'])){echo $game->result;}?></p>
            </div>

            <div class="your-Pick">
            <input type="checkbox" name="name" value="rock" id="rock">rock</input>
            <input type="checkbox" name="name" value="paper" id="paper">paper</input>
            <input type="checkbox" name="name" value="scissors" id="scissors">scissors</input>
            <br><br>
            <button type="submit" name="submit" id="submit">Play!</button>
            </div>
        </div>
    </form>
    </div>
</body>
</html>

<!-- <?php
    function pre_r( $array ) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
?> -->