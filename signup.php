<?php

include 'config.php';

if(isset($_POST['signup-submit'])) {

$name = mysqli_real_escape_string($connect_user_table,$_POST['name']);
$email = mysqli_real_escape_string($connect_user_table,$_POST['email']);
$pass = mysqli_real_escape_string($connect_user_table,md5($_POST['password']));
$cpass = mysqli_real_escape_string($connect_user_table,md5($_POST['cpassword']));

$select = mysqli_query($connect_user_table, "SELECT * FROM `user_table` WHERE user_name = '$name' AND user_email = '$email'") or die ('query failed');

if(mysqli_num_rows($select) > 0){
    $message[] = 'User already exist! Click here to remove Message';
}else{
    mysqli_query($connect_user_table, "INSERT INTO `user_table`(user_name,user_email,user_password) VALUES ('$name','$email','$pass')") or die ('query failed');
    $message[] = 'Registered successfully! Click here to remove Message and go to login';
    //header('location:products.php');
}
}
?>

<div class="signup-section">
            <button data-close-button class="close-button" onclick="backToVisit()" >&times;</button> 
            <div> 
                <p class="signup-title">Sign Up</p> 
                <form action="" method="post"> 
                    <div class="input-username-i">
                        <input type="text" name="name" placeholder="Username" required> 
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="input-email-i">
                        <input type="email" name="email" placeholder="E-mail" required> 
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="input-password-i">
                        <input type="password" name="password" placeholder="Password" required> 
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </div>
                    <div class="input-password-i">
                        <input type="password" name="cpassword" placeholder="Confirm Password" required> 
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </div>
                    <input type="submit" name="signup-submit" value="Signup Now" class="btn hero__btn signup-submit" > 
                    <div class="signup-now">
                        <p>Already have an account?</p>
                        <p class="backtologin-p" onclick="backToLogin()">Login</p> 
                    </div>
                </form> 
            </div>   
            </div>    
        </div>