<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            function locaal_var(){
                $num = 45; //local variable
                echo "Local variable decleared inside the function is: " .$num;
            }
            locaal_var();
        ?>

</body>
</html>