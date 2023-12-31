<?php
session_start();

if (filter_input(INPUT_POST, 'username')) {
    $username = filter_input(INPUT_POST, 'username');
   $pwd = filter_input(INPUT_POST, 'password');
   $password = sha1($pwd);
    
    $mysqli = mysqli_connect("localhost", "cs213user", "letmein", "finalprojectDB");


    $sql = "SELECT username FROM user WHERE username=? "
            . "AND password = ?";
    $stmt = mysqli_stmt_init($mysqli);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
    } 
        mysqli_stmt_bind_param($stmt, "ss",$username,$password);
        $result =$stmt->execute();
        $result = $stmt->get_result();
              
     

    if (mysqli_num_rows($result) > 0) {
        //set authorization cookie using curent Session ID
      
        $_SESSION['username']=$username;
        setcookie("session_id", session_id(), time() + 60 * 30, "/", "", 0);
        
        header("Location: home.php");
        
        die;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign in</title>
        <style>
            body{
                background-color:#8A152D;
                font-family:Tahoma, Geneva, sans-serif;
            }
            label{
                display:inline-block;
                width:80px;
                margin-right:30px;
                text-align:left;
            }
            .containerone{
                background-color:#EDC7B7;

            }
            #login{
                background-color:#EDC7B7;;
                color: black;
                padding: 16px 20px;
                margin: 8px 115px;
                border: none;
                cursor: pointer;
                width: 42%;
            }
            .one{
                background-color:#123C69;
            }
            .container{
                background-color:#8A152D;
            }
            hr {
                border: 2px solid #AC3B61;
                margin-bottom: 25px;
            }
            fieldset{
                border: 2px solid #AC3B61;
                padding-top: 0px;
            }
            input{
                width: 40%;
                padding: 10px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
            }
            a {
              color:lightblue;
              
            }
        </style>
    </head>

    <body>

        <form action="signin.php" method="post">
            <fieldset>
                <div class="containerone">
                    <h1>User Login</h1>
                    <hr>
                </div>
                <div class="container">
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" id="username" name="username" required>
                    <br>
                    <br>
                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" id="password" name="password" required>
                    <br>
                    <br>
                    <hr>
                    <button type="submit" id="submit">Login</button>
                </div>
                <p>Forgot to create an account ? <a href="registration.php">Create Account</a><p>
                    </form>
            </fieldset>
    </body>

</html>


