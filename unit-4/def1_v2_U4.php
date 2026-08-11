<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php
                $conn = new PDO("mysqli:host=localhost:3307;dbname=studentdb", "root", "");
                echo "Database Connected Successfully.";
            ?>
</body>
</html>