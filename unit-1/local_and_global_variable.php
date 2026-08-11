<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
        <?php
            $i = 10; //global variable
            function ABC(){
                $i = 100; //local variable
                echo "Local variable decleared inside the function is: " .$i;
                global $i;
            }
            ABC();
            echo $i; //global variable can be accessed outside the function
        ?>
</body>
</html>