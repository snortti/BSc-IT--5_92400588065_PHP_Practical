<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            echo "<h2>Welcome to Home Page</h2>";
            if(isset($_COOKIE['username']))
            {
                echo "Welcome, " . $_COOKIE['username'] . "!";
            }
            else
            {
                echo "Cookie Not Found. Please create a cookie first.";
            }
            echo "<br><br>";
            echo "<a href='def_1234_U3_Cookie.php'>Go to Cookie Page</a>";
        ?>
</body>
</html>