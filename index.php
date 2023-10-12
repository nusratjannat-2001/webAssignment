<?php
$json = file_get_contents('books.json');
$bookJson = json_decode($json, true);
?>
<h1 align="center">Management of Books</h1>

<form align="center" action="search.php" method="get">
    <input type="text" name="query" placeholder="Type isbn" id="query">
    <button type="submit">Search</button>
</form>
<table align="center" border="1" width="900">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Available</th>
        <th>Pages</th>
        <th>Isbn</th>
        <th>Actions</th>
    </tr>
    <?php $index = 0; ?>
    <?php foreach ($bookJson as $p) {
    ?>
        <tr align="center">
            <td><?php echo $p['title']; ?></td>
            <td><?php echo $p['author']; ?></td>
            <td><?php echo $p['available']; ?></td>
            <td><?php echo $p['pages']; ?></td>
            <td><?php echo $p['isbn']; ?></td>
            <td>
                <a href="edit.php?index=<?php echo $index ?>">Edit</a>

                <form action="deleteProcess.php" method="POST">
                    <input type="hidden" name="index" value="<?php echo $index ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php
        $index++;
    }

    ?>

</table>
<?php
echo '<center>';
echo '<a href="form.php">Add Book</a>';
echo '</center>';
?>
