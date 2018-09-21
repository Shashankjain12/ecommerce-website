<?php require 'Common.php';
    if (!isset($_SESSION['email'])) {
header('location:index.php');
        $rows=mysqli_query("SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and
status='confirmed'");
echo "Your order is confirmed. Thank you for shopping with us.<a href="products.php"> Click
here </a>to purchase any other item."} 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body><?php include 'header.php';?>
                        <li><a href = "cart.html"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li><a href = "settings.html"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href = ""><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.html">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div><?php include 'footer.php';?>
    </body>
</html>