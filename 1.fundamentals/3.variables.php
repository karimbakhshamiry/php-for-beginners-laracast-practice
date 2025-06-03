<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>

    <p>Variables are like boxes where we store our toys. Just like how we put different toys in different boxes to find them later, we use variables in PHP to store information that we want to use later in our program!</p>
    <p>check this file to see how variables are created and used.</p>

    <p>code that prints that following variables are in php</p>
    <?php

    // variables starts with $ and can have any name
    $book = "Atr Khurasan";
    echo $book;
    echo "<br>";

    echo $book . " " . "is taken from a variable and printed here.";
    echo "<br>";

    echo "this is another form of using variable in a string. Name of the book $book";
    echo "<br>";

    echo "{$book}";
    echo "<br>";


    ?>

    <br><br><br>
    <hr>
    <div style="display: flex; justify-content: space-between;">
        <a href="./2.your-first-php-tag.php">Previous: Tools of the trade</a>
        <a href="./index.php">Home</a>
        <a href="./4.conditionals-and-booleans.php">Next: Conditionals and booleans</a>
    </div>
</body>

</html>