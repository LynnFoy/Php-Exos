<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form method="get" action="">
    <label for="gender">Etes-vous un humain,un chat ou une licorne ?</label>
    <input type="text" name="gender">
    <input type="submit" name="submit" value="Submit">
</form>
    <?php
         $choice = ($_GET["gender"] == "humain" OR $_GET["gender"] == "chat" OR $_GET["gender"] == "licorne") ?
         (($_GET["gender"] == "humain") ?  '<img src="https://media.giphy.com/media/gC8v9sFRUPg0U/giphy.gif" alt="humain">' : (($_GET["gender"] == "licorne") ?
          '<img src="https://media.giphy.com/media/3o6gb6d7TyqQrI17zi/giphy.gif" alt="licorne">' : '<img src="https://media.giphy.com/media/LHZyixOnHwDDy/giphy.gif" alt="chat">' )) : "3 genres différents";
        echo $choice;
    ?>
</body>
</html>