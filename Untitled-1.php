<!DOCTYPE html>
<html>
<head>
    <title>Randomly Add Two Numbers</title>
</head>
<body>
    <h1>Random Addition of Two Numbers</h1>
    <form method="post" action="">
        <input type="submit" name="generate" value="Generate and Add">
    </form>
    <?php
    if (isset($_POST['generate'])) {
        // Generate two random numbers between 1 and 100
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);

        // Calculate the sum
        $result = $num1 + $num2;

        echo "Random Number 1: $num1<br>";
        echo "Random Number 2: $num2<br>";
        echo "The sum of the random numbers is: $result";
    }
    ?>
</body>
</html>
