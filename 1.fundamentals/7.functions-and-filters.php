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

    function filter_by_author($books, $author){
        $filtered_books = [];
        foreach ($books as $book) {
            if($book['author'] === $author) {
                $filtered_books[] = $book;
            }
        }
        return $filtered_books;
    }
    ?>

    <p>Accessing associative array elements passed from a function (check the code please):</p>
    <ul>
        <?php
        foreach (filter_by_author($books,"Andy Weir") as $book) {
            echo "<li>{$book['name']} ({$book['releaseYear']}) - By {$book['author']}</li>";
        }
        ?>
    </ul>

    <p>Alternative syntax with HTML:</p>
    <ul>
        <?php foreach (filter_by_author($books, "Andy Weir") as $book) : ?>
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
        <a href="./6.associative-arrays.php">Previous: Associative Arrays</a>
        <a href="./index.php">Home</a>
        <a href="./8.lambda-functions.php">Next: Lambda Functions</a>
    </div>
</body>

</html>