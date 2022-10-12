<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sic Bo Assignment</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    </head>
    <body>
        <table>    
        <form method="POST" action="index2.php">
        <?php
        $max = 0;
        if ($_POST["Start_Over"] || $_SESSION["balance"] <= 0) {
            $_SESSION["balance"] = 1000;
            echo "Your starting balance is $";
            echo $_SESSION["balance"];
        } else
        if ($_POST['New_Bet'] || $_SESSION["balance"] > 0) {
            echo "Your current balance is $";
            echo $_SESSION["balance"];
        }
        $max = intval($_SESSION["balance"]/4);
        ?>
        <br><br>
            <tr><td>Big Bet Amount:</td><td>$<input type="number" name="big" step="1" value="0" min="0" max="<?=$max?>">
            Odds are 1:1 for a total roll score from 11 to 17 (inclusive) with the exception of a triple.</td></tr>
            <tr><td>Small Bet Amount:</td><td>$<input type="number" name="small" step="1" value="0" min="0" max="<?=$max?>"> 
            Odds are 1:1 for a total roll score from 4 to 10 (inclusive) with the exception of a triple.</td></tr>
            <tr><td>Even Bet Amount:</td><td>$<input type="number" name="even" step="1" value="0" min="0" max="<?=$max?>"> 
            Odds are 1:1 for a total roll score of an even number with the exception of a triple.</td></tr>
            <tr><td>Odd Bet Amount:</td><td>$<input type="number" name="odd" step="1" value="0" min="0" max="<?=$max?>"> 
            Odds are 1:1 for a total roll score of an odd number with the exception of a triple.</td></tr>
            <tr><td><input type="submit" value="Place Bet">
            <input type="reset"></td></tr>
        </form>
        </table>
    </body>
</html>