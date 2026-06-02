<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        //Using switch statement to print the office day based on the day of the week.
            switch (Office Day) {
                case "Monday":
                    echo "Office suite day";
                    break;
                case "Tuesday":
                    echo "Officail wear day";
                    break;
                case "Wednesday":
                    echo "Casual wear day";
                    break;
                case "Thursday":
                    echo "Formal wear day";
                    break;
                case "Friday":
                    echo "Jeans day";
                    break;
                case "Saturday":
                    echo "Weekend Office closed";
                    break;
                case "Sunday";
                    echo "Church day";
                    break;
                    default:
                    echo "Invalid day";
            }
        ?>
</body>
</html>