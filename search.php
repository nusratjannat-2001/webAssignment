
<form method="post" action="index.php">
<input type="text" placeholder="Search..">
<button type="submit">Submit</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['author'])) {
    $json = file_get_contents('books.json');
    $bookJson = json_decode($json_data, true);

    $author_to_search = $_GET['author'];
    $filtered_books = array_filter($data['books'], function ($book) use ($author_to_search) {
        return $book['author'] === $author_to_search;
    });

    echo "<h2>Books by $author_to_search</h2>";
    echo "<ul>";
    foreach ($filtered_books as $book) {
        echo "<li>{$book['title']} by {$book['author']} ({$book['pages']} pages)</li>";
        header('Location: index.php');
    }
    echo "</ul>";
} else {
    echo "Please provide an author to search for.";
}
?>
