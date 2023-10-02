
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

                <div class="nav_cart">
                        <div class="menu_top">
                            <span class="nav_category">My Cart</span>
                            <button class="close_toggle">
                                <svg>
                                    <use xlink:href="./images/sprite.svg#icon-cross"></use>
                                </svg>
                            </button>
                        </div>
                        <ul class="nav_list cart_list m-0 fs-5">                            
                                <table class='table table-borderd table-striped'>
                                    <thead>
                                        <th>ITEM</th>
                                        <th>NAME</th>
                                        <th>PRICE</th>
                                        <th>QUANTITY</th>
                                        <th>TOTAL</th>
                                        <th>ACTION</th>             
                                    </thead>
                                    <tbody>
                                        <?php
                                            $grand_total = 0;
                                            $count_cart_items = 0;
                                            $cart_query = mysqli_query($connect_user_cart, "SELECT * FROM `user_cart` WHERE user_id ='$user_id'")or die ('query failed');
                                            if(mysqli_num_rows($cart_query) > 0){
                                                while($fetch_cart = mysqli_fetch_assoc($cart_query)){
                                        ?>
                                        <tr>                                            
                                                <td><img src="./images/products/<?php echo $fetch_cart['user_product_image']; ?>" alt='product-image' class='cart_image'>
                                                </td> 
                                                <td><?php echo $fetch_cart['user_product_name']; ?></td> 
                                                <td>$<?php echo $fetch_cart['user_product_price']; ?></td> 
                                                <td>
                                                    <form action="" method="post">

                                                        <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['user_product_id']; ?>">

                                                        <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['user_product_quantity']; ?>">

                                                        <input type="submit" name="update_cart" value="UPDATE" class="btn btn-warning btn-block">

                                                    </form>
                                                </td>
                                                <td>$<?php echo $sub_total =$fetch_cart['user_product_price'] * $fetch_cart['user_product_quantity']; ?></td>
                                                <td>
                                                    <a href="products.php?remove=<?php echo $fetch_cart['user_product_id']?>" class="btn btn-danger btn-block" onclick="return confirm('Remove Item from cart ?');">
                                                    Remove
                                                    </a>
                                                </td>
                                        </tr>
                                        <?php
                                            $grand_total += $sub_total;
                                            $count_cart_items += $fetch_cart['user_product_quantity'];
                                                };
                                            };
                                        ?>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td> Total All:</td>
                                            <td>$<?php echo $grand_total; ?></td>
                                            <td>
                                                <a href="products.php?delete_all" class="btn btn-danger btn-block <?php echo ($grand_total > 1)? '' : 'disabled'; ?>" onclick="return confirm('Delete all from cart ?');">
                                                Delete All
                                                </a>     
                                            </td>
                                        </tr>
                                        <tr class="order_tr">
                                            <td colspan="4"></td>
                                            <td colspan="2">
                                                <a href="user-order.php?order_now" class="btn btn-warning btn-block <?php echo ($grand_total > 1)? '' : 'disabled'; ?>">
                                                Order Now
                                                </a>     
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>                
                            </ul>
                    </div>

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
                        <div class="d-flex navbar_icons">
                            <div class="nav_icons">
                                <button class="nav__btn__login p-2" onclick="openLogin()">Login Now</button>
                            </div>
                            <div class="nav_icons">
                                <a href="#" class="icon_item icon_item_user" onclick="openUserInfo()">
                                    <svg>
                                        <use xlink:href="./images/sprite.svg#icon-user"></use>
                                    </svg>
                                </a>
                                <a class="icon_item cart-icon">
                                    <svg>
                                        <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
                                    </svg>
                                    <span id="cart_count" class="quantity"><?php echo $count_cart_items; ?></span>
                                </a>
                            </div>
                            <div class="user-info">
                                <button class="close_toggle">
                                    <svg>
                                        <use xlink:href="./images/sprite.svg#icon-cross"></use>
                                    </svg>
                                </button>
                                <p>Username :<?php 
                                if(isset($user_id)){
                                    echo $fetch_user['user_name'];
                                }else{
                                    echo 'You have to login';
                                }
                                ?> </p>
                                <p>Email :<?php
                                 if(isset($user_id)){
                                    echo $fetch_user['user_email'];
                                }else{
                                    echo 'You have to login';
                                }                                 
                                ?> </p>
                                <a href="products.php?logout=<?php echo $user_id; ?>" class="btn btn-danger fs-5" onclick="return confirm('Are you sure you want to logout?')">Logout</a>            
                            </div>
                        </div>
                    </div>
                    
                </div>
            </nav>
            <!--Navbar-->
        </header><!--./header-->


