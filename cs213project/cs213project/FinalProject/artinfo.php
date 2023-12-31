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
            
            table, td, th {
                border: 3px solid #EDC7B7;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }
            img {
                width:250px;
            }

        </style>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
            </ul>
        </nav>
        <form action="" method="POST">
            <select name="choice" id="choice" >
                <option selected>Choose</option>
                <option value="musicians">Musicians</option>
                <option value="photography">Photographers</option>
                <option value="painters">Painters</option>
            </select>
            <input type="submit" value="Submit">
        </form>

        <?php
        session_start();
        $mysqli = mysqli_connect("localhost", "cs213user", "letmein", "finalprojectDB");
        if (filter_input(INPUT_POST, "choice") == "musicians") {
            $sql = "SELECT m.user_id, music_id, music_genre, Title, album_name, music, username FROM music m INNER JOIN user u ON m.user_id = u.user_id WHERE m.user_id = u.user_id ;";
            $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
            if (mysqli_num_rows($result) < 1) {
                echo "There is not enough data to display";
                header("Location: home.php");
            } else {
                echo "<h2>Musician Corner</h2>";
                echo "<table>";
                echo "<tr><th>User ID</th><th>Username</th><th>Music Genre</th><th>Title</th><th>Album Name</th><th>Music</th></tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>{$row['user_id']}</td>";
                    echo "<td>{$row['username']}</td>";
                    echo "<td>{$row['music_genre']}</td>";
                    echo "<td>{$row['Title']}</td>";
                    echo "<td>{$row['album_name']}</td>";
                    echo "<td><audio controls><source src='/FinalFiles/{$row['music']}' type='audio/mpeg'/></audio></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } 
        } else if (filter_input(INPUT_POST, "choice") == "painters") {
            $sql = "SELECT painting_id, p.user_id, painting, painting_type, painting_name, username FROM paintings p INNER JOIN user u ON p.user_id = u.user_id WHERE p.user_id = u.user_id ;";
            $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
            if (mysqli_num_rows($result) < 1) {
                echo "There is not enough data to display";
                header("Location: home.php");
            } else {
                echo "<h2>Painters Corner</h2>";
                echo "<table>";
                echo "<tr><th>User ID</th><th>Username</th><th>Painting</th><th>Painting Type</th><th>Painting Name</th></tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>{$row['user_id']}</td>";
                    echo "<td>{$row['username']}</td>";
                    echo "<td><img src='/FinalFiles/{$row['painting']}' alt='{$row['painting_name']}'/></td>";
                    echo "<td>{$row['painting_type']}</td>";
                    echo "<td>{$row['painting_name']}</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        } else if (filter_input(INPUT_POST, "choice") == "photography") {
            $sql = "SELECT photography_id, u.user_id, photograph_name, photograph, photograph_type,username FROM photogragh p INNER JOIN user u ON p.user_id = u.user_id WHERE p.user_id = u.user_id;";
            $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
            if (mysqli_num_rows($result) < 1) {
                echo "There is not enough data to display";
                header("Location: home.php");
            } else {
                echo "<h2>Photography Corner</h2>";
                echo "<table>";
                echo "<tr><th>User ID</th><th>Username</th><th>Photograph Name</th><th>Photograph</th><th>Photograph Type</th></tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>{$row['user_id']}</td>";
                    echo "<td>{$row['username']}</td>";
                    echo "<td>{$row['photograph_name']}</td>";
                    echo "<td><img src='/FinalFiles/{$row['photograph']}' alt='{$row['photograph_name']}'/></td>";
                    echo "<td>{$row['photograph_type']}</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }else{
          
        }
        ?>
    </body>
</html>
