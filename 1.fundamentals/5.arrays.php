<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    $books = [
        "my first book",
        "my second book",
        "my third book",
    ];
    ?>

    <p>first method, (check the file)</p>
    <ul>
        <?php
        foreach ($books as $book) {
            echo "<li>$book</li>";
        }
        ?>
    </ul>


    <p>second method, (check the file)</p>
    <ul>
        <?php
        // to let the variable get separated to whatever occurs immediately after that
        foreach ($books as $book) {
            echo "<li>{$book}&#174;</li>";
        }
        ?>
    </ul>


    <p>third method, (check the file)</p>
    <ul>
        <!-- this one is when the html file or the elments we want to echo get so complicated, or in other words, the things we would like to inject in the our html code make the code complicated, so there is a shorthand for such things including conditional, and loops -->
        <?php foreach ($books as $book): ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>


    <br><br><br>
    <hr>
    <div style="display: flex; justify-content: space-between;">
        <a href="./4.conditionals-and-booleans.php">Previous: Conditionals and boolean</a>
        <a href="./index.php">Home</a>
        <a href="./6.associative-arrays.php">Next: Associative arrays</a>
    </div>
</body>

</html>