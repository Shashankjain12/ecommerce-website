<?php require 'Common.php';
session_start();
if (isset($_SESSION['email'])) {
header('location: cart.php');
} 
$user_id=$_SESSION['id']
$items_added_to_cart=mysqli_query("SELECT * FROM users_products INNER JOIN user ON users_products.item=user.item");
if(mysqli_num_rows($items_added_to_cart)==0){
    echo "ADD items to cart first";
}
else{
   $total=0;
    while ($row= mysqli_fetch_array($items_query_result)) {  
        $total+=$row['price'];  
        echo "<tr>";
        echo "<td>";
            echo $row['id'];
        echo "</td>";
        echo "<td>";
            echo $row['name'];
        echo '<a href="cart-remove.php?id='.$row['id'].'" class='remove_item_link ' style="color:#e53939">Remove </a>'; 
        echo "</td>";
        echo "<td>";
            echo "Rs ".$row['price'];
        echo "</td>";
        echo "<td>";
            echo "Rs ".$total;
            echo '<a href="success.php?id=" class='btn btn-primary'>Confirm Order</a>';
        echo "</td>";
        echo"</tr>";
     }
}?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="content"><?php include 'header.php';?>
                            <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                            <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                            <li><a href = ""><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td><td>Total</td><td>Rs </td><td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><?php include 'footer.php';?>
    </body>
</html>