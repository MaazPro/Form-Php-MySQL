<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php require_once 'insert.php'     ?>
    <form name = "" action="" method = "post">
        <label>Name:</label><input type="text" name = "name">
        <br>
        <label>Email:</label><input type="email" name = "email">
        <br>
        <label>Age:</label><input type="text" name = "age">
        <br>
        <label>Address:</label><input type="text" name = "address">
        <br> 
        <input type="submit" value="Submit" name = "submit">
    </form>
</body>
</html>