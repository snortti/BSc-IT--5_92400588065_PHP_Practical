<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php
                    // Get current month number (1-12)
                    $month = date("n");

                    echo "Current Month Number: " . $month . "<br><br>";

                    // 1. Using IF
                    echo "<b>Using IF:</b><br>";
                        if ($month == 6) {
                    echo "Current month is June.<br><br>";
            }

                  // 2. Using IF-ELSE
                  echo "<b>Using IF-ELSE:</b><br>";
                      if ($month == 1) {
                  echo "Current month is January.<br><br>";
                  }   else {
                  echo "Current month is not January.<br><br>";
              }

                  // 3. Using IF-ELSE-IF
                  echo "<b>Using IF-ELSE-IF:</b><br>";
                      if ($month == 1) {
                  echo "January<br><br>";
                      } elseif ($month == 2) {
                  echo "February<br><br>";
                      } elseif ($month == 3) {
                  echo "March<br><br>";
                      } elseif ($month == 4) {
                  echo "April<br><br>";
                      } elseif ($month == 5) {
                  echo "May<br><br>";
                      } elseif ($month == 6) {
                  echo "June<br><br>";
                      } else {
                  echo "Another month<br><br>";
      }

                // 4. Using NESTED IF
                echo "<b>Using Nested IF:</b><br>";
                    if ($month >= 1 && $month <= 12) {
                    if ($month == 6) {
                echo "Current month is June.<br>";
                    } else {
                echo "Current month is not June.<br>";
                    }
          }
      ?>    
</body>
</html>