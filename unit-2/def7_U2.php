<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    //String Maniputlation Functions

    <?php
    $conn = new mysqli("localhost", "root", "", "test");

    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $queries = [
        "SELECT LENGTH('Hello PHP') AS Length",
        "SELECT CONCAT('Hello', '', 'PHP') AS Result",
        "SELECT CONCAT_WS(' - ', 'PHP', 'MySQL', 'HTML') AS Result",
        "SELECT TRIM('   Hello PHP  ') AS Trimmed,
                LTRIM('  Hello PHP') AS LTrimmed,
                RTRIM('Hello PHP  ') AS RTrimmed",
        "SELECT LPAD('Hello', 8, '*') AS LPAD,
                RPAD('Hello', 8, '*') AS RPAD,
                LOCATE('SQL', 'MySQL Database') AS Locate",
        "SELECT SUBSTR('Hello PHP', 1, 5) AS Substring",
        "SELECT LCASE('Hello PHP') AS Lowercase,
                UCASE('Hello PHP') AS Uppercase",
        "SELECT REPEAT('PHP ', 3) AS Repeated,
                REPLACE('Hello PHP', 'PHP', 'MySQL') AS Replaced"
    ];

    foreach ($queries as $sql) {
        echo "<br>";

        $result = $conn->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                foreach ($row as $key => $value) {
                    echo "<b>$key :</b> $value <br>";
                }
            }
        } else {
            echo "Query Error";
        }
    }

    $conn->close();
    ?>

</body>
</html>