<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGAKA</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
        </script>
    <script>
        $(function () {
            $("#header").load("../huisstijl/header.html");
            $("#footer").load("../huisstijl/footer.html");
        });
    </script>
</head>

<body>
    <?php require_once 'process.php'; ?>
    <?php 

        $mysqli = new mysqli('localhost', 'db86699', 'plesk02M@ceo!', '86699_database') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM back12_manga") or die($mysqli->error);
        //pre_r($result);
        
        
    ?>
    <form action="process.php" method="POST">
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
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['Naam']; ?></td>
                        <td><?php echo $row['Schrijver']; ?></td>
                        <td><?php echo $row['Uitgave']; ?></td>
                        <td><?php echo $row['Beschrijving']; ?></td>
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
                <?php if ($update == true):  ?>
                    <button type="submit" name="update" class="send">Update</button>
                    <?php else: ?>
                <button type="submit" name="save" class="send">Versturen</button>
                    <?php endif; ?>
            </div>
            <div id="footer"></div>
        </div>
    </form>
</body>

</html>