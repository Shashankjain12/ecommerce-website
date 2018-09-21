 <?php require 'Common.php';
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=md5(mysqli_real_escape_string($con,$_POST['password']));
    $user_query="SELECT id,email FROM users WHERE e-mail='$email' and password='$password'"
    $user_result=mysqli_query($con,$user_query);
    if(mysqli_num_rows($user_result)==0){
       echo "sorry wrong username/password"; 
    }else{
        mysqli_fetch_array($user_result);
         $_SESSION['email']=$email;
    $_SESSION['id']=mysqli_insert_id($con);
    header('location:products.php');
    }?>
   