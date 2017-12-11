    $(function () {
    product();
    categories();
    go_to_buy();
    page();
    cart_container();
    cart_count();


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



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////keyword searching////////////////////////////////////////////////////////////////////////

    $("#search").on('keypress', function(){
        var keyword = $("#search").val();
        if(keyword != ""){
            ajax1('action.php', {search:1, keyword:keyword}, '#get_product');
        }
    });



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////pageing////////////////////////////////////////////////////////////////////////



    $("body").on('click', '.page', function(){
        var pageno = $(this).attr('name');
        ajax1('action.php', {getProduct:1, setPage:1, pageno:pageno}, "#get_product");
    });

    function page(){
        ajax1('action.php', {page:1}, '#pageno');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////update quantity////////////////////////////////////////////////////////////////////////


    $("body").on('click', '.update', function(event){
        event.preventDefault();
        var no = $(this).attr('id');
        var product_name = $(this).attr('name');
        var product_quantity = $('#quantity-' + no).val();
        var product_price = $('#price-' + no).val();
        var total = $('#total-' + no).val();

        ajax2('action.php', {updateProduct:1, product_name:product_name, product_quantity:product_quantity, product_price:product_price}, function(data){
            $('#cart_msg').html(data);
            go_to_buy();
            cart_container();
            cart_count();
        });
    });

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////total quantity////////////////////////////////////////////////////////////////////////


    $("body").on('keyup', '.quantity', function(event){
        event.preventDefault();
        var no = $(this).attr("name");
        var product_quantity = $(this).val();
        var product_price = $("#price-" + no).val();
        var total = product_quantity * product_price;
        $("#total-" + no).val(total);
    });

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////remove things////////////////////////////////////////////////////////////////////////////////
    $("body").on('click', '.remove', function(event){
        event.preventDefault();
        var product_name = $(this).attr('name');

        ajax2('action.php', {removeFromCart:1, product_name:product_name}, function(data){
            $('#cart_msg').html(data);
            go_to_buy();
            cart_container();
            cart_count();
        });
    });

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////how many things in the cart//////////////////////////////////////////////////////////////

    function cart_count(){
        ajax1('action.php', {cart_count:1}, '.badge');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////go to buy section/////////////////////////////////////////////////////////////



    function go_to_buy(){
        ajax1('action.php', {go_to_buy:1}, "#cart_list");
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////addtocart button add product/////////////////////////////////////////

    $("body").on('click','.addtocart', function(event){
        event.preventDefault();
        var product_name = $(this).attr('id');
        ajax2('action.php', {addProduct:1, product_name:product_name}, function(data){
            $('#product_msg').html(data);
            /*$("#badge").animate({
                width:['toggle', 'swing'],
                height:['toggle', 'swing'],
                color: red,
                opacity: 'toggle'
            }, 2000, 'linear');*/
            $("#badge").animate({'fontSize':'3em'});
            $("#badge").animate({'fontSize':'1em'});
            cart_container();
            cart_count();
        });
    });
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////카트 품목 토글/////////////////////////////////////////////////////////


    function cart_container(){
        ajax1('action.php', {get_cart_product:1}, "#cart_product");
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////login/////////////////////////////////////////////////////////////

    $("#login").on('click', function(event){
        event.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();

        ajax2('login.php', {userLogin:1, userEmail:email, userPassword:password},function(data){
                $('#choose_signin_or_user').html(data);
                categories();
                cart_container();
                cart_count();
            });
    });

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
 //////////////////////////////////////sign up, Validation check//////////////////////////////////////////////////

    $('.signupbtn').on('click', function(event){
        event.preventDefault();
        ajax1('register.php', $('form').serialize(), "#successcheck");
        alert('signed up sccessfuly');
        location.href = 'index.php';

    });
    
    $('form').find('#email').on('blur', function(event){
        event.preventDefault();
        ajax1('./check/emailcheck.php', $('form').serialize(), "#emailcheck");
        $('#emailcheck').show();
    });
    
    $('form').find('#password').on('blur', function(event){
        event.preventDefault();
        ajax1('./check/passwordcheck.php', $('form').serialize(), "#passwordcheck");
        $('#passwordcheck').show();
        
    });

    $('form').find('#repassword').on('blur', function(event){
        event.preventDefault();
        ajax1('./check/repasswordcheck.php', $('form').serialize(), "#repasswordcheck");
        $('#repasswordcheck').show();
    });

    $('form').find('#mobile').on('blur', function(event){
        event.preventDefault();
        ajax1('./check/mobilecheck.php', $('form').serialize(), "#mobilecheck");
        $('#mobilecheck').show();
    });    
////////////////////////////////////////////////////////////////////////////////////// 

 ////////////////////////////////////get product///////////////////////////////////  
    function product(){
        ajax1("action.php", {getProduct:1}, "#get_product");
    }
////////////////////////////////////////////////////////////////////////////////////// 
    
//////////////////////////////get category////////////////////////////////////////
    function categories(){
        ajax1("action.php", { categories:1 }, "#get_categories");
    }

//////////////////////////////////////////////////////////////////////////////////////  
    function ajax1(url, data, success){
        $.ajax({
            url: url,
            method: "POST",
            data: data,
            success: function(data){
                $(success).html(data);
            }
        });
    }

    function ajax2(url, data, success){
        $.ajax({
            url: url,
            method: "POST",
            data: data,
            success: success
        });
    }
});