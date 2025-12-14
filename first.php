<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="cals.jpg" alt="" class="src">

<div class="calculator">
    <h2>Simple PHP Calculator</h2>

    <form method="post">
        <input type="number" name="num1" placeholder="First number" required>
        <input type="number" name="num2" placeholder="Second number" required>

        <select name="operation" required>
            <option value="">Choose Operation</option>
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select>

        <button type="submit" name="calculate">Calculate</button>
    </form>

    <div class="result">
        <?php
        if (isset($_POST['calculate'])) {

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];

            if ($operation == "add") {
                echo "Result: " . ($num1 + $num2);

            } elseif ($operation == "sub") {
                echo "Result: " . ($num1 - $num2);

            } elseif ($operation == "mul") {
                echo "Result: " . ($num1 * $num2);

            } elseif ($operation == "div") {
                if ($num2 != 0) {
                    echo "Result: " . ($num1 / $num2);
                } else {
                    echo "Error: Cannot divide by zero";
                }

            } else {
                echo "Invalid operation";
            }
        }
        ?>
    </div>
</div>

</body>
</html>
