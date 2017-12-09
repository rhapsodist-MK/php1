<?php
    require_once 'db_conn.php';

    if(isset($_POST["category"])){
        $category_query = "SELECT * FROM categories";
        $pstmt = $pdo->query($category_query);
        $count = $pstmt->rowCount();
        
        echo "
                <div class='nav nav-pills nav-stacked'>
                <li class='active'><a href='#'><h4>Category</h4></a></li>
            ";
        
        if($count > 0){
            while($row = $pstmt->fetch(PDO::FETCH_ASSOC)){
                $cat_id = $row["cat_id"];
                $cat_title = $row["cat_title"];
                
                echo "<li><a href='#' class='category' name='$cat_id'>$cat_title</a></li>";
            }
            echo "</div>";
        }
    }

    if(isset($_POST["brand"])){
        $brand_query = "SELECT * FROM brand";
        $pstmt = $pdo->query($brand_query);
        $count = $pstmt->rowCount();
        
        echo "
                <div class='nav nav-pills nav-stacked'>
                <li class='active'><a href='#'><h4>Brand</h4></a></li>
            ";
        
        if($count > 0){
            while($row = $pstmt->fetch(PDO::FETCH_ASSOC)){
                $brand_id = $row["brand_id"];
                $brand_title = $row["brand_title"];
                echo "<li><a href='#' class='brand' name='$brand_id'>$brand_title</a></li>";
            }
            echo "</div>";
        }
    }

    if(isset($_POST["getProduct"])){
        $product_query = "SELECT * FROM products ORDER BY RAND() LIMIT 0, 9";
        $pstmt = $pdo->query($product_query);
        $count = $pstmt->rowCount();
        
        if($count > 0){
            while($row = $pstmt->fetch(PDO::FETCH_ASSOC)){
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_image = $row['product_image'];
                $product_cat = $row['product_cat'];
                $product_brand = $row['product_brand'];
                $product_price = $row['product_price'];
                
                echo "
                    <div class='col-md-4'>
                        <div class='panel panel-info'>
                            <div class='panel-heading' style='height:50px;'>$product_title</div>
                            <div class='panel-body'>
                                <img src='img/$product_image' style='width:100%;height:100%;'>
                            </div>
                            <div class='panel-heading'>
                                $product_price WEN
                                <button id='$product_id' class='btn btn-danger btn-xs' style='float:right;'>AddToCart</button>
                            </div>
                        </div>
                    </div>
                ";
            }
        }
    }


    if(isset($_POST['get_selected_Category']) || isset($_POST['get_selected_Brand']) || isset($_POST['search'])){
        if(isset($_POST['get_selected_Category'])){
            $cat_id =  $_POST['cat_id'];
            $sql = "SELECT * from products WHERE product_cat = '$cat_id'";
        }elseif(isset($_POST['get_selected_Brand'])){
            $brand_id =  $_POST['brand_id'];
            $sql = "SELECT * from products WHERE product_brand = '$brand_id'";
        }elseif(isset($_POST['search'])){
            $keyword = $_POST['keyword'];
            $sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
        }
        
        $pstmt = $pdo->query($sql);
        $count = $pstmt->rowCount();

        if($count > 0){
            while($row = $pstmt->fetch(PDO::FETCH_ASSOC)){
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_image = $row['product_image'];
                $product_cat = $row['product_cat'];
                $product_brand = $row['product_brand'];
                $product_price = $row['product_price'];
                
                echo "
                    <div class='col-md-4'>
                        <div class='panel panel-info'>
                            <div class='panel-heading' style='height:50px;'>$product_title</div>
                            <div class='panel-body'>
                                <img src='img/$product_image' style='width:100%;height:100%;'>
                            </div>
                            <div class='panel-heading'>
                                $product_price WEN
                                <button id='$product_id' class='btn btn-danger btn-xs' style='float:right;'>AddToCart</button>
                            </div>
                        </div>
                    </div>
                ";
            }
        }
    }
