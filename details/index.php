<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGAKA</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="../huisstijl/style.css">
</head>

<body>
    <?php require_once 'process.php'; ?>
    <?php 

        $mysqli = new mysqli('localhost', 'db86699', 'plesk02M@ceo!', '86699_database') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM back12_manga") or die($mysqli->error);
        //pre_r($result);
        
        
    ?>
    <form action="process.php" method="POST">
    <div id="header">
        <div id="headerTitel">
            <div id="bannerDiv"></div>
            <a href="../home">
                <img id="logo" src="../images/logo_cropped.png" alt="logo">
            </a>
        </div>
        <header id="header">
            <a class="headerA" href="../home">
                <div class="headerItems">Home</div>
            </a>
            <a class="headerA" href="../overzicht">
                <div class="headerItems">Overzicht</div>
            </a>
            <a class="headerA" href="../details">
                <div class="headerItems">Details</div>
            </a>
        </header>
    </div>
    <h1>Voeg hier Manga/Comics toe die nog niet op de website staan!</h1>
        <input type="hidden" name="ID" value="<?php echo $id;?>">
        <div id="header"></div>
        <div id="container">
            <div id="wrapper-1">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Naam: </th>
                            <th>Schrijver: </th>
                            <th>Uitgave: </th>
                            <th>Beschrijving: </th>
                            <th>Afbeelding: </th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['Naam']; ?></td>
                        <td><?php echo $row['Schrijver']; ?></td>
                        <td><?php echo $row['Uitgave']; ?></td>
                        <td><?php echo $row['Beschrijving']; ?></td>
                        <td><img src="<?php echo $row['img']; ?>" alt=""></td>
                        <td>
                            <div id="edit">
                            <a href="index.php?edit=<?=$row['ID']?>">Edit</a>
                            </div>
                            <div id="delete">
                            <a href="process.php?delete=<?=$row['ID']?>">Delete</a>
                    </div>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
            <?php 
            
            function pre_r( $array ){
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
    
            ?>
            <div id="wrapper-2">
                <label>Naam: </label><input value="<?php echo $name;?>" type="text" name="Naam">
                <label>Schrijver: </label><input value="<?php echo $writer;?>" type="text" name="Schrijver">
                <label>Uitgave: </label><input value="<?php echo $release;?>" type="text" name="Uitgave">
                <label>Beschrijving: </label><input value="<?php echo $desc;?>"  type="text" name="Beschrijving">
                <label>Afbeelding (jpg, jpeg, png, etc.): </label><input value="<?php echo $img;?>" type="text" name="img">
                <?php if ($update == true):  ?>
                    <button type="submit" name="update" class="send">Update</button>
                    <?php else: ?>
                <button type="submit" name="save" class="send">Versturen</button>
                    <?php endif; ?>
            </div>
            
        </div>
        <div id="footer">
            <footer id="footer">
                <h3>Made by Diego Bronsema & Maceo Beltman &copy;</h2>
            </footer>
        </div>
        
    </form>
    <script src="../huisstijl/script.js"></script>
</body>

</html>