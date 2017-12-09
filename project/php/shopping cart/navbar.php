<head>
    <meta charset="UTF-8">
    <title>mk store</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
       

<div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">MK store</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                <li><a href="#">Product</a></li>
                <li style="width:300px; left:10px; top:10px;">
                    <input type="text" class="form-control" id="search" placeholder="search">
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
                    <a href="#" class="dropdown" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span>
                        SignIn 
                    </a>
                    <ul class="dropdown-menu">
                        <div style="width:300px">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Login</div>
                                <div class="panel-heading">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" required>
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
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
            </ul>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    