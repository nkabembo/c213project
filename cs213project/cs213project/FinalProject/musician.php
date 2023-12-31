<!DOCTYPE html>
<html>
    <head>
        <title>Paint Uploaded</title>
        <style> 
            body{
                background-color:#8A152D;
                font-family:Tahoma, Geneva, sans-serif;
            }
        </style>
    </head>

    <body>
        <?php

session_start();
$mysqli = mysqli_connect("localhost", "cs213user", "letmein", "finalprojectDB");
if (filter_input(INPUT_POST, 'save_audio')) {
    $music_genre = filter_input(INPUT_POST, 'music_genre');
    $music_id = null;
    $Title = filter_input(INPUT_POST, 'Title');
    $album_name = filter_input(INPUT_POST, 'album_name');
    $music = $_FILES['audioFile']['name'];

    $username = $_SESSION['username'];
    $sqlstmt = "SELECT user_id FROM user WHERE username='$username'";
    if ($result = mysqli_query($mysqli, $sqlstmt)) {
        $data = mysqli_fetch_array($result);
        $user_id = (int) $data['user_id'];
    }

    $dir = "/var/www/html/FinalFiles/";
    $audio_path = $dir . basename($_FILES['audioFile']['name']);
    //$sql = "insert into music values ($user_id,$music_id,$music_genre,$Title,$album_name,$music)";
    $sql = "INSERT INTO `music`(`user_id`, `music_id`, `music_genre`, `Title`, `album_name`, `music`) VALUES ('$user_id', null, '$music_genre', '$Title', '$album_name', '$music')";
    if (mysqli_query($mysqli, $sql)) {
        
        if (move_uploaded_file($_FILES['audioFile']['tmp_name'], $audio_path)) {
            echo "<h1>The file \"" . basename($_FILES['audioFile']['name']) .
            "\" has been uploaded. </h1><br />";
        } else {
            echo "There was an error uploading the file, please try again! <br />";
        }
    }
}
?>
 </body>

</html>






