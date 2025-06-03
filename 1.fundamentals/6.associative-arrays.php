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
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
        ]
    ];
    ?>

    <p>Accessing associative array elements:</p>
    <ul>
        <?php
        foreach ($books as $book) {
            echo "<li>{$book['name']} ({$book['releaseYear']}) - By {$book['author']}</li>";
        }
        ?>
    </ul>

    <p>Alternative syntax with HTML:</p>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul></a>


    <br><br><br>
    <hr>
    <div style="display: flex; justify-content: space-between;">
        <a href="./5.arrays.php">Previous: Arrays</a>
        <a href="./index.php">Home</a>
        <a href="./7.functions-and-filters.php">Next: Functions and filters</a>
    </div>
</body>

</html>