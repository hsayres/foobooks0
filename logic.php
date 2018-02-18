<?php

require('Book.php');

use Foobooks0\Book;

$book = new Book('books.json');

$haveResults = false;

$searchTerm = $_POST['searchTerm'] ?? '';
$caseSensitive = isset($_POST['caseSensitive']) ? true : false;


if (isset($searchTerm)) {

    $books = $book->getByTitle($searchTerm, $caseSensitive);

    if (count($books) > 0) {
        $haveResults = true;
    }
}

