<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
        table tr td{
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php require_once 'navbar.php'; ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <h1>Customer Order details</h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="img/acoustic_dame_Lilies%20T100.jpg" class="img-thumbnail" style="float:right;">
                            </div>
                            <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td>Product Name</td>
                                        <td><b>sadfasdf</b></td>
                                    </tr>
                                    <tr>
                                        <td>product Price</td>
                                        <td><b>$500</b></td>
                                    </tr>
                                    <tr>
                                        <td>Quantity</td>
                                        <td><b>3</b></td>
                                    </tr>
                                    <tr>
                                        <td>Payment</td>
                                        <td><b>Completed</b></td>
                                    </tr>
                                    <tr>
                                        <td>Transaction Id</td>
                                        <td><b>asdfsefsef</b></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>    
    </div>
    
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
</body>
</html>