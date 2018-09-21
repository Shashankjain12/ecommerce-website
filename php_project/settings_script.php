 <?php require 'Common.php';
    if (isset($_SESSION['email'])) {
header('location: products.php');
}
$password=$_POST['password'];
$password1=$_POST['password1'];
if(strlen($password)==strlen($password1)){
    echo "wrong password";
}
$rows=mysqli_query("SELECT password from users")
if($password==$password1){
    $update_password_query="UPDATE users SET password='$password' where id='$user_id'";
    $update_password_result=mysqli_query($con,$update_password_query) or die(mysqli_error($con));
}else{
    header('location:settings.php');
 
}
?>