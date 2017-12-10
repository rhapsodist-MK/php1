<?php
    session_start();

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


    if(isset($_POST["page"])){
        $sql = "SELECT * FROM products";
        $pstmt = $pdo->query($sql);
        $count = $pstmt->rowCount();
        $pageno = ceil($count/9);
        
        for($i = 1; $i <= $pageno; $i++){
            echo "
                <li>
                    <a href='#' page='$i' class='page'>$i</a>
                </li>
            ";
        }
    }



    if(isset($_POST["getProduct"])){
        $limit = 9;
        if(isset($_POST['setPage'])){
            $pageno = $_POST['pageno'];
            $start = ($pageno * $limit) - $limit;
        }else{
            $start = 0;
        }
        $product_query = "SELECT * FROM products LIMIT $start, $limit";
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
                                <button id='$product_id' class='btn btn-danger btn-xs addtocart' style='float:right;'>AddToCart</button>
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
                                <button id='$product_id' class='btn btn-danger btn-xs addtocart' style='float:right;'>AddToCart</button>
                            </div>
                        </div>
                    </div>
                ";
            }
        }
    }

    if(isset($_POST["addProduct"])){
        $product_id = $_POST["product_id"];
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM cart WHERE p_id = '#product_id' AND user_id = '$user_id'";
        $pstmt = $pdo->query($sql);
        $count = $pstmt->rowCount();

        if($count > 0){
            echo "Product is already added into the cart Continue Shopping!";
        }else{
            $sql = "SELECT * FROM products WHERE product_id = '$product_id'";
            $pstmt = $pdo->query($sql);
            $row = $pstmt->fetch(PDO::FETCH_ASSOC);

            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_image = $row['product_image'];
            $product_price = $row['product_price'];

            $sql = "INSERT INTO cart(p_id, ip_add, user_id, product_title, product_image, qty, price, total_amount)
                            VALUES (?,?,?,?,?,?,?,?)";
            $pdo->beginTransaction();
            $pstmt = $pdo->prepare($sql);
            $pstmt->bindValue(1, $product_id, PDO::PARAM_INT);
            $pstmt->bindValue(2, 0, PDO::PARAM_STR);
            $pstmt->bindValue(3, $user_id, PDO::PARAM_INT);
            $pstmt->bindValue(4, $product_title, PDO::PARAM_STR);
            $pstmt->bindValue(5, $product_image, PDO::PARAM_STR);
            $pstmt->bindValue(6, 1, PDO::PARAM_INT);
            $pstmt->bindValue(7, $product_price, PDO::PARAM_INT);
            $pstmt->bindValue(8, $product_price, PDO::PARAM_INT);

            $pstmt->execute();
            $pdo->commit();
            
            echo "
                    <div class='alert alert-success'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <b>Product is Added...!!!</b>
                    </div>
            ";
        }
    }

    if(isset($_POST["get_cart_product"]) || isset($_POST["cart_checkout"])){
        $user_id = $_SESSION["user_id"];
        $sql = "SELECT * FROM cart WHERE user_id = '$user_id'";
        $pstmt = $pdo->query($sql);
        $count = $pstmt->rowCount();

        if($count > 0){
            $no = 1;
            $total_amt = 1;
            while($row = $pstmt->fetch(PDO::FETCH_ASSOC)){
                $product_id = $row["p_id"];
                $product_title = $row["product_title"];
                $product_image = $row["product_image"];
                $product_price = $row["price"];
                $qty = $row["qty"];
                $total = $row["total_amount"];
                $price_array = array($total);
                $total_sum = array_sum($price_array);
                $total_amt += $total_sum;
                

                if(isset($_POST["get_cart_product"])){
                    echo "
                        <div class='row'>
                            <div class='col-md-3'>$no</div>
                            <div class='col-md-3'>
                                <img src='img/$product_image' width='60px' height='60px'>
                            </div>
                            <div class='col-md-3'>$product_title</div>
                            <div class='col-md-3'>$product_price</div>
                        </div>
                    ";
                    $no++;
                }elseif(isset($_POST["cart_checkout"])){
                    echo "
                        <div class='row'>
                            <div class='col-md-2'>
                                <div class='btn-group'>
                                    <a href='#' name='$product_id' class='btn btn-danger remove'>
                                        <span class='glyphicon glyphicon-trash'></span>
                                    </a>
                                    <a href='#' name='$product_id' class='btn btn-primary update'>
                                        <span class='glyphicon glyphicon-ok-sign'></span>
                                    </a>
                                </div>
                            </div>
                            <div class='col-md-2'>
                                <img src='img/$product_image' style='width:100px; height:100px;'>
                            </div>
                            <div class='col-md-2'>$product_title</div>
                            <div class='col-md-2'>
                                <input type='text' class='form-control price' name='$product_id' id='price-$product_id' value='$product_price' disabled>
                            </div>
                            <div class='col-md-2'>
                                <input type='text' class='form-control qty' name='$product_id' id='qty-$product_id' value='$qty'>
                            </div>
                            <div class='col-md-2'>
                                <input type='text' class='form-control total' name='$product_id' id='total-$product_id' value='$total' disabled>
                            </div>
                        </div>
                    ";
                }    
            }
            
            if(isset($_POST["cart_checkout"])){
                echo "
                    <div class='row'>
					    <div class='col-md-8></div>
					    <div class='col-md-4'>
					        <b>Total $total_amt</b>
					    </div>
					</div>
                ";
            }
            
        }
    }

    if(isset($_POST['cart_count'])){
        if(isset($_SESSION['user_id'])){
            $user_id = $_SESSION["user_id"];
            $sql = "SELECT * FROM cart WHERE user_id = '$user_id'";
        
            $pstmt  = $pdo->query($sql);
            $count = $pstmt->rowCount();
            echo $count;
        }else{
            echo 0;
        }
    }

    if(isset($_POST['removeFromCart'])){
        $product_id = $_POST['product_id'];
        $user_id = $_SESSION['user_id'];

        $sql = "DELETE FROM cart WHERE user_id = ? AND p_id = ?";
        $pdo->beginTransaction();
        $pstmt = $pdo->prepare($sql);
        $pstmt->bindValue(1, $user_id, PDO::PARAM_INT);
        $pstmt->bindValue(2, $product_id, PDO::PARAM_INT);
        $pstmt->execute();

        if($pdo->commit()){
            echo "
                <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Removed</b>
                </div>
            ";
        }
    }


    if(isset($_POST['updateProduct'])){
        $product_id = $_POST['updateId'];
        $qty = $_POST['qty'];
        $price = $_POST['price'];
        $total = $_POST['total'];
        $user_id = $_SESSION['user_id'];
        
        $sql = "UPDATE cart SET qty = ?, price = ?, total_amount = ? WHERE user_id = ? AND p_id = ?";

        $pdo->beginTransaction();
        $pstmt = $pdo->prepare($sql);
        $pstmt->bindValue(1, $qty, PDO::PARAM_INT);
        $pstmt->bindValue(2, $price, PDO::PARAM_INT);
        $pstmt->bindValue(3, $total, PDO::PARAM_INT);
        $pstmt->bindValue(4, $user_id, PDO::PARAM_INT);
        $pstmt->bindValue(5, $product_id, PDO::PARAM_INT);
        $pstmt->execute();

        if($pdo->commit()){
            echo "
                <div class='alert alert-success'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>product updated</b>
                </div>
            ";
        }else{
            echo "faled";
        }

    }