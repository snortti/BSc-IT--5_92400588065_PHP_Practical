<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php
                    $conn = new mysqli("localhost", "root", "", "studentdb");
                    if (!$conn){
                        die("Connection Failed: " . mysqli_connect_error());
                    }


                    //CREATE TABLE IF NOT EXISTS students
                    $sql = "CREATE TABLE IF NOT EXISTS students (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        name VARCHAR(50),
                        age VARCHAR(50),
                        number int(30),
                        email VARCHAR(50)
                    )";

                    if(mysqli_query($conn, $sql)){
                        echo "Table created successfully.";
                    }
                    else{
                        echo "Error:" .$conn->error;
                    }
                    $conn->close();
            ?>
</body>
</html>