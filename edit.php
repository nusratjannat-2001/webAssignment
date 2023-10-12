<?php
$json = file_get_contents('books.json');
$bookJson = json_decode($json, true);

$index = $_GET['index']; # See: index.php Line: 25

$bookToEdit = $bookJson[$index];
?>

<!DOCTYPE html> <! --shift 1 tab --> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center">Edit a Book</h2>
<form align="center" method="post" action="editProcess.php">
    <input type="hidden" name="indexToEdit" value="<?php echo $index ?>">
    <label for:title>Title : </label>
<input type="text" name="title" value="<?php echo $bookToEdit['title'] ?>" placeholder="Type title"required>
<br><br>
<label for: Author> Author : </label>
  <input type="text" name="authorName" value="<?php echo $bookToEdit['author'] ?>" placeholder="Type author name"required>
    <br><br>
    <label for: Avaiable> Available : </label>
   <input type="text" name="available" value="<?php echo $bookToEdit['available'] ?>" placeholder="Type true/false"required>
    <br><br>
    <label for: pages> Pages : </label>
   <input type="text" name="pages" value="<?php echo $bookToEdit['pages'] ?>" placeholder="Type page number"required>
    <br><br>
    <label for: isbn>Isbn : </label>
   <input type="text" name="isbn" value="<?php echo $bookToEdit['isbn'] ?>" placeholder="Type isbn"required>
    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
