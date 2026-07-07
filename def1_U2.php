<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php 
                   $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
                   echo "Day of the Week: <br>";

                   for ($i = 0; $i < count($days); $i++) {
                        echo $days[$i] . "<br>";
                   }
            ?>

</body>
</html>