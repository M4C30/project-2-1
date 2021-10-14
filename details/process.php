<?php 

$mysqli = new mysqli('localhost', 'db86699', 'plesk02M@ceo!', '86699_database') or die(mysqli_error($mysqli));
$id = 0;
$update = false;
$name = "";
$writer = "";
$release = "";
$desc = "";
$img = "";

if (isset($_POST['save'])){
     $name = $_POST['Naam'];
     $writer = $_POST['Schrijver'];
     $release = $_POST['Uitgave'];
     $desc = $_POST['Beschrijving'];
     $img = $_POST['img'];
     
     $name = str_replace(["<", ">"], ["&lt;", "&gt;"], $name);
     $writer = str_replace(["<", ">"], ["&lt;", "&gt;"], $writer);
     $release = str_replace(["<", ">"], ["&lt;", "&gt;"], $release);
     $desc = str_replace(["<", ">"], ["&lt;", "&gt;"], $desc);
     $img = str_replace(["<", ">"], ["&lt;", "&gt;"], $img);

     $statement = $mysqli->prepare("INSERT INTO back12_manga (Naam, Schrijver, Uitgave, Beschrijving, img) VALUES(?, ?, ?, ?, ?)");
     $statement->bind_param("sssss", $name, $writer, $release, $desc, $img);
     $statement->execute();


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
          $img = $row['img'];
     }
     
}
if (isset($_POST['update'])){
     $id = $_POST['ID'];
     $name = $_POST['Naam'];
     $writer = $_POST['Schrijver'];
     $release = $_POST['Uitgave'];
     $desc = $_POST['Beschrijving'];
     $img = $_POST['img'];

     $name = str_replace(["<", ">"], ["&lt;", "&gt;"], $name);
     $writer = str_replace(["<", ">"], ["&lt;", "&gt;"], $writer);
     $release = str_replace(["<", ">"], ["&lt;", "&gt;"], $release);
     $desc = str_replace(["<", ">"], ["&lt;", "&gt;"], $desc);
     $img = str_replace(["<", ">"], ["&lt;", "&gt;"], $img);


     $statement = $mysqli->prepare("UPDATE back12_manga SET Naam=?, Schrijver=?, Uitgave=?, Beschrijving=?, img=? WHERE ID=?");
     $statement->bind_param("sssssi", $name, $writer, $release, $desc, $img, $id);
     $statement->execute();
     

     
          header("location: index.php");
     
     #var_dump($statement);
}

?>