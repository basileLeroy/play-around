<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Casino royale - Blackjack</title>
</head>
<body>
    <div class="title">
        <h1>Blackjack!</h1>
    </div>
    <br><br>

    <?php
    pre_r($_POST);
    pre_r($_SESSION);
    echo $_POST['name'];
    print_r($game->deck[rand(0, 12)]);
    ?>
    <form action="index.php" method="POST">

        <div class="computer-deck">
            <p>Dealer's Cards:</p>
            <p><?php if(!empty($_POST['stop'])){print_r($game->computerDeck[rand(0, 12)]);} ?></p>
            <p><?php if(!empty($_POST['stop'])){print_r($game->computerDeck[rand(0, 12)]);} ?></p>
        </div>

        <div class="total-count">
            <h2>Total: </h2>
        </div>

        <div class="result">
            <p>You </p>
        </div>

        <div class="your-deck">
            <p>Your cards:</p><br>
            <p><?php if(!empty($_POST['submit'])){print_r($game->yourDeck[rand(0, 12)]);} ?></p>
            <p><?php if(!empty($_POST['submit'])){print_r($game->yourDeck[rand(0, 12)]);} ?></p>
        </div>

        <?php
        if (!empty($_POST['submit'])) {
            echo '<input type="checkbox" id="submit" name="stop" value="stop" >stop</input>';
            echo '<input type="checkbox" id="submit" name="call" value="call" >call</input><br><br>';
        }
        ?>

        <button type="submit" id="submit" name="submit" value="play" >Play!</button>

    </form>
    



</body>
</html>

<?php
    function pre_r( $array ) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
?>