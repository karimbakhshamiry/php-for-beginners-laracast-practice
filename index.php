<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP for Beginners Course by Jeffrey Way</title>
</head>

<body>
    <h1>PHP for Beginners Course</h1>
    <p>Welcome to PHP for Beginners by Jeffrey Way. In this comprehensive course, you'll learn:</p>
    <ul>
        <li>Core PHP fundamentals and syntax</li>
        <li>Working with databases and MySQL</li>
        <li>Building dynamic web applications</li>
        <li>Object-oriented programming in PHP</li>
        <li>and some other miscellaneous topics</li>
    </ul>

    <h2>Topics</h2>
    <ul>

        <?php
        $list_of_content = [
            [
                "title" => "Section 1: Fundamentals",
                "link" => "./1.fundamentals/index.php",
            ],
            [
                "title" => "Section 2: Dynamic Web Applications",
                "link" => "./2.dynamic-web-applications/index.php",
            ],
            [
                "title" => "Section 3: Notes -  Mini Project",
                "link" => "./3.notes-mini-project/index.php",
            ]
        ];
        ?>

        <?php foreach ($list_of_content as $item): ?>
            <li>
                <a href=<?= $item["link"] ?>><?= $item["title"] ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>