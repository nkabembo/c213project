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

        $painting_name = filter_input(INPUT_POST, 'name');
        $painting_type = filter_input(INPUT_POST, 'painting_type');
        $username = $_SESSION['username'];
        $sqlstmt = "SELECT user_id FROM user WHERE username='$username'";
        if ($result = mysqli_query($mysqli, $sqlstmt)) {
            $data = mysqli_fetch_array($result);
            $user_id = (int) $data['user_id'];
        }
        $painting_id = null;
        $painting = $_FILES['fileupload']['name'];
        $sql = "INSERT INTO `paintings`(`painting_id`, `user_id`, `painting`, `painting_type`, `painting_name`) VALUES (null, $user_id, '$painting', '$painting_type', '$painting_name')";
        if (mysqli_query($mysqli, $sql)) {
            $file_path = "/var/www/html/FinalFiles/";
            
            $file_path = $file_path . basename($_FILES['fileupload']['name']);
            if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $file_path)) {
                echo "<h1>The file \"" . basename($_FILES['fileupload']['name']) .
                "\" has been uploaded. </h1><br />";
            } else {
                echo "<h1>There was an error uploading the file, please try again! </h1><br />";
            }
        }
        ?>

    </body>

</html>