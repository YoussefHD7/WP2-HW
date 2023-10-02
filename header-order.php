
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

         <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!--Google Font-->
        <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;700&display=swap" rel="stylesheet" />

        <!--Favicon-->
        <link rel="shortcut icon" href="./images/favicon.ico" type="images/x-icon" />

        <!--Glidejs Carousel-->
        <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">

        <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">

        <!--Animate on Scroll-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        
        <!--StyleSheet-->
        <link rel="stylesheet" href="./style.css" />

        <title>New-store Shop</title>
    </head>

    <body>
          
        <!--login -->
        <?php
            include 'login.php';
        ?>
        
        <?php
            include 'signup.php';
        ?>

        <?php
        if(isset($message)){
            foreach($message as $message){
                echo '<div class="signup-message" onclick="this.remove(), removeLogin()">'.$message.'</div>';
            }
        }
        ?>     
              
        <!-- login-->
        <!--Header-->
        <header class="header" id="header">
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg p-3 fixed-top">
                <div class="container">
                    <div class="nav_logo me-5">
                        <a href="#" class="scroll-link">New-store</a> 
                    </div><!--./nav_logo-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon tog"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase fs-5">
                            <li class="nav_item">
                                <a href="./index.php" class="navbar_a_style">Home</a>
                            </li>
                            <li class="nav_item">
                                <a href="./products.php" class="">Products</a>
                            </li>
                            <li class="nav_item">
                                <a href="./user-order.php" class="">Order</a>
                            </li>
                            <li class="nav_item">
                                <a href="./index.php" class="">About Us</a>
                            </li>

                            <li class="nav_item">
                                <a href="./index.php" class="">Contact Us</a>
                            </li>
                            
                        </ul>
                    </div>                 
                </div>
            </nav>
            <!--Navbar-->
        </header><!--./header-->


