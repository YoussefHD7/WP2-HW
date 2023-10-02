<?php

include 'config.php';

if(isset($_POST['login-submit'])) {

    $email = mysqli_real_escape_string($connect_user_table,$_POST['email']);
    $pass = mysqli_real_escape_string($connect_user_table,md5($_POST['password']));

    $select = mysqli_query($connect_user_table, "SELECT * FROM `user_table` WHERE user_email = '$email' AND user_password = '$pass'") or die ('query failed');

    if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['user_id'];
        header('location:products.php');
    }else{
        $message[] = 'Incorrect email or password! Click here to remove Message';
    }
}

?>

   

<div class="login-window">     
            <div class="login-visit">
            <p class="login-visit-title"> Welcome to New-store</p>
            <div class="login-visit-buttons"> 
            <button class="visit-button hero__btn" onclick="bingToLogin()">Login</button>     
            <button class="login-button hero__btn" id="visit" onclick="bingToWebsite()">Visit</button>   
            </div>    
            </div>
            
            <div class="login-section">
            <div class="login-section-content">
            <button data-close-button class="close-button" onclick="backToVisit()" >&times;</button> 
            <div> 
                <p class="login-title">Login</p> 
                <form action="" method="post"> 
                    <div class="input-email-i">
                        <input type="email" name="email" placeholder="Email" required> 
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="input-password-i">
                        <input type="password" name="password" placeholder="Password" required> 
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </div>
                    <div class="remember-forgot">
                        <input type="checkbox" id="rem-login1">
                            <label for="rem-login1">Remember me</label>
                        <a href="index.html" class="login-forgot-pas">
                            <p>Forgot password?</p>
                        </a>
                    </div> 
                    <input type="submit" name="login-submit" value="login Now" class="btn hero__btn login-submit" >  
                    <div class="signup-now">
                        <p>Don't have account?</p>   
                        <p class="signup-now-p" onclick="goToSignup()">Sign Up Now</p>   
                    </div>
                </form> 
            </div>
            </div>   
            </div>


             
