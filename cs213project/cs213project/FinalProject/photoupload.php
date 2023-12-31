<!DOCTYPE html>
<html>
    <head>
        <title>Photo Uploaded</title>
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

        $photograph_name = filter_input(INPUT_POST, 'photograph_name');
        $photograph_type = filter_input(INPUT_POST, 'photograph_type');

        $username = $_SESSION['username'];
        $sqlstmt = "SELECT user_id FROM user WHERE username='$username'";
        if ($result = mysqli_query($mysqli, $sqlstmt)) {
            $data = mysqli_fetch_array($result);
            $user_id = (int) $data['user_id'];
        }
//$photograph_id = null;
        $photograph = $_FILES['fileupload']['name'];
        $sql = "INSERT INTO `photogragh`(`photography_id`, `user_id`, `photograph_name`, `photograph`, `photograph_type`) VALUES (null,$user_id,'$photograph_name','$photograph','$photograph_type')";

        if (mysqli_query($mysqli, $sql)) {
            $target_path = "/var/www/html/FinalFiles/";
            $target_path = $target_path . basename($_FILES['fileupload']['name']);
            if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_path)) {
                echo "<h1>The file \"" . basename($_FILES['fileupload']['name']) .
                "\" has been uploaded. </h1><br />";
            } else {
                echo "There was an error uploading the file, please try again! <br />";
            }
        } else {
            echo "The file was not added to the database !!<br />";
        }
        ?>
    </body>

</html>
