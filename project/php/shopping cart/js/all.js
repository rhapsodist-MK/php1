$(function () {
    cat();
    brand();
    product();
    cart_checkout();
    page();
    cart_container();
    cart_count();

    function cat() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                category: 1
            },
            success: function (data) {
                $("#get_category").html(data);
            }
        });
    }

    function brand() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                brand: 1
            },
            success: function (data) {
                $("#get_brand").html(data);
            }
        });
    }

    function product() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                getProduct: 1
            },
            success: function (data) {
                $("#get_product").html(data);
            }
        });
    }

    $("body").on("click", ".category", function (event) {
        event.preventDefault();
        var cat_id = $(this).attr('name');
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                get_selected_Category: 1,
                cat_id: cat_id
            },
            success: function (data) {
                $("#get_product").html(data);
            }
        });
    });

    $("body").on("click", ".brand", function (event) {
        event.preventDefault();
        var brand_id = $(this).attr('name');
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                get_selected_Brand: 1,
                brand_id: brand_id
            },
            success: function (data) {
                $("#get_product").html(data);
            }
        });
    });

    $("#search").on('keypress', function () {
        var keyword = $("#search").val();
        if (keyword != "") {
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    search: 1,
                    keyword: keyword
                },
                success: function (data) {
                    $("#get_product").html(data);
                }
            });
        }
    });

    $("#signup_button").on('click', function (event) {
        event.preventDefault();
        $.ajax({
            url: "register.php",
            method: "POST",
            data: $("form").serialize(),
            success: function (data) {
                $("#signup_msg").html(data);
            }
        });
    });

    $("#login").on('click', function(event){
        event.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();
        $.ajax({
            url: "login.php",
            method: "POST",
            data: {userLogin:1, userEmail:email, userPassword:password},
            success: function(data){
                $("#choose_signin_or_user").html(data);
                cart_container();
                cart_count();
            }
        });
    });

    $("body").on('click','.addtocart',function(event){
        event.preventDefault();
        var product_id = $(this).attr('id');
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {addProduct:1,product_id:product_id},
            success: function(data){
                $('#product_msg').html(data);
                cart_container();
                cart_count();
            }
        });
    });
    
    function cart_container(){
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {get_cart_product:1},
            success: function(data){
                $("#cart_product").html(data);
            }
        });
    }
    
    function cart_count(){
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {cart_count:1},
            success: function(data){
                $(".badge").html(data);
            }
        });
    }

    function cart_checkout(){
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {cart_checkout:1},
            success: function(data){
                $("#cart_checkout").html(data);
            }
        });
    }

    $("body").on('keyup', '.qty', function(event){
        event.preventDefault();
        var product_id = $(this).attr("name");
        var qty = $("#qty-"+product_id).val();
        var price = $("#price-"+product_id).val();
        var total = qty * price;
        $("#total-"+product_id).val(total);
    });

    $("body").on('click', '.remove', function(event){
        event.preventDefault();
        var product_id = $(this).attr('name');
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {removeFromCart:1, product_id:product_id},
            success: function(data){
                $("#cart_msg").html(data);
                cart_checkout();
            }
        });
    });

    $("body").on('click', '.update', function(event){
        event.preventDefault();
        var product_id = $(this).attr('name');
        var qty = $("#qty-"+product_id).val();
        var price = $("#price-"+product_id).val();
        var total = $("#total-"+product_id).val();
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {updateProduct:1, updateId:product_id, qty:qty, price:price, total:total},
            success: function(data){
                $("#cart_msg").html(data);
                cart_checkout();
            }
        });
    });
    
    function page(){
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {page:1},
            success: function(data){
                $("#pageno").html(data);
            }
        });
    }
    
    $("body").on('click', '.page',function(){
        var pageno = $(this).attr("page"); 
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {getProduct:1, setPage:1, pageno:pageno},
            success: function(data){
                $("#get_product").html(data);
            }
        });
    });
});