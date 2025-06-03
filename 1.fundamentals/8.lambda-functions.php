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

    <p>There are two types of functions:</p>
    <ol>
        <li>names functions</li>
        <li>lambda functions or anonymouse functions</li>
    </ol>

    <p>Named functions are the normal functions created with a name and then called later in the code. Lambda functions, however, are functions with no name. It is usually stored in a variable or passed to another function to be used there.</p>
    <p>Check the code for the following lines. They are done using lambda functions.</p>


    <?php
    // not lambda, just more dynamic
    function filter($books, $key, $value)
    {
        $filtered_books = [];
        foreach ($books as $book) {
            if ($book[$key] === $value) {
                $filtered_books[] = $book;
            }
        }
        return $filtered_books;
    }
    ?>
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

    <?php
    // filter by lambda function 
    function filter_lambda($items, $fn)
    {
        $filtered_items = [];
        foreach ($items as $book) {
            if ($fn($book)) {
                $filtered_items[] = $book;
            }
        }
        return $filtered_items;
    }
    ?>
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
        <a href="./7.functions-and-filters.php">Previous: Functions an filters</a>
        <a href="./index.php">Home</a>
        <a href="./9.separate-logic-from-template.php">Next: Separate logic from template</a>
    </div>
</body>

</html>