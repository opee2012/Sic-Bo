<!--
    CSCI 297, Hello World, Jacob Borth, 20 September 2022
    Displays "Hello World".
-->

<!DOCTYPE html>
<html>
    <head>
        <title>Hello World Assignment</title>
    </head>
    <body>
        <?php
        // Figure out how to keep them from overlapping.
        $dice1 = rand(1,6);
        echo "<img src='images/Alea_$dice1.png'";
        $dice2 = rand(1,6);
        echo "<img src='images/Alea_$dice2.png'";
        $dice3 = rand(1,6);
        echo "<img src='images/Alea_$dice3.png'";

        
        
        ?>
    </body>
</html>