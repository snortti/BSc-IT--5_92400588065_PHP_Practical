<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max and Min Value</title>
</head>
<body>
    <?php
        $A = 50;
        $B = 20;

            //Arithmetic Operators
        echo "Addition of A and B is <br> ". $A + $B;
        echo "<br> Subtraction of A and B is " .$A - $B;
        echo "<br> Multiplication of A and B is " .$A * $B;
        echo "<br> Division of A and B is <br>" .$A / $B;
        echo "<br> Modulus of A and B is " .$A % $B; 
        echo "<br> Exponensure of A and B is " .$A ** $B;

        //Assignment Operators
        echo "<br> A = B is " .$A = $B;
        echo "<br> A += B is " .$A += $B;
        echo "<br> A -= B is " .$A -= $B;
        echo "<br> A *= B is " .$A *= $B;

        //Comparison Operators
        echo "<br> A == B is " .($A == $B);
        echo "<br> A != B is " .($A != $B);
        echo "<br> A > B is " .($A > $B);
        echo "<br> A < B is " .($A < $B);
        echo "<br> A >= B is " .($A >= $B);
        echo "<br> A <= B is " .($A <= $B);

        //Logical Operators
        echo "<br> A && B is " .($A && $B);
        echo "<br> A || B is " .($A || $B);
        echo "<br> !A is " .(!$A);

        //Relational Operators
        echo "<br> A <=> B is " .($A <=> $B);
        
    ?>
</body>
</html>