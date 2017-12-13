<?php
    session_start();

    require_once 'db_conn.php';

    if(isset($_POST['get_selected_Brand']) || isset($_POST['search'])){

            if(isset($_POST['get_selected_Brand'])){
                $category_title = $_POST['category_title'];
                $brand_name = $_POST['brand_name'];
                $sql = "SELECT * from products WHERE product_brand = '$brand_name' AND product_category = '$category_title'";
            }elseif(isset($_POST['search'])){
                $keyword = $_POST['keyword'];
                $sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
            }

            $stmt = $pdo->query($sql);
            $count = $stmt->rowCount();

            if($count > 0){
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    $product_name = $row['product_name'];
                    $product_image = $row['product_image'];
                    $product_price = $row['product_price'];
                    
                    echo "
                        <div class='col-md-4'>
                            <div class='panel panel-info'>
                                <div class='panel-heading' style='height:50px;'>$product_name</div>
                                <div class='panel-body'>
                                    <img src='img/$product_image' style='width:100%;height:100%;'>
                                </div>
                                <div class='panel-heading'>
                                    $product_price WEN
                                    <button id='$product_name' class='btn btn-danger btn-xs addtocart' style='float:right;'>AddToCart</button>
                                </div>
                            </div>
                        </div>
                    ";
                }
            }
        }


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////brand list////////////////////////////////////////////////////////////////////////////////
///
    if(isset($_POST['brand'])){
        $category_title= $_POST['category_title'];
        $sql = "SELECT * FROM brand WHERE category_title = '$category_title'";
        $stmt = $pdo->query($sql);
        $count = $stmt->rowCount();

        echo "
            <div class='nav nav-pills nav-stacked'>
                <li class='active'><a href='item_lists.php?category_title=$category_title''><h4>$category_title</h4></a></li>
        ";

        if($count > 0){
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $brand_name = $row['brand_name'];

                echo "<li><a href='#' class='brand' name='$brand_name'>$brand_name</a></li>";
            }
            echo "</div>";
        } 
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////create pageing////////////////////////////////////////////////////////////////////////////////
    if(isset($_POST["page"])){
        if(isset($_POST['category_title'])){
            $category_title = $_POST['category_title'];
            $sql = "SELECT * FROM brand WHERE category_title = '$category_title'";
        }elseif(isset($_POST['brand_name'])){
            $category_title = $_POST['category_title'];
            $brand_name = $_POST['category_title'];
            $sql = "SELECT * from products WHERE product_brand = '$brand_name' AND product_category = '$category_title'";
        }else{
            $sql = "SELECT * FROM products";
        }
        $stmt = $pdo->query($sql);
        $count = $stmt->rowCount();
        $pageno = ceil($count/9);
            
        for($i = 1; $i <= $pageno; $i++){
            echo "
                <li>
                    <a href='#' name='$i' class='page'>$i</a>
                </li>
            ";
        }
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////update quantity////////////////////////////////////////////////////////////////////////////////



    if(isset($_POST['updateProduct'])){
        $product_name = $_POST['product_name'];
        $product_quantity = $_POST['product_quantity'];
        $product_price = $_POST['product_price'];
        $email = $_SESSION['email'];
        
        $sql = "UPDATE cart SET product_quantity = ?, product_price = ? WHERE email = ? AND product_name = ?";

        $pdo->beginTransaction();
        $pstmt = $pdo->prepare($sql);
        $pstmt->bindValue(1, $product_quantity, PDO::PARAM_INT);
        $pstmt->bindValue(2, $product_price, PDO::PARAM_INT);
        $pstmt->bindValue(3, $email, PDO::PARAM_STR);
        $pstmt->bindValue(4, $product_name, PDO::PARAM_STR);
        $pstmt->execute();

        if($pdo->commit()){
            echo "
                <div class='alert alert-success'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>product updated</b>
                </div>
            ";
        }
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////remove things////////////////////////////////////////////////////////////////////////////////

    if(isset($_POST['removeFromCart'])){
        $product_name = $_POST['product_name'];
        $email = $_SESSION['email'];

        $sql = "DELETE FROM cart WHERE email = ? AND product_name = ?";
        $pdo->beginTransaction();
        $pstmt = $pdo->prepare($sql);
        $pstmt->bindValue(1, $email, PDO::PARAM_STR);
        $pstmt->bindValue(2, $product_name, PDO::PARAM_STR);
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
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////how many things in the cart//////////////////////////////////////////////////////////////


    if(isset($_POST['cart_count'])){
        if(isset($_SESSION['email'])){
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM cart WHERE email = '$email'";

            $stmt = $pdo->query($sql);
            $count = $stmt->rowCount();

            echo $count;
        }else{
            echo 0;
        }
    }


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////addtocart button add product/////////////////////////////////////////

    if(isset($_POST['addProduct'])){
        $email = $_SESSION['email'];
        $product_name = $_POST['product_name'];

        $sql = "SELECT * FROM cart WHERE product_name = '$product_name' AND email = '$email'";

        $stmt = $pdo->query($sql);
        $count = $stmt->rowCount();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($count > 0){
            $product_quantity = $row['product_quantity'];
            
            $product_quantity += 1;

            $sql = "UPDATE cart SET product_quantity = $product_quantity WHERE product_name = '$product_name' AND email= '$email'";
            $pdo->beginTransaction();
            $stmt = $pdo->query($sql);
            $stmt->execute();
            $pdo->commit();
        }else{

            $sql = "SELECT * FROM products WHERE product_name = '$product_name'";
            $stmt = $pdo->query($sql);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $product_category = $row['product_category'];
            $product_brand = $row['product_brand'];
            $product_price = $row['product_price'];
            $product_image = $row['product_image'];

            $sql = "INSERT INTO cart(product_name, email, product_image, product_price, product_quantity)
            VALUES(:product_name, :email, :product_image, :product_price, :product_quantity)";

            $pdo->beginTransaction();
            $pstmt = $pdo->prepare($sql);
            $pstmt->bindValue(':product_name', $product_name, PDO::PARAM_STR);
            $pstmt->bindValue(':email', $email, PDO::PARAM_STR);
            $pstmt->bindValue(':product_image', $product_image, PDO::PARAM_STR);
            $pstmt->bindValue(':product_price', $product_price, PDO::PARAM_INT);
            $pstmt->bindValue(':product_quantity', 1, PDO::PARAM_INT);
            $pstmt->execute();
            $pdo->commit();
        }
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////카트 품목 토글//////////////////////////////////////////////////

    if(isset($_POST['get_cart_product']) || isset($_POST["go_to_buy"])){
        if(!isset($_SESSION['email'])){
            echo "<b>you have to login first</b>";
            exit();
        }

        $email = $_SESSION['email'];

        $sql = "SELECT * FROM cart WHERE email = '$email'";
        $stmt = $pdo->query($sql);
        $count = $stmt->rowCount();



        if($count === 0){
            echo "<b>your cart is empty</b>";
        }else{
            $no = 1;
            $total_amount = 0;

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $product_name = $row['product_name'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                $product_quantity = $row['product_quantity'];
                $product_total = $product_price * $product_quantity;

                $total_amount += $product_total;

                if(isset($_POST['get_cart_product'])){
                    echo "
                        <div class='row'>
                            <div class='col-md-1'>$no</div>
                            <div class='col-md-3'>
                                <img src='img/$product_image' width='60px' height='60px'>
                            </div>
                            <div class='col-md-3'>$product_name</div>
                            <div class='col-md-3'>$product_price</div>
                            <div class='col-md-2'>$product_quantity</div>
                        </div>
                    ";
                    $no++;
                }elseif(isset($_POST["go_to_buy"])){
                    echo "
                        <div class='row' id = '$product_name' value='232'>
                            <div class='col-md-2'>
                                <div class='btn-group'>
                                    <a href='#' name='$product_name' class='btn btn-danger remove'>
                                        <span class='glyphicon glyphicon-trash'></span>
                                    </a>
                                    <a href='#' name='$product_name' id='$no' class='btn btn-primary update'>
                                        <span class='glyphicon glyphicon-ok-sign'></span>
                                    </a>
                                </div>
                            </div>
                            <div class='col-md-2'>
                                <img src='img/$product_image' style='width:100px; height:100px;'>
                            </div>
                            <div class='col-md-2'>$product_name</div>
                            <div class='col-md-2'>
                                <input type='text' class='form-control price' name='$no' pname='$product_name' id='price-$no' value='$product_price' disabled>
                            </div>
                            <div class='col-md-2'>
                                <input type='text' class='form-control quantity' name='$no' pname='$product_name' id='quantity-$no' value='$product_quantity'>
                            </div>
                            <div class='col-md-2'>
                                <input type='text' class='form-control total' name='$no' pname='$product_name' id='total-$no' value='$product_total' disabled>
                            </div>
                        </div>
                        <hr>
                    ";
                    $no++;
                }
            }
            if(isset($_POST["go_to_buy"])){
                echo "
                    <div class='panel-footer'>
                        <div class='row'>
                            <div class='col-md-8></div>
                            <div class='col-md-4'>
                                <b>Total $total_amount</b>
                            </div>
                        </div>
                    </div>
                ";
            }
        }
    }
/////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////상품가져오기/////////////////////////////////////////////////


    if(isset($_POST["getProduct"])){
        $limit = 9;
        
        //페이지 넘기기
        if(isset($_POST['setPage'])){
            $pageno = $_POST['pageno'];
            $start = ($pageno * $limit) - $limit;
        }else{
            $start = 0;
        }
        

        if(isset($_POST['category_title'])){
            $category_title = $_POST['category_title'];
            $sql = "SELECT * FROM products WHERE product_category = '$category_title' LIMIT $start, $limit";
        }else{
            $sql = "SELECT * FROM products LIMIT $start, $limit";
               
        }

        
        $stmt = $pdo->query($sql);
        $count = $stmt->rowCount(); 
        
        if($count > 0){
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $product_name = $row['product_name'];
                $product_image = $row['product_image'];
                $product_brand = $row['product_brand'];
                $product_price = $row['product_price'];
                
                echo "
                    <div class='col-md-4'>
                        <div class='panel panel-info'>
                            <div class='panel-heading' style='height:50px;'>$product_name</div>
                            <div class='panel-body'>
                                <img src='img/$product_image' style='width:100%;height:100%;'>
                            </div>
                            <div class='panel-heading'>
                                $product_price WEN
                                <button id='$product_name' class='btn btn-danger btn-xs addtocart' style='float:right;'>AddToCart</button>
                            </div>
                        </div>
                    </div>
                ";
            }
        }
    }

    

////////////////////////////////////////////////////////////////////////////////


//////////////////////////////상품카테고리////////////////////////////////////////
    if(isset($_POST['categories'])){
        $sql = "SELECT * FROM categories ORDER BY category_id";
        $stmt = $pdo->query($sql);
        $count = $stmt->rowCount();
        
        if($count > 0){
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $category_title = $row["category_title"];
                $category_id = $row["category_id"];
                echo "<li><a href='item_lists.php?category_title=$category_title', class='categories_class' name='$category_id'>$category_title</a></li>";
            }
        }
    }

//////////////////////////////////////////////////////////////////////////////////////