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
    <div id="header"></div>
    <div id="container">
        <div id="wrapper-1">
            <table>
                <tr>
                    <th>Naam: </th>
                    <th>Schrijver: </th>
                    <th>Uitgave: </th>
                    <th>Beschrijving: </th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div id="wrapper-2">
            Naam: <input type="text" id="naam">
            Schrijver: <input type="text" id="schrijver">
            Uitgave: <input type="text" id="uitgave">
            Beschrijving: <input type="text" id="beschrijving">
            <button id="send">Versturen</button>
        </div>
        <div id="footer"></div>
    </div>
    <script src="script.js"></script>
</body>
<?php

?>

</html>