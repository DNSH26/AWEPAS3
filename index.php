<?php require_once('php/includes/default.inc.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Memory Spell</h1>

    <?php
        if(isset($_GET['end'])){
            $game = new Game(true);
        }else{
            $game = new Game(false);
        }

        if(isset($_GET['id'])){
            $game-> turnCard($_GET['id']);
        }else{
            $game -> check();
        }
        echo $game -> getHtml();
        $game -> save();

        if($game -> getFinished()){
            echo "<h1> class=\"gewonnen\"> Good Job </h1>";
        }
    ?>

    <br>
    <a href="?end"><button class="restart" name="button">Restart</button> </a>
</body>
</html>