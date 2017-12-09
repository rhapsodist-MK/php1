$(function () {
    cat();
    brand();
    product();

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
            url: "action.php",
            method: "POST",
            data: {userLogin:1, userEmail:email, userPassword:password},
            success: function(data){
                alert(data);
            }
        });
    });

});