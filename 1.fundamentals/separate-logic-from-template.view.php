<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <p>We should separate the main php logic from the actual thing that is show on the browser (view). It can help us manage them well and make chnages easily. It is basically separation of concerns so we know easily which file should be be concerend about.</p>
    <p>This file is imported in anothe php file which contains the main logic, and with a single like, this file is appended to it, and this template or view is shown to you.</p>
    <ul>
        <?php
        foreach (filter($books, "author", "Andy Weir") as $book) {
            echo "<li>{$book['name']} ({$book['releaseYear']}) - By {$book['author']}</li>";
        }
        ?>
    </ul>

    <p>Alternative syntax with HTML:</p>
    <ul>
        <?php foreach (filter($books, "releaseYear", 2021) as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>





    <h2>lambda functions samples</h2>
    <ul>
        <?php
        foreach (
            filter_lambda($books, function ($book) {
                $book["author"] === 'Andy Weir';
                return $book["author"] === 'Andy Weir';
            }) as $book
        ) {
            echo "<li>{$book['name']} ({$book['releaseYear']}) - By {$book['author']}</li>";
        }
        ?>
    </ul>

    <p>Alternative syntax with HTML:</p>
    <ul>
        <?php foreach (
            filter_lambda($books, function ($book) {
                return $book["releaseYear"] < 2000;
            }) as $book
        ) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>



    <br><br><br>
    <hr>
    <div style="display: flex; justify-content: space-between;">
        <a href="./8.lambda-functions.php">Previous: Lambda functions</a>
        <a href="./index.php">Home</a>
        <a href="../2.dynamic-web-applications/index.php">Next: Dynamic Web Applications</a>
    </div>
</body>

</html>