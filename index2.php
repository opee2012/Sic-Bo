<!--
    CSCI 297, Hello World, Jacob Borth, 20 September 2022
    Displays "Hello World".
-->

<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sic Bo Assignment</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    </head>
    <body>
        <form method="POST" action="index.php">
        <?php
        $dice1 = rand(1,6);
        echo "<img src='images/Alea_$dice1.png'>";
        $dice2 = rand(1,6);
        echo "<img src='images/Alea_$dice2.png'>";
        $dice3 = rand(1,6);
        echo "<img src='images/Alea_$dice3.png'><br>";

        $pot = array(0, 0, 0, 0);
        $big = (int) $_POST['big'];
        $small = (int) $_POST["small"];
        $even = (int) $_POST["even"];
        $odd = (int) $_POST["odd"];

        $diceall = $dice1 + $dice2 + $dice3;

        if ($dice1 == $dice2 && $dice2 = $dice3) {
            $pot[0] = 0 - $big;
            $pot[1] = 0 - $small;
            $pot[2] = 0 - $even;
            $pot[3] = 0 - $odd;
        } else {
            if ($diceall >= 11 && $diceall <= 17 && $big >= 0) {
                $pot[0] = $big;
            } else $pot[0] = 0 - $big;
    
            if ($diceall >= 4 && $diceall <= 10 && $small >= 0) {
                $pot[1] = $small;
            } else $pot[1] = 0 - $small;
    
            if ($diceall % 2 == 0 && $even >= 0) {
                $pot[2] = $even;
            } else $pot[2] = 0 - $even;
    
            if ($diceall % 2 == 1 && $odd >= 0) {
                $pot[3] = $odd;
            } else $pot[3] = 0 - $odd;
        }

        $betTotal = $pot[0] + $pot[1] + $pot[2] + $pot[3];
        $balance = (int) $_SESSION["balance"];

        if ($betTotal >= 0) {
            $balance += $betTotal;
            $wlOutput = "You won";
        }
        if ($betTotal < 0) {
            $balance += $betTotal;
            $betTotal *= -1;
            $wlOutput = "You lost";
        }

        echo "<br>$wlOutput $$betTotal!<br>New Pot Total: $$balance.";
        $_SESSION["balance"] = $balance;
        ?>
        <form action="/index.php">
        <?php
            if ($balance > 0) {
                echo "<br><input type='submit' value='New Bet' name='New Bet'>";
                echo "<br><input type='submit' value='Start Over' name='Start Over'>";
            } else echo "<br><input type='submit' value='Start Over' name='Start Over'>";
        ?>
        </form>
    </body>
</html>