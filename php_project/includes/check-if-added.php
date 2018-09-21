<?php 
    function check_if_added_to_cart($item_id){
        require 'Common.php';
        $user_id=$_SESSION['id'];
        $rows=mysqli_query("SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and
status='Added to cart"");
if(mysqli_num_rows($rows)>=1){
return 1;
}
else{
return 0;
}
    }
    ?>