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
            body{
                background-color:#8A152D;
                font-family:Tahoma, Geneva, sans-serif;
            }
            .containerone{
                background-color:#EDC7B7;

            }
            .container{
                /*background-color:#AC3B61;*/
                background-color:#8A152D;
            }
            #register{
                background-color:#EDC7B7;;
                color: black;
                padding: 16px 20px;
                margin: 8px 115px;
                border: none;
                cursor: pointer;
                width: 42%;

            }
            hr {
                border: 2px solid #AC3B61;
                margin-bottom: 25px;
            }
            select{
                width: 42%;
                padding: 10px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
            }
            label{
                display:inline-block;
                width:80px;
                margin-right:30px;
                text-align:left;
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
        <form action="" method="post"><div class="containerone">
                <h1>Registration</h1>
                <p>To create an account complete this form</p>
                <hr>
            </div>
            <p style="visibility:hidden;" id="success">Your account was successfully created</p>
            <div class="container">
                <label for="username"><b>Full Name</b></label>

                <input type="text" placeholder="John Doe" name="username" id="username" required>
                <br>
                <label for="email"><b>Email</b></label>

                <input type="text" placeholder="Enter Email" name="email" id="email" required>
                <br>
                <label for="password"><b>Password</b></label>

                <input type="password" placeholder="Enter Password" name="password" id="password" required>
                <br>
                <label for="art"><b>Art Forms</b></label>
                <select type="text" class="form-control " id="art" name="art">
                    <option selected>Choose an Art Form</option>
                    <option value="music">Music</option>
                    <option value="photography">Photography</option>
                    <option value="painting">Painting</option>
                </select>
                <br>

                <label for="country"><b>African Countries<b></i></label>
                            <select type="text" class="form-control " name="country" id="country" required>
                                <option selected>Choose</option>
                                <option value="algeria">Algeria</option>
                                <option value="angola">Angola</option>
                                <option value="benin">Benin</option>
                                <option value="botswana">Botswana</option>
                                <option value="burkina Faso">Burkina Faso</option>
                                <option value="burundi">Burundi</option>
                                <option value="cameroon">Cameroon</option>
                                <option value="cape-verde">Cape Verde</option>
                                <option value="central-african-republic">Central African Republic</option>
                                <option value="chad">Chad</option>
                                <option value="comoros">Comoros</option>
                                <option value="congo-brazzaville">Congo - Brazzaville</option>
                                <option value="congo-kinshasa">Congo - Kinshasa</option>
                                <option value="ivory-coast">Côte d’Ivoire</option>
                                <option value="djibouti">Djibouti</option>
                                <option value="egypt">Egypt</option>
                                <option value="equatorial-guinea">Equatorial Guinea</option>
                                <option value="eritrea">Eritrea</option>
                                <option value="ethiopia">Ethiopia</option>
                                <option value="gabon">Gabon</option>
                                <option value="gambia">Gambia</option>
                                <option value="ghana">Ghana</option>
                                <option value="guinea">Guinea</option>
                                <option value="guinea-bissau">Guinea-Bissau</option>
                                <option value="kenya">Kenya</option>
                                <option value="lesotho">Lesotho</option>
                                <option value="liberia">Liberia</option>
                                <option value="libya">Libya</option>
                                <option value="madagascar">Madagascar</option>
                                <option value="malawi">Malawi</option>
                                <option value="mali">Mali</option>
                                <option value="mauritania">Mauritania</option>
                                <option value="mauritius">Mauritius</option>
                                <option value="mayotte">Mayotte</option>
                                <option value="morocco">Morocco</option>
                                <option value="mozambique">Mozambique</option>
                                <option value="namibia">Namibia</option>
                                <option value="niger">Niger</option>
                                <option value="nigeria">Nigeria</option>
                                <option value="rwanda">Rwanda</option>
                                <option value="reunion">Réunion</option>
                                <option value="saint-helena">Saint Helena</option>
                                <option value="senegal">Senegal</option>
                                <option value="seychelles">Seychelles</option>
                                <option value="sierra-leone">Sierra Leone</option>
                                <option value="somalia">Somalia</option>
                                <option value="south-africa">South Africa</option>
                                <option value="sudan">Sudan</option>
                                <option value="south-sudan">Sudan</option>
                                <option value="swaziland">Swaziland</option>
                                <option value="Sao-tome-príncipe">São Tomé and Príncipe</option>
                                <option value="tanzania">Tanzania</option>
                                <option value="togo">Togo</option>
                                <option value="tunisia">Tunisia</option>
                                <option value="uganda">Uganda</option>
                                <option value="western-sahara">Western Sahara</option>
                                <option value="zambia">Zambia</option>
                                <option value="zimbabwe">Zimbabwe</option>
                            </select>
                            <hr>

                            <input type="submit" value="register" id="register">
                            </div>

                            <div class="container signin">
                                <p>Already have an account? <a href="signin.php">Sign in</a>.</p>
                            </div>
                            
                            </form>
                            <?php
                            $mysqli = mysqli_connect("localhost", "cs213user", "letmein", "finalprojectDB");

                            $username = filter_input(INPUT_POST, 'username');
                            $pwd = filter_input(INPUT_POST, 'password');
                            $password = sha1($pwd);
                            //$password = filter_input(INPUT_POST, 'password');
                            $email = filter_input(INPUT_POST, 'email');

                            $art = filter_input(INPUT_POST, 'art');
                            $country = filter_input(INPUT_POST, 'country');
                            $user_id = null;

                            $sql = "insert into user (username,password,art,email,user_id,country) values "
                                    . "(?,?,?,?,?,?) ";
                            //$stmt = mysqli_stmt_init($mysql);
                            /* if (!mysqli_stmt_prepare($stmt, $sql)) {
                              echo"An error has occured";
                              } */
                            if (!$stmt = $mysqli->prepare($sql)) {
                                $error = "Prepare failed (" . $mysqli->errno . ") " . $mysqli->error . "\n";
                            }
                            mysqli_stmt_bind_param($stmt, 'ssssis', $username, $password, $art, $email, $user_id, $country);
                            mysqli_stmt_execute($stmt);
                            if( mysqli_stmt_execute($stmt)){
                                
                                echo '<style>#success{visibility: visible !important;}</style>';
                            }
                            ?>
                            </body>
                            </html>
