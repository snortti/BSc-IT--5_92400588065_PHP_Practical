<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions</title>
</head>
<body>

<?php

            //1 - array_change_key_case()
            echo "<h3>1 - array_change_key_case()</h3>";

            $arr = array(
                "Name" => "James",
                "City" => "Paynesville",
                "Date" => "July 7th"
                );

                    echo "Original Array:<br>";
                    print_r($arr);

                    echo "<br><br>Array with keys in UPPERCASE:<br>";
                    print_r(array_change_key_case($arr, CASE_UPPER));

                    echo "<br><br>Array with keys in lowercase:<br>";
                    print_r(array_change_key_case($arr, CASE_LOWER));


            //2 - array_chunk()
            echo "<hr><h3>2 - array_chunk()</h3>";

                $months = array(
                    "Jan", "Feb", "Mar", "Apr", "May", "Jun",
                    "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"
                );

                    echo "<pre>";
                    print_r(array_chunk($months, 3));
                    echo "</pre>";


            //3 - array_count_values()
            echo "<hr><h3>3 - array_count_values()</h3>";

            $colors = array("Red", "Blue", "Red", "Green", "Blue", "Red");

                echo "<pre>";
                print_r(array_count_values($colors));
                echo "</pre>";


            //4 - array_combine()
            echo "<hr><h3>4 - array_combine()</h3>";

            $keys = array("Name", "City", "Date");
            $values = array("James", "Paynesville", "July 7th");

                echo "<pre>";
                print_r(array_combine($keys, $values));
                echo "</pre>";


            //5 - array_pop()
            echo "<hr><h3>5 - array_pop()</h3>";

            $num = array(10, 20, 30, 40, 50);
            array_pop($num);

                echo "<pre>";
                print_r($num);
                echo "</pre>";


            //6 - array_push()
            echo "<hr><h3>6 - array_push()</h3>";

        $num = array(10, 20, 30);
        array_push($num, 40, 50);

                echo "<pre>";
                print_r($num);
                echo "</pre>";


            //7 - array_unshift()
            echo "<hr><h3>7 - array_unshift()</h3>";

            $num = array(20, 30);
            array_unshift($num, 10);

                echo "<pre>";
                print_r($num);
                echo "</pre>";


            //8 - array_shift()
            echo "<hr><h3>8 - array_shift()</h3>";

            $num = array(10, 20, 30, 40);
            array_shift($num);

                echo "<pre>";
                print_r($num);
                echo "</pre>";

?>

</body>
</html>