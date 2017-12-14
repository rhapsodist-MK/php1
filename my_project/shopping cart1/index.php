
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>rhapsodist</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        
        .container, .carousel{
            margin: 0;
            padding: 0;
            width:100%;
            height: 700px; 
        }
        
        .carousel-inner, .carousel-inner .item, .carousel-inner .item img{
            width: 100%;
            height: 100%;
        }

        #login-drop{
            width: 500px;
        }

    </style>
</head>
    
<body>
    <div id="choose_signin_or_user">
        <?php require_once 'navbar.php'; ?>
    </div>
    
    
    <div class="container">  
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" >
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
              <li data-target="#carousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/red-hot-chili-peppers.jpg">
                </div>

                <div class="item">
                    <img src="img/foo%20fighters.jpg">
                </div>
    
                <div class="item">
                    <img src="img/my%20chemical%20romance.jpg">
                </div>
            </div>

            
        </div>
    </div>
    
    <?php
        unset($_SESSION['category_title']);
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12" id="product_msg">
                        
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading" >Products</div>
                    <div class="panel-body">
                        <div id="get_product">
                            
                        </div>
                        <!--<div class="col-md-4">
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
                        </div>-->
                    </div>
                    <div class="panel-footer">&copy; 2017</div>
                </div>
            </div>
            <div class="col-md-"></div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <center>
                <ul class="pagination" id="pageno">
<!--
                    <li>
                        <a href="">1</a>
                    </li>
-->
                </ul>
            </center>
        </div>
    </div>
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
</body>
</html>