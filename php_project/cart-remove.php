<?php 
require 'Common.php';
$item_id=$_SESSION['item_id'];
$user_id=$_SESSION['user_id'];
<a href="../cart-remove.php?id='.$user_id.'&item_id='.$item_id.'" style="margin-top:15px;">Remove from cart</a>
$row=mysqli_query("DELETE from items WHERE id='$item_id'");
header('location:cart.php');
?>