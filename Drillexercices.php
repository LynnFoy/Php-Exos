<html>
  <html lang="en">
  <head><title>Exos</title></head>
  <body>
      
 ~Nettoyez votre chambre~
 <?php
 $room_filthiness = true;
if( $room_filthiness == true ){
echo "La chambre est sale: nettoyons-la !";
echo "La chambre est propre maintenant";
$room_filthiness = false;
} else {
echo "il n'y a rien à faire,la chambre est propre.";
}
?>

~Age~
<?php
if (isset($_GET["age"])){
if ($_GET["age"]<12){
echo "Bonjour kiddo!";
} else if ($_GET["age"]>=12 && $_GET["age"]<18){
echo "Bonjour adolescent !";
} else if ($_GET["age"]>=18 && $_GET["age"]<115){
echo "Bonjour Adulte !";
} else {
echo "Wow! Toujours vivant? Êtes-vous un robot, comme moi ? Puis-je vous serrer dans mes bras ?";
}
}
?>
<form method="get" action="">
<label for="age">...</label>
<input type="" name="age">
<input type="submit" name="submit" value="Greet me now">
</form>

~Affichez un message d’accueil~
<?php
 if (isset($_GET["age"],$_GET["gender"])){
if ($_GET["age"]<12){
 if ($_GET["gender"]){
 echo "Bonjour Kiddo!";
 } else {
 echo "Bonjour Miss Kiddo!";
 }
 } else if ($_GET["age"]>=12 && $_GET["age"]<18){
  if ($_GET["gender"]){
  echo "Bonjour ado!";
} else {
  echo "Bonjour Miss ado!";
 }
} else if ($_GET["age"]>=18 && $_GET["age"]<115){
 if ($_GET["gender"]){
 echo "Bonjour Mr!";
 } else {
echo "Bonjour Madame!";
  }
}
}
?>
<form method="get" action="">
  <label for="age">Age</label>
 <input type="" name="age">
  <input type="radio" id="gender" name="gender" value="male">
    <label for="gender">Homme</label>
    <input type="radio" id="gender" name="gender" value="female">
  <label for="gender">femme</label>
 <input type="submit" name="submit" value="Submit">
</form>

~Equipe de fille~ 
<?php
$result = ($_GET["age"]>=21 && $_GET["age"]<=40 && $_GET["gender"]) ? "Bienvenue dans l’équipe!" : "Désolé, vous ne répondez pas aux critères";
echo $result;
?>
<form method="get" action="">
<label for="name">Nom</label>
<input type="" name="name">
<label for="age">Age</label>
<input type="" name="age">
<input type="radio" id="gender" name="gender" value="male">
<label for="gender">Homme</label>
<input type="radio" id="gender" name="gender" value="female">
<label for="gender">femme</label>
<input type="submit" name="submit" value="Submit">
</form>

~L’école craint~
<?php
if (isset($_GET["post"])){
if ($_GET["post"]<=4){
echo "Ce travail est vraiment mauvais. Quel gamin idiot!";
} else if ($_GET["post"]>=5 && $_GET["post"]<=9){
echo "Ce n’est pas suffisant. Il faut étudier davantage.";
} else if ($_GET["post"]==10){
echo "A peine assez!";
} else if ($_GET["post"]>=11 && $_GET["post"]<=14){
echo "Pas mal!";
} else if ($_GET["post"]>=15 && $_GET["post"]<=18){
echo "Bravo!";
} else {
echo "Trop beau pour être vrai : affrontez le tricheur!";
}
}
?>
<form method="get" action="">
  <label for="post">Note 1->20</label>
    <input type="" name="ecrit">
    <input type="submit" name="submit" value="Submit">
</form>

~Opérateurs ternaires~
<?php
if (isset($_GET["gender"])) $hello = $_GET["gender"] != "Homme" ? "Bonjour MS" : "Bonjour MR";
echo $hello;
?>
<form method="get" action="">
    <input type="radio" id="gender" name="gender" value="male">
    <label for="gender">Homme</label>
    <input type="radio" id="gender" name="gender" value="female">
    <label for="gender">Femme</label>
    <input type="submit" name="submit" value="Submit">

  </body>
</html>