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

require "separate-logic-from-template.view.php";