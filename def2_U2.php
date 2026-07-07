<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php
                    //Sorting an array entered by the user
                    $numbers = $_GET['user_input'];
                    $original_array = $numbers;
                    
                    echo "Original Array: <br>";
                    for ($i = 0; $i < count($original_array); $i++) {
                         echo $original_array[$i] . "<br>";
                    }
                    
                    sort($numbers);
                    
                    echo "Sorted Array: <br>";
                    for ($i = 0; $i < count($numbers); $i++) {
                         echo $numbers[$i] . "<br>";
                    }
            ?>
</body>
</html>