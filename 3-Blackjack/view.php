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
    echo $_POST['name'];
    ?>
    <form action="index.php" method="POST">

        <div class="total-count">
            <h2>Total: </h2>
        </div>

        <div class="result">
            <p>You </p>
        </div>

        <div class="deck">
            <p>Your cards:</p><br>

        </div>

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