<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php
                    if($conn){
                        echo "Database Connected Successfully. <br>";
                    }
                    else{
                        die("Connection Failed" . $conn->connect_error());
                    }
                    $sql = "UPDATE students3
                            SET name = 'James',
                            email = 'satiahjames18@gmail.com',
                            city = 'Rajkot'
                            WHERE id=1";

                    if($conn->query($sql)){
                        echo "<br> Record Updated Successfully.";
                    }
                    else{
                        echo "ERROR";
                    }
                    $conn->close();
            ?>
</body>
</html>