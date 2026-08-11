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
                $conn =  mysqli_connect("localhost", "root", "", "logindb");
                $username = $_POST['username'];
                $password = $_POST['password'];
                $sql = "SELECT * FROM users 
                        WHERE username='$username'
                        AND password='$password'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    $_SESSION['username'] = $username;
                    header("Location: def_7_U3_Home.php");
                    exit();
                }
                else
                {
                    echo "Username or Password is incorrect.";
                    echo "<a href='def_7_U3_login.html'>Back to Login</a>";
                }
                $conn->close();
        ?>
</body>
</html>