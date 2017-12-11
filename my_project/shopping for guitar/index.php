<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
   
    <!--네비게이션 바 리퀘스트-->
    <?php require_once 'nav.php'; ?>
    
    
    
    <div class="container" style="width:100%; height:600px;">  
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:100%; height:600px;">
            <ol class="carousel-indicators" >
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" style="width:100%; height:100%;">
                <div class="item active">
                    <img src="img/red-hot-chili-peppers.jpg" style="width:100%;">
                </div>

                <div class="item" style="width:100%; height:100%;">
                    <img src="img/foo%20fighters.jpg" style="width:100%;">
                </div>
    
                <div class="item" style="height:100%;">
                    <img src="img/my%20chemical%20romance.jpg" style="width:100%;">
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12" id="product_msg">
                    
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading" >Products</div>
                    <div class="panel-body">
                        <div id="get_product">
                            
                        </div>
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
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    
    
    
<!--
    <div class="row">
        <div class="col-md-12">
            <center>
                <ul class="pagination" id="pageno">
                    <li>
                        <a href="">1</a>
                    </li>
                </ul>
            </center>
        </div>
    </div>
-->
    
    
    
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>