<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>simple_chat</title> 
</head>
<body>
    <h2>LOGIN FORM</h2>
    <div id="LoginDiv">
        <form method="post" action="pages/UserLogin.php">
            <table>
                <tr>
                    <td>Email : </td>
                    <td>
                        <input type="email" name="UserMailLogin">
                    </td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" name="UserPasswordLogin"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="LOGIN"></td>
                </tr>
                
                <?php
                    if(isset($_GET['error'])){
                ?>
                
                <tr>
                    <td></td>
                    <td>
                        <span style="color:red">ERROR LOGIN</span>
                    </td>
                </tr>
                
                <?php } ?>
            </table>    
        </form>
    </div>
    <br>
    <br>
    <br>
    <h2>SIGN UP FORM</h2>
    <div id="signUpDiv">
        <form method="post" action="pages/InsertUser.php">
            <table>
                <tr>
                    <td>Your Name : </td>
                    <td><input type="text" name="UserName"></td>
                </tr>
                <tr>
                    <td>Your Email : </td>
                    <td><input type="email" name="UserMail"></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" name="UserPassword"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Sign Up"></td>
                </tr>
                
                <?php
                    if(isset($_GET['success'])){
                ?>
                
                <tr>
                    <td></td>
                    <td>
                        <span style="color:green">UserInserted</span>
                    </td>
                </tr>
                <?php } ?>
            </table> 
        </form>
    </div>
   
   
   
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>