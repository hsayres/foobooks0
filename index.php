<?php
require 'helpers.php';
require 'logic.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Foobooks0</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>

    <link href='styles.css' rel='stylesheet'>

</head>
<body>

<h1>Foobooks0</h1>

<form method='POST'>
    <label>Search for a book:
        <input type='text' name='searchTerm' value='<?= sanitize($searchTerm) ?>'>
    </label>
    <label>Case sensitive:
        <input type='checkbox' name = 'caseSensitive' value = '1' <?=($caseSensitive) ? 'checked' : '';?>>
    </label>
    <input type='submit' value='search'>
</form>

<?php if ($searchTerm): ?>
    <p>You searched for <em><?= sanitize($searchTerm) ?></em></p>
<?php else: ?>
    <p>Welcome to Foobooks0; Enter a title above to search our library!</p>
<?php endif ?>

<?php if ($haveResults): ?>

    <?php foreach ($books as $title => $book): ?>

        <div class='book'>
            <div class='title'><?= $title ?></div>
            <div class='author'> by <?= $book['author'] ?></div>
            <img src='<?= $book['cover_url'] ?>' alt='Cover photo for the book <?= $title ?>'>
        </div>

    <?php endforeach ?>

<?php elseif ($searchTerm): ?>
    No results
<?php endif ?>
</body>
</html>