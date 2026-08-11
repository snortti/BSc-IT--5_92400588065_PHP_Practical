<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Method Example</title>
</head>
<body>

    <?php
        // error_reporting(0);
    ?>

    <form method="get">
        <input type="text" name="uname" placeholder="Name 1"><br><br>

        <input type="text" name="uname2" placeholder="Name 2"><br><br>

        <input type="text" name="uname3" placeholder="Name 3"><br><br>

        <input type="text" name="uname4" placeholder="Name 4"><br><br>

        <input type="text" name="uname5" placeholder="Name 5"><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        $nm = $_GET['uname'];
        $nm = $_GET['uname2'];
        $nm = $_GET['uname3'];
        $nm = $_GET['uname4'];
        $nm = $_GET['uname5'];

        echo "Hello, " . $nm;
    ?>

</body>
</html>