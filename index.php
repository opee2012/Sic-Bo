<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sic Bo Assignment</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    </head>
    <body>
        <?php
        $test = (int) $_POST['balance'];
        if ($test <= 0) {
            $balance = 1000;
            echo "Your new balance is $$balance.<br><br>";
        } else {
            $balance = $_POST['balance'];
            echo "Your current balance is $$balance.<br><br>";
        }

        $max = intval($balance/4);
        ?>
        Big Bet Amount: $<input type="number" name="bigbet" step="1" value="0" min="0" max="$max">
        Odds are 1:1 for a total roll score from 11 to 17 (inclusive) with the exception of a triple.<br>
        Small Bet Amount: $<input type="number" name="smallbet" step="1" value="0" min="0" max="$max"> 
        Odds are 1:1 for a total roll score from 4 to 10 (inclusive) with the exception of a triple.<br>
        Even Bet Amount: $<input type="number" name="evenbet" step="1" value="0" min="0" max="$max"> 
        Odds are 1:1 for a total roll score of an even number with the exception of a triple.<br>
        Odd Bet Amount: $<input type="number" name="oddbet" step="1" value="0" min="0" max="$max"> 
        Odds are 1:1 for a total roll score of an odd number with the exception of a triple.<br>
        <input type="hidden" name="balance" value="$balance">
        <input type="submit" value="Place Bet">
        <input type="reset">;

    </body>
</html>