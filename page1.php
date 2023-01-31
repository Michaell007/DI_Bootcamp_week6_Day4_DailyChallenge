<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="page2.php">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom"> <br><br>


        <label for="music">White</label>
        <input type="checkbox" name="color[]" value="white"> <br/>
        <label for="music">Black</label>
        <input type="checkbox" name="color[]" value="black"> <br/>
        <label for="music">Orange</label>
        <input type="checkbox" name="color[]" value="orange">

        <br/><br/>
        <input type="submit" value="Submit">
    </form>
</body>
</html>