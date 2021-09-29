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
            <div id="show">
                <div class="showPics" id="pic1" onmouseover="resize(this.id)" onmouseout="reresize(this.id)"
                    onclick="bigImage(this.id)"></div>
                <div id="three">
                    <div class="showPics" id="pic2" onmouseover="resize(this.id)" onmouseout="reresize(this.id)"
                        onclick="bigImage(this.id)"></div>
                    <div class="showPics" id="pic3" onmouseover="resize(this.id)" onmouseout="reresize(this.id)"
                        onclick="bigImage(this.id)"></div>
                    <div class="showPics" id="pic4" onmouseover="resize(this.id)" onmouseout="reresize(this.id)"
                        onclick="bigImage(this.id)"></div>
                </div>
            </div>
        </div>
        <div id="footer"></div>
    </div>
    <div id="secretContainer">
        <img src="" id="secretImg">
    </div>
    <script src="script.js"></script>
</body>
<?php





?>
</html>