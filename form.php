<!DOCTYPE html> <! --shift 1 tab --> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 align="center">Add a Book</h2>
<form align="center" method="post" action="createProcess.php">
    <label for:title>Title : </label>
<input type="text" name="title" placeholder="Type title"required>
<br><br>
<label for: Author> Author : </label>
  <input type="text" name="authorName" placeholder="Type author name"required>
    <br><br>
    <label for: Avaiable> Available : </label>
   <input type="text" name="available" placeholder="Type true/false"required>
    <br><br>
    <label for: pages> Pages : </label>
   <input type="text" name="pages" placeholder="Type page number"required>
    <br><br>
    <label for: isbn>Isbn : </label>
   <input type="text" name="isbn" placeholder="Type isbn"required>
    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
