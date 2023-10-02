<?php

session_start();

/* connect to user table */
include 'config.php';

/* user id */
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    //header('location:products.php');  
};

/* logout */
if(isset($_GET['logout'])){
    unset($user_id);
    session_destroy();
    //unset($_SESSION['user_id']);   
    $message[] = 'You must login';
    header('location:products.php');
};

/* user info */
$select_user = mysqli_query($connect_user_table,"SELECT * FROM `user_table` WHERE user_id = '$user_id'") or die ('query failed');
if(mysqli_num_rows($select_user) > 0){
    $fetch_user = mysqli_fetch_assoc($select_user);
};

                                         
         

/* user cart*/  
$connect_user_cart = mysqli_connect("localhost","root","","user");

if(!isset($user_id)){
    $message[] = 'You must login';  
}else{
    if(isset($_POST['add_to_cart'])) {

        $product_id = $_POST['id'];
        $product_name = $_POST['name'];
        $product_price = $_POST['price'];
        $product_image = $_POST['image'];
        $product_quantity = $_POST['quantity'];
        $product_info = $_POST['info'];
        
        $select_user_cart = mysqli_query($connect_user_cart, "SELECT * FROM `user_cart` WHERE user_product_name = '$product_name' AND user_id ='$user_id'")or die ('query failed');
    
        if(mysqli_num_rows($select_user_cart) > 0){
            $message[] = 'Product already added to cart';
        }else{
            mysqli_query($connect_user_cart, "INSERT INTO `user_cart`(user_product_id,user_id,user_product_name,user_product_price,user_product_image,user_product_quantity,user_product_info,order_date) VALUES ('$product_id','$user_id','$product_name','$product_price','$product_image','$product_quantity','$product_info',NOW())") or die ('query failed');
            $message[] = 'Product added to cart';
        }
    };
    
};

/* set order time into database */
          

/* update quantity for cart */
if(isset($_POST['update_cart'])) {
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];
    mysqli_query($connect_user_cart, "UPDATE `user_cart` SET user_product_quantity = '$update_quantity' WHERE user_product_id = '$update_id' ") or die ('query failed');
};

/* remove item from cart */
if(isset($_GET['remove'])){
    $remove_item_id = $_GET['remove'];
    mysqli_query($connect_user_cart, "DELETE FROM `user_cart` WHERE user_product_id = '$remove_item_id' ") or die ('query failed');
};

/* delete all items from cart */
if(isset($_GET['delete_all'])){
    mysqli_query($connect_user_cart, "DELETE FROM `user_cart` WHERE user_id = '$user_id' ") or die ('query failed');
};

/* conncet to shopping cart database */
$connect_shopping_cart = mysqli_connect("localhost","root","","shopping_cart");
?>
<!-- Header Products -->
<?php
    include 'header-products.php';
?>
        <!--Products-->
        <div class="container products-section">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 d-flex flex-wrap justify-content-around">
                        <h2 class="text-left products-title-section">
                            Our Products
                        </h2>

                        <?php
                            $query = "SELECT * FROM cart_item";
                            $result = mysqli_query($connect_shopping_cart,$query);

                            while($row = mysqli_fetch_array($result)){?>
                                <form method="post" action="products.php?id=<?=$row['id']?>" class="col-md-3 m-5 text-center product">
                                    <img src="./images/products/<?=$row['image']?>" style='height:250px;' class="mb-4">
                                    <h4 class="text-center"><?=$row['name']?></h4>
                                    <div class="product__info">
                                        <ul>
                                            <li class="text-center"><?=$row['info']?></li>
                                        </ul>                    
                                    </div>
                                    <h4 class="text-center"><?= "$",number_format($row['price'],0)?></h4>
                                    <input type="hidden" name="id" value="<?=$row['id']?>">
                                    <input type="hidden" name="image" value="<?=$row['image']?>">
                                    <input type="hidden" name="name" value="<?=$row['name']?>">
                                    <input type="hidden" name="price" value="<?=$row['price']?>">
                                    <input type="number" name="quantity" value="1" class="form-control fs-5">
                                    <input type="hidden" name="info" value="<?=$row['info']?>">
                                    <input type="submit" name="add_to_cart" value="ADD TO CART" class="btn my-4 fs-5 product__btn">                           
                                </form>                              
                            <?php }
                        ?>
                               
                    </div>
                </div>
            </div>
        </div>

        <!--offers-->
        <section class="section offers" id="offers">
                <div class="container">
                    <div class="title__container">
                        <div class="section__title active" data-id="Latest Products">
                            <h1 class="primary__title">Latest Offers</h1>
                        </div>
                    </div>
                    <div class="offers__container">
                    <?php
                            $query2 = "SELECT * FROM offers_item";
                            $result2 = mysqli_query($connect_shopping_cart,$query2);

                            while($row2 = mysqli_fetch_array($result2)){?>
                            <div class="offers__box">
                                <div class="offer_box_data">
                                    <form method="post" action="products.php?id=<?=$row2['id']?>" class="col-md-3 m-5 text-center product">
                                        <div class="img__container">
                                            <img src="./images/products/<?=$row2['image']?>" class="offers_01">
                                        </div>
                                        <div class="offers__content">
                                            <div class="offers__data">
                                                <span>New Offer Introduced</span>
                                                <h2><?=$row2['name']?></h2>
                                                <h4><s style="color:red;"><?= "$",number_format($row2['old_price'],0)?></s></h4>
                                                <h4><?= "$",number_format($row2['price'],0)?></h4>

                                                <input type="hidden" name="id" value="<?=$row2['id']?>">
                                                <input type="hidden" name="image" value="<?=$row2['image']?>">
                                                <input type="hidden" name="name" value="<?=$row2['name']?>">
                                                <input type="hidden" name="price" value="<?=$row2['price']?>">
                                                <input type="hidden" name="old_price" value="<?=$row2['old_price']?>">
                                                <input type="number" name="quantity" value="1" class="form-control fs-5">
                                                <input type="submit" name="add_to_cart" value="ADD TO CART" class="btn my-4 fs-5 product__btn">
                                            </div>
                                        </div> 
                                      
                                </div>                                       
                                <div class="offer_box_info">
                                    <ul>
                                        <li class="text-center"><?=$row2['info']?></li>
                                    </ul>  
                                </div>
                                </form>
                            </div>                            
                            <?php }
                        ?>
                    </div>
                </div>
        </section>  

        <!-- Footer -->
        <?php
            include 'footer.php';
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="./js/cart.js"></script>
        <script src="./js/login.js"></script>                        
    </body>
</html>