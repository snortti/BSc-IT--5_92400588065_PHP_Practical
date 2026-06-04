<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php
            // Demonstrating the use of include and require statements

            // Using include()- generate an error for file not found but execution continues
                 echo "<h3>Using include():</h3>";
            include 'include_content.php';
                echo "<p>This line will be execute even if the file is not found.</p>";

            // Using include_once()- include file only once even if called multiple times
                echo "<h3>Using include_once():</h3>";
            include_once 'include_content.php';

                echo "<h3>Using require():</h3>";
            // Create a require file
            require 'require_content.php';
                echo "<p>This line will not be executed if the file is not found.</p>";

            // Using require_once() - require file only once
            require_once 'require_content.php';
            ?>
</body>
</html>