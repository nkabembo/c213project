<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <style> body{
                background-color:#8A152D;
                font-family:Tahoma, Geneva, sans-serif;
            }
            .container{
                background-color:#8A152D;
            }
            img {
                height: auto;
                max-width: 100%;
                position: relative;
                border-radius: 20%;
                vertical-align: middle;
                border-style: none;
            }
            nav{
                background-color:#EDC7B7;
                margin-top:10px;
            }

            a{
                text-decoration:none;
                font-size:21px;
            }

            ul{
                list-style-type:none;
                margin: 10px;
                padding: 10px;
            }
            li{
                display:inline;
                margin:10px;
            }
            .artiste{
                background-color: purple;
            }
            h1{
                display:inline;
                margin:0 auto;
                font-size: 70px;
                position: absolute;
                top: 50%;
                left: 50%;
                text-align: left;
                margin-right: -100%;
                transform: translate(-50%, -50%);
            }
        </style>
    </head>

    <body>
        <?php
        session_start();
        if ($_SESSION['username']) {
            echo "<h1>Welcome " . $_SESSION['username']."</h1>";
            echo"<nav>";
            echo "<ul><li><img src=\"l'artiste.png\" width=\"50px\" height=\"50px\"></li>";
            echo "<li><a href=\"home.php\">L'artiste</a></li>";
            echo "<li><a href=\"fileupload.html\">Art Upload</a></li>";
            echo "<li><a href=\"artshowcase.php\">Art ShowCase</a></li>";
            echo "<li><a href=\"artinfo.php\">Art Info</a></li>";
            echo "<li><a href=\"logout.php\">Logout</a></li></ul>";
            echo  " </nav>";
   
        } else {
            header("Location:main.php");
        }
        ?>
    </body>

</html>


    


