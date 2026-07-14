<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

                    //Date and Time Funtions

         <?php
                    $conn = new mysqli("localhost", "root", "", "test");
                    if ($conn->connect_error)
                    {
                        die("Connection Failed: " . $conn->connect_error);
                    }
                    $queries = [
                        "SELECT DAYOFWEEK(CURDATE()) AS DayOfWeek",
                        "SELECT WEEKDAY(CURDATE()) AS Weekday",
                        "SELECT DAYOFMONTH(CURDATE()) AS DayofMonth",
                        "SELECT DAYOFYEAR(CURDATE()) AS DayOfYear",
                        "SELECT DAYNAME(CURDATE()) AS DayName",
                        "SELECT MONTH(CURDATE()) AS MonthNumber,
                                MONTHNAME(CURDATE()) AS MonthName",
                        "SELECT WEEK(CURDATE()) AS WeekNumber,
                                NOW(CURDATE()) AS CurrentDateTime",
                        "SELECT SYSDATE() AS SystemDateTime,
                                CURRENT_TIMESTAMP() AS Current_TimeStamp"
                    ];

                    foreach($queries as $sql){
                        echo "<br>";
                        $result = $conn->query($sql);
                        if($result){
                            while($row = $result->fetch_assoc()){
                                foreach($row as $key => $value)
                                    {
                                        echo "<br>$key :</br> $value <br>";
                                    }
                            }
                        }
                    }
         ?>

</body>
</html>