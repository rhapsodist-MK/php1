<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>mk store</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #signup_msg {
            visibility: hidden;
        }
        
        #emailcheck, #passwordcheck, #repasswordcheck, #mobilecheck{
            display: none;
            height: 40px;
        }


        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

            /* Extra styles for the cancel button */

        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

            /* Float cancel and signup buttons and add an equal width */

        .cancelbtn,
        .signupbtn {
            float: left;
            width: 50%;
        }

         /* Add padding to container elements */

        .container {
            padding: 16px;
        }

            /* Clear floats */

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        </style>
    </head>

    <body>
        <div id="choose_signin_or_user">
            <?php 
                require_once 'navbar.php'; 
            ?>
        </div>
        <br>
        <br>
        <br>
        
        <div id="successcheck">
            
        </div>

        <form action="/action_page.php" style="border:1px solid #ccc">
            <div class="container">

                <?php
                    if(!isset($_SESSION['email'])){
                ?>

                <label><b>Email</b></label>
                <input type="text" placeholder="xxxx@xxxx.xxx" id="email" name="email" required>
                <br>
                <div id="emailcheck">
                    
                </div>
                <br>

                <?php
                    }else{
                    
                ?>
                
                <label><b>Email</b></label>
                <input type="text" placeholder="xxxx@xxxx.xxx" id="email" name="email" value="<?= $_SESSION['email'] ?>" required disabled>
                <br>
                <div id="emailcheck">
                    
                </div>
                <br>

                <?php } ?>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter password" id="password" name="password" required>
                <div id="passwordcheck">
                    
                </div>
                
                
                <label><b>RE-Password</b></label>
                <input type="password" placeholder="Repeat password" id="repassword" name="repassword" required>
                <div id="repasswordcheck">
                    
                </div>
               
               
                <label><b>name</b></label>
                <input type="text" placeholder="Enter your name" id="name" name="name" required>
                
                
                <label><b>mobile</b></label>
                <input type="text" placeholder="000-000(0)-0000" id="mobile" name="mobile" required>
                <div id="mobilecheck">
                    
                </div>
               
                <label><b>address</b></label>
                <input type="text" placeholder="Enter your address" id="address" name="address" required>
                
                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    

                    <?php
                        if(!isset($_SESSION['email'])){
                    ?>
                    <button type="submit" class="signupbtn">Sign Up</button>

                    <?php
                        }else{
                    ?>
                    <button type="submit" class="updatebtn">Update</button>
                    
                    <?php } ?>
                </div>
            </div>
        </form>


        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="js/all.js"></script>
    </body>

    </html>