<div class="navbar navbar-inverse navbar-fixed top">
        <div class="row">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">Rhapsodist</a>
                </div>
                <div class="nav navbar-nav">
                    <input type="text" class="form-control" id="search" placeholder="search" style="width:500px; margin: 10px;">
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            Cart
                            <span class="badge">0</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-3">No.</div>
                                        <div class="col-md-3">Image</div>
                                        <div class="col-md-3">Name</div>
                                        <div class="col-md-3">Price</div>
                                    </div>
                                </div>
                                <div class="panel-body"></div>
                            </div>
                        </div>
                    </li>




                    <li class="dropdown" id="signin">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span>
                            SignIn
                        </a>
                        <ul id="login-dp" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12" style="width:500px;">
                                    <form method="post"id="login-nav">
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" id="email" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                                            <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block" id="login">Sign in</button>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> keep me logged-in
                                            </label>
                                        </div>
                                    </form>
                                </div>
                             </div>
                            </li>
                        </ul>
                    </li>

                    <li id="signup">
                        <a href="customer_registration.php">
                            <span class="glyphicon glyphicon-user"></span>
                            SignUp
                        </a>
                    </li>


                    <li id="user_logined" style="display:none">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span>
                            <?php echo $_SESSION["first_name"] . ' ' . $_SESSION["last_name"]; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="cart.php" style="text-decoration: none; color: blue;">
                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                    Cart
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#" style="text-decoration: none; color: blue;">Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php" style="text-decoration: none; color: blue;">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="row">
            <ul class="nav navbar-nav">
                <li><a href="#" >Electric Guitar</a></li>
                <li><a href="#">Acoustic Guitar</a></li>
                <li><a href="#">Classic Guitar</a></li>
                <li><a href="#">Bass Guitar</a></li>
                <li><a href="#">Ukulele</a></li>
            </ul>
        </div>
    </div>
