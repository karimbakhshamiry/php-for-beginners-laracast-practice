<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>

    <p>In PHP, we use conditions to make decisions in our code, just like how we make decisions in real life! Conditions help our program decide what to do next based on certain rules.</p>
    <p>Let's learn about conditions and boolean values (true/false):</p>

    <?php
    $age = 20;
    $isStudent = true;
    $name = "Alex";

    // Simple if condition
    if ($age >= 18) {
        echo "You are an adult!";
        echo "<br>";
    }

    // If-else condition
    if ($isStudent) {
        echo "$name is a student";
        echo "<br>";
    } else {
        echo "$name is not a student";
        echo "<br>";
    }

    // Comparison operators
    $score = 75;
    if ($score >= 70) {
        echo "You passed the test!";
        echo "<br>";
    }

    // Boolean values
    $isLoggedIn = false;
    echo "Login status: " . ($isLoggedIn ? "Logged in" : "Not logged in");
    echo "<br>";
    ?>

    <p>These are basic examples of conditions and boolean values in PHP. We use them to control the flow of our programs!</p>

    <br><br><br>
    <hr>
    <div style="display: flex; justify-content: space-between;">
        <a href="./3.variables.php">Previous: Variables</a>
        <a href="./index.php">Home</a>
        <a href="./5.arrays.php">Next: Arrays</a>
    </div>
</body>

</html>