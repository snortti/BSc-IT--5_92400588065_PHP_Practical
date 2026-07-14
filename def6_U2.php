<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
            <title>Function For Calculator</title>
</head>
<body>

<h2>Simple Calculator Using User Defined Function</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    Select Operation:
    <select name="operation">
        <option value="add">Addition (+)</option>
        <option value="sub">Subtraction (-)</option>
        <option value="mul">Multiplication (*)</option>
        <option value="div">Division (/)</option>
    </select><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>
         <?php
                function calculate(float $num1, float $num2, string $operation): ?float {
                    // support both symbol and word operation values
                    switch ($operation) {
                        case '+' :
                        case 'add':
                            return $num1 + $num2;
                        case '-' :
                        case 'sub':
                            return $num1 - $num2;
                        case '*' :
                        case 'mul':
                            return $num1 * $num2;
                        case '/' :
                        case 'div':
                            if ($num2 == 0.0) {
                                return null; // indicate error (division by zero)
                            }
                            return $num1 / $num2;
                        default:
                            return "Operation is Invalid";
                    }
                }

                if (isset($_POST['submit'])) {
                    $n1 = (float) $_POST['num1'];
                    $n2 = (float) $_POST['num2'];
                    $op = (string) $_POST['operation'];
                    $result = calculate($n1, $n2, $op);

                    if ($result === null) {
                        echo "<h3>Result: Error (invalid operation or division by zero)</h3>";
                    } else {
                        echo "<h3>Result: $result</h3>";
                    }
                }
         ?>
</body>
</html>