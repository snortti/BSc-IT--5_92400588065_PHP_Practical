<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        //Using for loop to print numbers from 5 to 10.
            for($i = 5; $i <= 10; $i++) {
                echo $i . "<br>";
            }

            //Using ForEach loop to print numbers from 1 to 5.
            $numbers = [1, 2, 3, 4, 5];
            foreach ($numbers as $number) {
                echo $number . "<br>";
            }
        ?>
</body>
</html>