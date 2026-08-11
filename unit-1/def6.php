<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php

                echo "<b>Using While Loop:</b><br>";

                $i = 15;
                while ($i <= 20) {
                    echo $i . "<br>";
                $i++;
                }

                    echo "<br><b>Using Do While Loop:</b><br>";

                $j = 15;
                do {
                    echo $j . "<br>";
                $j++;
                } while ($j <= 20);

        ?>
</body>
</html>