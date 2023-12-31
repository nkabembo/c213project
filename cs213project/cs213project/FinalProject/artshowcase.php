<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style> 
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
            h1{
                text-align: center;
            }
            h2{
                text-align: center;
            }

            body{
                background-color:#8A152D;
                font-family:Tahoma, Geneva, sans-serif;
            }
            td {
                border: 3px solid #EDC7B7;
                
            }
            img {
                width:250px;
            }
        </style>
    </head>
    <body>
        <?php
        session_start();
        $mysqli = mysqli_connect("localhost", "cs213user", "letmein", "finalprojectDB");
        //$sql = "SELECT 	username,art,email,country from user inner join music ".
        //"on user_id= music.user_id ";
        $sql = "SELECT `photography_id`, `user_id`, `photograph_name`, `photograph`, `photograph_type` FROM `photogragh` ";
        $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
        ?>
        <nav>
            <ul>
                
                <li><a href="home.php">Home</a></li>
               
                </nav>

                <h1>Art ShowCase</h1>
                <h2>Photographs</h2>
                <table>
                    <?php
                    $i = 0;
                    //echo "<img src='/var/www/html/art3.jpg' />";
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($i % 4 == 0) {
                            echo "<tr>";
                        }
                        echo "<td><img src='/FinalFiles/{$row['photograph']}' alt='{$row['photograph_name']}'/><p>{$row['photograph_name']}</p></td>";
                        //echo "<td><img src='/var/www/html/FinalFiles/{$row['photograph']}' alt='{$row['photograph_name']}'/></td>";
                        if ($i % 4 == 3) {
                            echo "</tr>";
                        }
                        $i++;
                    }
                    ?>
                </table>
                <h2>Paintings</h2>
                <table>
                    <?php
                    $stmt ="SELECT `painting_id`, `user_id`, `painting`, `painting_type`, `painting_name` FROM `paintings` ";
                    $data = mysqli_query($mysqli, $stmt) or die(mysqli_error($mysqli));
                    $i = 0;
                    //echo "<img src='/var/www/html/art3.jpg' />";
                    while ($row = mysqli_fetch_assoc($data)) {
                        if ($i % 4 == 0) {
                            echo "<tr>";
                        }
                        echo "<td><img src='/FinalFiles/{$row['painting']}' alt='{$row['painting_name']}'/><p>{$row['painting_name']}</p></td>";
                        //echo "<td><img src='/var/www/html/FinalFiles/{$row['photograph']}' alt='{$row['photograph_name']}'/></td>";
                        if ($i % 4 == 3) {
                            echo "</tr>";
                        }
                        $i++;
                    }
                    ?>
                </table>
                <h2>Music</h2>
                <table>
                    <?php
                    $smt ="SELECT `user_id`, `music_id`, `music_genre`, `Title`, `album_name`, `music` FROM `music`";
                    $info = mysqli_query($mysqli, $smt) or die(mysqli_error($mysqli));
                    $i = 0;
                    //echo "<img src='/var/www/html/art3.jpg' />";
                    while ($row = mysqli_fetch_assoc($info)) {
                        if ($i % 4 == 0) {
                            echo "<tr>";
                        }
                        echo "<td><audio controls><source src='/FinalFiles/{$row['music']}' type='audio/mpeg'/></audio><p>Title:{$row['Title']} Album Name:{$row['album_name']}</p></td>";
                        //echo "<td><img src='/var/www/html/FinalFiles/{$row['photograph']}' alt='{$row['photograph_name']}'/></td>";
                        if ($i % 4 == 3) {
                            echo "</tr>";
                        }
                        $i++;
                    }
                    ?>
                </table>
                </body>
                </html>
