<?php require 'Common.php';
$email=$_POST['e-mail'];
$password=$_POST["password"];
$city=$_POST["city"];
$contact=$_POST["contact"];
$address=$_POST["_address"];
$regex_email="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}";
if(!preg_match($regex_email,$email)){
    header('location:index.php');
}
$user_email_query=mysqli_query("SELECT id from users WHERE email='$email'");
if(mysqli_num_rows($user_email_query>0){
    echo "email exists";
}
else{
    $user_registration_query="insert into users(email,password,city,contact,address) values ('$email','$password','$city','$contact','$address')";
    $user_registration_submit=mysqli_query($con,$user_registration_query)
        or die(mysqli_error($con);
    $_SESSION['id']=mysqli_insert_id($con);
                $_SESSION['email']=$email;
                header('location:products.php');
               }?>