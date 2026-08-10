<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
                session_start();

                if(isset($_SESSION['username']))
                {
                    header("Location: def_7_U3_login.html");
                    exit();
                }
                echo "<h2>Welcome, " . $_SESSION['username'] . "!</h2>";
                echo "<p>You have successfully logged in.</p>";
                echo "<a href='def_7_U3_logout.php'>Logout</a>";

        ?>
</body>
</html>