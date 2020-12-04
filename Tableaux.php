<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $family = array( "Claire", "Claudine" , "Gerard");
    print_r($family);
    $recipes = array( "Pâtes", "Sushi" , "Frites");
    var_dump($recipes);
    $movies = array( "Star wars", "Harley Quinn" , "Kill Bill");
    echo $movies[0];
    $recipes[] = "Tartes";
    print_r($recipes);
    ?>

    <?php
    $me = array("firstName" => "Lynn",
    "yearsOld" => "32",
    "eyesColor" => "Marron",

);
$me["hobbies"] = ["Codage", "jouer aux jeux vidéos", "regarder des films et des séries "];
    ?>
</body>
</html>