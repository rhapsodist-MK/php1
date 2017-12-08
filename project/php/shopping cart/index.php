<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mk store</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">MK store</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                <li><a href="#">Product</a></li>
                <li style="width:300px; left:10px; top:10px;"><input type="text" class="form-control" id="search_btn"></li>
                <li style="top:10px; left:20px;">
                    <input type="submit" class="btn btn-primary" id="search_btn">
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        Cart
                        <span class="badge">0</span>
                    </a>
                    <div class="dropdown-menu" style="width:400px;">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-3">Sl.No</div>
                                    <div class="col-md-3">Product Image</div>
                                    <div class="col-md-3">product Name</div>
                                    <div class="col-md-3">Price in $.</div>
                                </div>
                            </div>
                            <div class="panel-body"></div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span>
                        SignIn 
                    </a>
                    <ul class="dropdown-menu">
                        <div style="width:300px">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Login</div>
                                <div class="panel-heading">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" required>
                                    <br>
                                    <a href="#" style="color:white; list-style:none">
                                        Forgotten Password
                                        <input type="submit" class="btn btn-success" style="float:right;"
                                        id="login" value="Login">
                                    </a>
                                </div>
                                <div class="panel-footer" id="e_msg"></div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-user">SignUp</a></li>
            </ul>
        </div>
    </div>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><h4>Categories</h4></a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                </div>
                <div class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><h4>Brand</h4></a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-info">
                    <div class="panel-heading">Products</div>
                    <div class="panel-body">
                        <div class="col-md-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">Samsung Galaxy</div>
                                <div class="panel-body">
                                    <img src="img/guitar1.png" style="width:100%;height:100%" alt="">
                                </div>
                                <div class="panel-heading">
                                    $.500.00
                                    <button class="btn btn-danger btn-xs" style="float:right;">AddToCart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">&copy; 2017</div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>