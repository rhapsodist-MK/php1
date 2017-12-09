<!DOCTYPE html>
<html lang="en">
    <?php require_once 'navbar.php'; ?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div id="get_category">
                    
                </div>
                <!--<div class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><h4>Categories</h4></a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                </div>-->
                <div id="get_brand">
                    
                </div>
                <!--<div class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><h4>Brand</h4></a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Categories</a></li>
                </div>-->
            </div>
            <div class="col-md-8">
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
            <div class="col-md-1"></div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/main.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
        $(function(){
            cat();
            brand();
            product();
            
            function cat(){
                $.ajax({
                    url : "action.php",
                    method : "POST",
                    data : {category:1},
                    success : function(data){
                        $("#get_category").html(data);
                    }
                });
            }
            
            function brand(){
                $.ajax({
                    url : "action.php",
                    method : "POST",
                    data : {brand:1},
                    success : function(data){
                        $("#get_brand").html(data);
                    }
                });
            }
            
            function product(){
                $.ajax({
                    url : "action.php",
                    method : "POST",
                    data : {getProduct:1},
                    success : function(data){
                        $("#get_product").html(data);
                    }
                });
            }

            $("body").on("click", ".category", function(event){
                event.preventDefault();
                var cat_id = $(this).attr('name');
                $.ajax({
                    url : "action.php",
                    method : "POST",
                    data : {get_selected_Category:1,cat_id:cat_id},
                    success : function(data){
                        $("#get_product").html(data);
                    }
                });
            });
            
            $("body").on("click", ".brand", function(event){
                event.preventDefault();
                var brand_id = $(this).attr('name');
                $.ajax({
                    url : "action.php",
                    method : "POST",
                    data : {get_selected_Brand:1, brand_id:brand_id},
                    success : function(data){
                        $("#get_product").html(data);
                    }
                });
            });
            
            $("#search").on('keypress', function(){
                var keyword = $("#search").val();
                if(keyword != ""){
                    $.ajax({
                        url : "action.php",
                        method : "POST",
                        data : {search:1, keyword:keyword},
                        success : function(data){
                            $("#get_product").html(data);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>