<?php
    session_start();
?>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="index.php"><img src="img/MK_logo.png" style="width: 100px; height: 100%;"></a>
            <!-- <a href="index.php" class="navbar-brand">Rhapsodist</a> -->
        </div>
        <ul class="nav navbar-nav">
            <input type="text" class="form-control" id="search" placeholder="search" style="width:500px; margin: 10px;">
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        Cart
                        <span class="badge" id="badge">0</span>
                    </a>
                <div class="dropdown-menu" style="width:600px;">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-1">Sl.No</div>
                                <div class="col-md-3">Product Image</div>
                                <div class="col-md-3">product Name</div>
                                <div class="col-md-3">Price in $.</div>
                                <div class="col-md-2">quantity</div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div id="cart_product">
                                <!-- <div class="row">
                                    <div class="col-md-3">Sl.No</div>
                                    <div class="col-md-3">Product Image</div>
                                    <div class="col-md-3">product Name</div>
                                    <div class="col-md-3">Price in $.</div>
                                </div> -->
                            </div>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </li>

            <?php
                if(!isset($_SESSION['email'])){

            ?>

            <li class="dropdown" id="signin">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user"></span>
                    SignIn
                </a>
			    <ul id="login-drop" class="dropdown-menu">
				<li>
				    <div class="row">
				        <div class="col-md-12">
				            <form method="post" id="login-nav">
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
                <a href="registration.php">
                    <span class="glyphicon glyphicon-user"></span>
                    SignUp
                </a>
            </li>
            
            <?php
                }else{

            ?>

            <li id="user_logined">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user"></span>
                    <?php echo 'welcome ' . $_SESSION["name"]; ?>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="go_to_buy.php" style="text-decoration: none; color: blue;"><span class="glyphicon glyphicon-shopping-cart"></span>Go to buy</a></li>
                    <li class="divider"></li>
                    <li><a href="registration.php" style="text-decoration: none; color: blue;">Change info</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php" style="text-decoration: none; color: blue;">Logout</a></li>
                </ul>
            </li>
            
            <?php
                }
            ?>
            
        </ul>
    </div>
    <div class="row">
        <ul class="nav navbar-nav" id="get_categories">
                
        </ul>
    </div>
</div>
