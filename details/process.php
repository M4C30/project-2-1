<?php 

$mysqli = new mysqli('localhost', 'db86699', 'plesk02M@ceo!', '86699_database') or die(mysqli_error($mysqli));

if (isset($_POST['save'])){
     $name = $_POST['naam'];
     $writer = $_POST['schrijver'];
     $release = $_POST['uitgave'];
     $desc = $_POST['beschrijving'];
    
     $mysqli->query("INSERT INTO back12_manga (Naam, Schrijver, Uitgave, Beschrijving) VALUES('$name', '$writer', '$release', '$desc ')") or
     die ($mysqli->error);
}
//var_dump($_POST);
//var_dump($mysqli);

?>
