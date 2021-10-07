<?php 

$mysqli = new mysqli('localhost', 'db86699', 'plesk02M@ceo!', '86699_database') or die(mysqli_error($mysqli));
$id = 0;
$update = false;
$name = "";
$writer = "";
$release = "";
$desc = "";
if (isset($_POST['save'])){
     $name = $_POST['Naam'];
     $writer = $_POST['Schrijver'];
     $release = $_POST['Uitgave'];
     $desc = $_POST['Beschrijving'];
    
     $mysqli->query("INSERT INTO back12_manga (Naam, Schrijver, Uitgave, Beschrijving) VALUES('$name', '$writer', '$release', '$desc')") or
     die ($mysqli->error);

     $_SESSION['message'] = "Record has been saved!";
     $_SESSION['msg_type'] = "success";

     header('location: index.php');
}
//var_dump($_POST);
//var_dump($mysqli);

if (isset($_GET['delete'])){

     $id = $_GET['delete'];
     $mysqli->query("DELETE FROM back12_manga WHERE ID=$id") or die($mysqli->error());

     header('location: index.php');
}
if (isset($_GET['edit'])){
     $id = $_GET['edit'];
     $update = true;
     $result = $mysqli->query("SELECT * FROM back12_manga WHERE ID=$id") or die ($mysqli->error());

     if (count($result)==1){
          $row = $result->fetch_array();
          $name = $row['Naam'];
          $writer = $row['Schrijver'];
          $release = $row['Uitgave'];
          $desc = $row['Beschrijving'];
     }
     
}
if (isset($_POST['update'])){
     var_dump($_POST);
     $id = $_POST['ID'];
     $name = $_POST['Naam'];
     $writer = $_POST['Schrijver'];
     $release = $_POST['Uitgave'];
     $desc = $_POST['Beschrijving'];
     $query = "UPDATE back12_manga SET Naam='$name', Schrijver='$writer', Uitgave='$release', Beschrijving='$desc' WHERE ID=$id";
     echo($query);
     if(!$mysqli->query($query)){
          echo("error: " . $mysqli->error);
     }else{
          header('location: index.php');
     }
     #var_dump($mysqli);
}
?>
