<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <style>
        #email_check{
            visibility: hidden;
            color: red;
        }
    </style>
</head>
<body>
    <!--네비게이션 바 리퀘스트-->
    <?php require_once 'nav.php'; ?>
    
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="signup_msg">
            
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                   <input type="text" id="ddd">
                    <div class="panel-heading">Customer Sign up Form</div>
                    <div class="panel-body">
<!--                        <form method="post">-->
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div id="email_check">
                                <br>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="repassword">RE - Password</label>
                                    <input type="password" id="repassword" name="repassword" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" id="mobile" name="mobile" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address1">Address Line</label>
                                    <input type="text" id="address1" name="address1" class="form-control">
                                </div>
                            </div>
                            
                            
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <input style="float:right;" type="button" id="signup_button" class="btn btn-success btn-lg" value="Sign Up">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
</body>
</html>