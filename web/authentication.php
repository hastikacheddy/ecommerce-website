<?php
include "connection.php";

if(isset($_POST['login'])){
    
    $_POST['email'] = $email;
    $_POST['password']= $password;
    $sql=mysqli_query($con,"SELECT * FROM password where email='$email' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    
    if(is_array($row))
    {
        
        $_SESSION["email"]=$row['email'];
        $_SESSION["username"]=$row['username'];
        header("Location: home.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>

    

